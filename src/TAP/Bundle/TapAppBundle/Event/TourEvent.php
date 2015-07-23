<?php
namespace TAP\Bundle\TapAppBundle\Event\UserEvent;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TAP\Bundle\TapAppBundle\Entity\Tour;
use TAP\Bundle\TapAppBundle\Entity\User;
use TAP\Bundle\TapAppBundle\Entity\Participant;


class UserEvent extends Event {

    protected $userEntity;
    protected $tourEntity;

    public function __construct() {
        $this -> userEntity = new User();
        $this -> tourEntity = new Tour();
    }

    public function addTour(Request $request) {
        $tour = $this->getDoc
    }

    public function editTour(Request $request) {

    }

    public function removeTour(Request $request) {

    }

    public function suspendTour(Request $request) {

    }

    public function reopenTour(Request $request) {

    }

    public function getTourList($flag) {

    }

    public function getTourByKey($tourKey) {

    }

    public function inviteToTour(Request $request) {

    }

    public function sortTourList(Request $request) {

    }

    public function reviewTour(Request $request) {

    }

    public function getTourReview(Request $request) {

    }

    public function getUserReview(Request $request) {

    }

}
