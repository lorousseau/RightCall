<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Form\SearchForm;
use App\parsing\emerald_parsing;

use App\Repository\AppelAPublicationRepository;
use App\Repository\RevueRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{
  /**
  * @Route("/", name="home")
  * @return Response
  */

  public function index(AppelAPublicationRepository $repository, RevueRepository $revue, Request $request)
  {

    //parseur emerald 
    $xml = new emerald_parsing(); 
    $repository->remplissageBDEmerald($xml);

    //parseur SJR 
    $revue->sjr_parsing();

    //Gestion du filtre
    $data = new SearchData();
    $data->page = $request->get('page', 1); //pour la pagination
    $form = $this->createForm(SearchForm::class, $data);
    $form->handleRequest($request);
    $recherches = $repository->findSearch($data);
    return $this->render('pagesWeb/home.html.twig', [
      'recherches' => $recherches,
      'form' => $form->createView()
  ]);
  }

}


