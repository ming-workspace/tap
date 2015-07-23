<?php
namespace TAP\Bundle\TapAppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TAP\Bundle\TapAppBundle\Event\FormEvent;
use TAP\Bundle\TapAppBundle\Entity\Tour;
use TAP\Bundle\TapAppBundle\Entity\User;
use TAP\Bundle\TapAppBundle\Entity\Participant;

define('TOUR_AVAILABLE', 1);
define('TOUR_SUSPENDED', 2);
define('TOUR_CLOSED', 3);

class TourController extends Controller {

    protected $request;
    protected $userEntity;
    protected $userManager;
    protected $userRepository;
    protected $tourEntity;
    protected $tourManager;
    protected $tourRepository;
    protected $participantEntity;
    protected $participantManager;
    protected $participantRepository;

    public function __construct() {
        $this -> request = Request::createFromGlobals();
        $this -> userEntity = new User();
        $this -> userManager = $this -> getDoctrine() -> getManager();
        $this -> userRepository = $this -> getDoctrine() -> getRepository('TapAppBundle:User');
        $this -> tourEntity = new Tour();
        $this -> tourManager = $this -> getDoctrine() -> getRepository();
        $this -> tourRepository = $this -> getDoctrine() -> getRepository('TapAppBundle:Tour');
        $this -> participantEntity = new Participant();
        $this -> participantManager = $this -> getDoctrine() -> getManager();
        $this -> participantRepository = $this -> getDoctrine() -> getRepository('TapAppBundle:Participant');
    }

    public function indexAction($userKey) {
        $providedTourList = $this -> getProvidedTourList($userKey);
        $purchasedTourList = $this -> getPurchasedTourList($userKey);
        return $this -> render('TapAppBundle:main:index.html.twig', $providedTourList, $purchasedTourList);
    }

    public function getTourAction($request) {
        $tourDetail = $this -> getTourDetail($request['tour_key']);
    }

    public function addTourAction(Request $request) {
        $tourEntity = new Tour();
        if ($request['title']) {
            $tourEntity -> setTitle($request['title']);
        }
        if ($request['provider_key']) {
            $tourEntity -> setProviderUserKey($request['provider_key']);
        }
        if ($request['price']) {
            $tourEntity -> setPrice($request['price']);
        }
        if ($request['country']) {
            $tourEntity -> setCountry($request['country']);
        }
        if ($request['city']) {
            $tourEntity -> setCity($request['city']);
        }
        if ($request['description']) {
            $tourEntity -> setDescription($request['description']);
        }
        if ($request['start_time']) {
            $tourEntity -> setStartTime($request['start_time']);
        }
        if ($request['end_time']) {
            $tourEntity -> setEndTime($request['end_time']);
        }
        if ($request['capacity']) {
            $tourEntity -> setCapacity($request['capacity']);
        }
        if ($request['category']) {
            $tourEntity -> setCapacity($request['category']);
        }
        if ($request['invitation_only']) {
            $tourEntity -> setInvitationOnly($request['invitation_only']);
        }
        $this -> tourManager -> persist($tourEntity);
        $this -> tourManager -> flush();
        $tourKey = $tourEntity -> getTourKey();
        return $this -> getTourAction($tourKey);
    }

    public function editTourAction($request) {
        $tourKey = $this -> editTour($request);
        return $this -> getTourAction($tourKey);
    }

    public function removeTourAction() {

    }

    public function suspendTourAction() {

    }

    public function reopenTourAction() {

    }

    public function recreateTourAction() {
    }

    public function searchTourAction() {
        $keyword = $this -> request -> get('keyword');
        $price = $this -> request -> get('price');
        if ($keyword) {
            $query = 'SELECT t FROM TapAppBundle:Tour t WHERE ';
            $parameter;
            if ($keyword) {
                $query .= 't.title LIKE %":title" OR ' . 't.description LIKE %":description"% OR ' . 't.country LIKE %":country" OR ' . 't.city LIKE %"city"%" ';
                $parameter = array('title' => $keyword, 'description' => $keyword, 'country' => $keyword, 'city' => $keyword, );
            }
            if ($price) {
                $price = explode('~', $price);
                $query .= 't.price BETWEEN :price_from AND :price_to';
                $parameter['price_from'] = $price[0];
                $parameter['price_to'] = $price1[];
            }
            $queryEntity = $this -> tourManager -> createQuery($query) -> setParameter($parameter);
            $tourList = $queryEntity -> getResult();
            //Assign to template
        } else {
            $this -> indexAction();
        }
    }

    public function reviewTourAction() {

    }

    public function sortTourAction() {

    }

    public function getTourReviewAction() {

    }

    public function getUserReviewAction() {

    }

    public function getOrganizerAction() {

    }

    public function editTour($request) {
        $tour = $this -> tourRepository -> findByTourKey($request['tour_key']);
        if (!$tour) {
            throw $this -> createNotFoundException();
        }
        if ($this -> request -> get('title')) {
            $tour -> setTitle($this -> request -> get('title'));
        }
        if ($this -> request -> get('price')) {
            $tour -> setPrice($this -> request -> get('price'));
        }
        if ($this -> request -> get('country')) {
            $tour -> setCountry($this -> request -> get('country'));
        }
        if ($this -> request -> get('city')) {
            $tour -> setCity($this -> request -> get('city'));
        }
        if ($this -> request -> get('description')) {
            $tour -> setDescription($this -> request -> get('description'));
        }
        if ($this -> request -> get('category')) {
            $tour -> setCategory($this -> request -> get('category'));
        }
        if ($this -> request -> get('start_time')) {
            $tour -> setStartTime($this -> request -> get('start_time'));
        }
        if ($this -> request -> get('end_time')) {
            $tour -> setEndTime($this -> request -> get('end_time'));
        }
        if ($this -> request -> get('title')) {
            $tour -> setTitle($this -> request -> get('title'));
        }
        $tour -> flush();
        return $request['tour_key'];
    }

    public function getProvidedTourList($userKey) {
        $tourList = $this -> tourRepository -> findByProviderUserKey($userKey);
        if (!$tourList) {
            return false;
        }
        return $tourList;
    }

    public function getPurchasedTourList($userKey) {
        $tourList = $this -> tourRepository -> findByConsumerUserKey($userKey);
        if (!$tourList) {
            return false;
        }
        return $tourList;
    }

    public function getParticipantList($tourKey) {
        $participantList = $this -> participantRepository -> findByTourKey($tourKey);
        if (!$participantList) {
            return false;
        }
        return $participantList;
    }

    public function getTourDetail($tourKey) {
        $tourDetail = $this -> tourRepository -> findByTourKey($tourKey);
        $participantList = $this -> getParticipantList($tourKey);
        $participantInfo;
        if ($participantList) {
            foreach ($participantList as $participant) {
                $participantInfo[] = $this -> userRepository -> findByUserKey($participant['user_key']);
            }
        }
        $tourDetail['participantList'] = $participantInfo;
        return $tourDetail;
    }

    public function checkCapacity($tourKey) {
        $tourInfo = $this -> tourRepository -> findByTourKey($tourKey);
        $participantList = $this -> getParticipantList($tourKey);
        if ($tourInfo['capacity'] <= count($participantList)) {
            return 0;
        }
        return 1;
    }

    public function checkTourRequest($request) {

    }

    public function uploadImage() {

    }

    public function uploadVideo() {

    }

    public function getImages($tourKey) {

    }

    public function getVideos($tourKey) {

    }

}
