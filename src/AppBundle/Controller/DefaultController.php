<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/old", name="homepage_old")
     * TODO: remove it later
     */
    public function indexOldAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * Main page action (homepage)
     *
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('default/homepage.html.twig', array(
            'number' => $number,
        ));
    }
}
