<?php 
namespace App\Service;

use App\Model\Client;
use PDO;

class ClientManager extends AbstractManager implements ManagerInterface {

    private $pdo;

    public function __construct(PDO $pdo)
    {
        parent::__construct();
        $this->pdo = $pdo;
    }

    /**
     * @param array $array
     * @return Client
     */
    public function arrayToObject(array $array)
    {
        $client = new Client;
        $client->setId($array['id']);
        $client->setFirstname($array['firstname']);
        $client->setLastname($array['lastname']);
        $client->setEntryDate($array['entry_date']);
        $client->setDepatureDate($array['departure_date']);
        
        // $client->setClient(); // à faire

        return $client;
    }

    /**
     * @return Client[]
     */
    public function findAll()
    {
        $query = " SELECT * FROM client ";
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        $clients = [];

        foreach($data as $d) {
            $clients[] = $this->arrayToObject($d);
        }

        return $clients;
    }

    /**
     * @param int $id
     * @return Client
     */
    public function findOneById(int $id)
    {
        $query = "SELECT * FROM client WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->execute(['id' => $id]);

        $data = $statement->fetch(PDO::FETCH_ASSOC);

        $room = $this->arrayToObject($data);

        return $room;
    }

    /**
     * @param string $field
     * @param string $value
     * @return Client[]
     */
    public function findByField(string $field, string $value)
    {
    }

    /**
     * @param array $data
     */
    public function create(array $data) {
        $query = "INSERT INTO room(number) VALUES(:number)";

        $statement = $this->pdo->prepare($query);
        $statement->execute([
            'number' => $data['number'],
        ]);
    }
}

    /**
     * @param array $data
     */
    /* public function update(int $id, array $data)
    {
        $query = "UPDATE room SET number = :number, client_id = :client_id WHERE id = :id";

        $statement = $this->pdo->prepare($query);
        $statement->execute([
            'id' => $id,
            'number' => $data['number'],
            'client_id'  => $data['client_id']
        ]);

    }

    public function delete(int $id) {
        $query = "DELETE FROM room WHERE id = :id";

        $statement = $this->pdo->prepare($query);
        $statement->execute([
            'id' => $id,
        ]);
    }
} */
