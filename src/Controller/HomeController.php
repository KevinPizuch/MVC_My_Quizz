<?php

namespace App\Controller;

use App\Entity\Categorie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
         
        public function index()
        {
            $repository = $this->getDoctrine()->getRepository(Categorie::class);
            $categorie = $repository->findAll();

            if (!$categorie) {
                throw $this->createNotFoundException(
                    'No product found for id '.$id
                );
            }

            $user = $this->getUser();
            
            //return new Response('Check out this great product: '.$categorie->getName());

            // or render a template
            // in the template, print things with {{ product.name }}
            return $this->render('categorie/index.html.twig', ['categorie' => $categorie,'user'=> $user]);
           
        }

        /**
         * @Route("/categorie/{id}", name="categorie")
         */
        public function show($id)
        {
            $repository = $this->getDoctrine()->getRepository(Categorie::class);
            $categorie = $repository->findAll();

            if (!$categorie) {
                throw $this->createNotFoundException(
                    'No product found for id '.$id
                );
            }
            
            //return new Response('Check out this great product: '.$categorie->getName());

            // or render a template
            // in the template, print things with {{ product.name }}
            return $this->render('categorie/index.html.twig', ['categorie' => $categorie]);
        }
}
