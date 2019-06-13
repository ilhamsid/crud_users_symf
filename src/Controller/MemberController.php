<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/member") */
class MemberController extends AbstractController
{
    /**
     * @Route("/", name="app_member_index")
     */
    public function index() {
        return $this->render('member/index.html.twig', ['title'=>'Espace Member']);
    }
}
