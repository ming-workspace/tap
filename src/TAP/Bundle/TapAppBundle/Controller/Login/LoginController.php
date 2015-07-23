<?php
// src/TAP/Bundle/TapAPPBundle/Controller/Login/LoginController.php
namespace TAP\Bundle\TapAppBundle\Controller\Login;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LoginController {
    /**
     * @Route("/login/check-facebook")
     */
    public function loginAction() {
        $template = "login/index.html.twig";
        return $this -> render($template);
    }

}
