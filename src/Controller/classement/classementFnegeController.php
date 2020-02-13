<?php


namespace App\Controller\classement;


use App\Repository\ClassementFNEGERepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class classementFnegeController extends AbstractController
{
    /**
     * @Route("/classementFnege", name="Fnege")
     * @return Response
     */
    public function Fnege(ClassementFNEGERepository $repository): Response
    {
        $classement = $repository->afficheClassementFNEGE();
        return $this->render('classement/classementFnege.html.twig', [
            'classement' => $classement,
        ]);
    }

}