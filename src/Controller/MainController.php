<?php

namespace App\Controller;

use App\Repository\CityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
    }

    /**
     * @Route("/search/{query}", name="search")
     *
     * @param CityRepository $repository
     * @param string $query
     *
     * @return Response
     */
    public function showSearchResults(CityRepository $repository, string $query): Response
    {
        $cities = $repository->findByNameAutocomplete($query);
        return $this->render('main/results.html.twig', [
            'query' => $query,
            'cities' => $cities
        ]);
    }
}
