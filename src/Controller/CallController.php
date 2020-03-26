<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CallController extends AbstractController
{
  /**
  * @Route("/call", name="call")
  * @return Response
  */

  public function index(): Response
  {
    return $this->render('pagesWeb/call.html.twig');
  }

}
