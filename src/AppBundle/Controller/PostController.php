<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    /**
     * @Route ("/posts/{project}", name="onlPostsByProject")
     */
    public function onlPostsByProjectAction($project)
    {
        $onlPosts = $this->getDoctrine()->getRepository('AppBundle:OnlinerPosts')->findBy([
            'project' => $project
        ], [], 20);

        return $this->render('onlPost/list.html.twig', [
            'onlPosts' => $onlPosts,
            'project' => $project,
        ]);
    }

    /**
     * @Route ("/post/{postId}", name="onlPostView")
     */
    public function onlPostViewAction($postId)
    {

    }
}
