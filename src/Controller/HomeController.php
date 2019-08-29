<?php

namespace App\Controller;
/* use para heredar del controlador padre. */
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(){
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Helo World with Symfony 4',
        ]);
    }

    public function animals($name, $lastname){
        $title = 'Welcome to the animals page';

        return $this->render('home/animals.html.twig', [
            'title' => $title,
            'name' => $name,
            'lastname' => $lastname
        ]);
    }

    public function redire(){
        /* El this se usa para acceder al controlador */
       /* return $this->redirectToRoute('animals', [
            'name' => 'Dog Dog',
            'lastname' => 'Pepito'
        ]);*/ /* Redireccionar al nombre de una ruta.*/
        // return $this->redirectToRoute('index', array(), 301); Averiguar.

        return $this->redirect('https://jeicode.com');
    }

}
