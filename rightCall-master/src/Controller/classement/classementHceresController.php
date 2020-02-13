<?php


namespace App\Controller\classement;

use App\Repository\ClassementHCERESRepository;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;



class classementHceresController extends AbstractController
{
    /**
     * @Route("/classementHceres", name="Hceres")
     * @return Response
     */
    public function Hceres(ClassementHCERESRepository $repository): Response
    {
        $classement = $repository->afficheClassementHCERES();
        return $this->render('classement/classementHceres.html.twig', [
            'classement' => $classement,
        ]);
    }

}