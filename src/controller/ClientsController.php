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

    public function create()
    {
        $this->container->getClientManager()->create($_POST);
        $this->show();
    }

    public function update(int $id)
    {
        $this->container->getClientManager()->update($id, $_POST);
        $this->show();
    }

    public function edit(int $id)
    {
        $client = $this->container->getClientManager()->findOneById($id);
        echo $this->container->getTwig()->render('client/edit.html.twig', ['client' => $client]);
    }

    public function delete(int $id) {
        
        $this->container->getClientManager()->delete($id);
        $this->show();
    }
}
