<?php
namespace TAP\Bundle\TapAppBundle\Event\UserEvent;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserEvent extends Event {

    protected $userEntity;

    public function __construct() {

    }

    public function editProfile(Request $request) {

    }

}
