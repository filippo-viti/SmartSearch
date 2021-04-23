<?php

namespace App\Controller;

use App\Entity\City;
use App\Repository\CityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends AbstractController
{
    /**
     * @Route("/city/{geonameid}", name="city")
     *
     * @param City $city
     *
     * @return Response
     */
    public function show(City $city): Response
    {
        return $this->render('city/show.html.twig', [
            'city' => $city
        ]);
    }

    /**
     * @Route("/city/search/{name}", name="city_search")
     *
     * @param CityRepository $repository
     * @param string $name
     *
     * @return Response
     */
    public function search(CityRepository $repository, string $name): Response
    {
        $data = $repository->findByNameAutocomplete($name);
        return $this->json($data);
    }
}
