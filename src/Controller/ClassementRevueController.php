<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ClassementRevueController extends AbstractController
{
  /**
  * @Route("/classementRevue", name="cclassement")
  * @return Response
  */

  public function classement(): Response
  {
    return $this->render('pagesWeb/classementRevue.html.twig');
  }

}


