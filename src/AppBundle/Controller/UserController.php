<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route ("/user/login", name="userLogin")
     */
    public function loginAction()
    {
//        $r = $this->getDoctrine()->getRepository('AppBundle:OnlinerPosts')->findOneBy(['id' => 1]);
        return $this->render('user/login.html.twig', array(

        ));
    }
}
