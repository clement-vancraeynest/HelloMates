<?php

namespace HM\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('HMMainBundle:Default:index.html.twig');
    }

}
