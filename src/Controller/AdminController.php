<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/admin") */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_index")
     */
    public function index(UserRepository $userRepository) {
    	return $this->render('admin/index.html.twig', ['title'=>'Espace Admin']);
    }
}
