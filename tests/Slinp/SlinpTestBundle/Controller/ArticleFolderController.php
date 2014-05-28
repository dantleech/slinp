<?php

namespace Slinp\SlinpTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Slinp\SlinpBundle\Annotation\Route;

class ArticleFolderController extends Controller
{
    /**
     * @Route(pattern="/")
     */
    public function showAction($node)
    {
        return $this->render('SlinpTestBundle:ArticleFolder:show.html.twig', array(
            'node' => $node
        ));
    }
}
