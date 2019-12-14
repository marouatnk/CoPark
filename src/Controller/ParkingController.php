<?php

namespace App\Controller;

use App\Entity\Parking;
use App\Form\ParkingType;
use App\Repository\ParkingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



class ParkingController extends AbstractController
{
    /**
     * @Route("/", name="parkings")
     */
    public function index(ParkingRepository $repo)
    {
        return $this->render('parking/index.html.twig', [
            'parkings' => $repo->findAll(),
        ]);
    }

    /**
     * @Route("/add-parking" , name="add_parking")
     */
    public function addPark( Request $request, EntityManagerInterface $em){

        $newParking = new Parking;
        $form = $this->createForm(ParkingType::class , $newParking);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em->persist($newParking);
            $em->flush();
        }

        return $this->render
            ('parking/addParking.html.twig', array(
            'form' => $form->createView(),
        ));

    }
}
