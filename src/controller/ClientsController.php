<?php

namespace App\Controller;




class ClientsController extends AbstractController
{

    public function show()
    {

        $clients = $this->container->getClientManager()->findAll();
        echo $this->container->getTwig()->render('client/show.html.twig', [
            'clients' => $clients
        ]);
    }

    public function new()
    {
        echo $this->container->getTwig()->render('client/new.html.twig');
    }
}
