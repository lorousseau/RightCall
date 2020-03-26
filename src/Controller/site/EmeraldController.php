<?php

namespace App\Controller\site;

use App\Data\SearchData;
use App\Form\SearchForm;
use App\parsing\emerald_parsing;

use App\Repository\AppelAPublicationRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;

class EmeraldController extends AbstractController
{
  /**
  * @Route("/site_ref", name="emerald")
  * @return Response
  */

  public function emerald(AppelAPublicationRepository $repository, Request $request): Response
  {
      $data = new SearchData();
      $data->page = $request->get('page', 1);
      $form = $this->createForm(SearchForm::class, $data);
      $form->handleRequest($request);

      $publication = $repository->afficheAppelAPublication($data);
      return $this->render('pagesWeb/emerald.html.twig', [
          'publication' => $publication,
      ]);
  }
}
