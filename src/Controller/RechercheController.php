<?php

  namespace App\Controller;

  use App\Data\SearchData;
  use App\Form\SearchForm;
  use App\Repository\AppelAPublicationRepository;

  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  use Symfony\Component\Routing\Annotation\Route;
  use Symfony\Component\HttpFoundation\Request;

  class RechercheController extends AbstractController
  {
      /**
       * @Route("/recherche", name="recherche")
       */
      public function index(AppelAPublicationRepository $repository, Request $request)
      {
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
?>
