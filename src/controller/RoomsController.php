<?php

namespace App\Controller;

class RoomsController extends AbstractController {

    /**
     * Afficher la page de 1 room
     * Route: GET /rooms/:id
     */
    public function show(int $id) {
        // 1. Récupérer le car par son id
        $room = $this->container->getRoomManager()->findOneById($id);

        //2. Afficher la room
        echo $this->container->getTwig()->render('rooms/show.html.twig', [
            'room' => $room
        ]);
    }
    public function new()
    {
        echo $this->container->getTwig()->render('rooms/new.html.twig');
    }

    public function create()
    {
        $this->container->getRoomManager()->create($_POST);
        header('Location: ' . $this->config['env']['base_path']);
    }
}