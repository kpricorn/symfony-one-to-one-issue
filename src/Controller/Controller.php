<?php

namespace App\Controller;

use App\Entity\A;
use App\Entity\B;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controller extends AbstractController
{
    #[Route('/a', name: 'a')]
    public function a(EntityManagerInterface $em): Response
    {
        return $this->json($em->getRepository(A::class)->findAll());
    }

    #[Route('/b', name: 'b')]
    public function b(EntityManagerInterface $em): Response
    {
        return $this->json($em->getRepository(B::class)->findAll());
    }
}
