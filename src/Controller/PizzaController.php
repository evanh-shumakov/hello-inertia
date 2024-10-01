<?php

namespace App\Controller;

use App\Entity\Pizza;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PizzaController extends AbstractController
{
    #[Route('/', name: 'pizza_list')]
    public function index(EntityManagerInterface $em): Response
    {
        $pizzas = $em->getRepository(Pizza::class)->findAll();

        return $this->inertia->render('pizza/foo', [
            'pizzas' => $pizzas,
        ]);
    }
}
