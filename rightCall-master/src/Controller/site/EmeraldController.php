<?php

namespace App\Controller\site;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class EmeraldController extends AbstractController
{
  /**
  * @Route("/site_ref", name="emerald")
  * @return Response
  */

  public function emerald(): Response
  {
    return $this->render('pagesWeb/emerald.html.twig');
  }

}


