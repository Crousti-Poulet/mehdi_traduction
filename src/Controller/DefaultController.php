<?php

namespace App\Controller;

use App\Controller\DefaultController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /** @Route
     * ("/", name="homePage") 
     */
    public function homeAction(Request $request)
    {
        return $this->render('default_pages/home.html.twig');
    }
}