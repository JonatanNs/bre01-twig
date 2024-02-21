<?php

require 'controllers/AbstractController.php';
require 'managers/PostManager.php';
require 'managers/CategoryManager.php';

use Symfony\Component\HttpFoundation\Response; 

class BlogController extends AbstractController {
    /**
     * @Route("/", name="home")
     */
    public function home() {
        $postManager = new PostManager();
        $posts = $postManager->findAll();
        $categoryManager = new CategoryManager();
        $category = $categoryManager->findAll();
        return $this->render("home.html.twig", ["posts" => $posts, "category" => $category]);
}

}