<?php


namespace App\Controller\classement;

use App\Repository\ClassementCNRSRepository;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class classementCnrsController extends AbstractController
{
    /**
     * @Route("/classementCnrs", name="Cnrs")
     * @param ClassementCNRSRepository $repository
     * @return Response
     */
    public function Cnrs(ClassementCNRSRepository $repository): Response
    {
        $classement = $repository->afficheClassementCNRS();
        return $this->render('classement/classementCnrs.html.twig', [
            'classement' => $classement,
        ]);
    }

}