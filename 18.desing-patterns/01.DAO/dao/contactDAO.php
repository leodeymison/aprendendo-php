<?php
   include_once("models/Contact.php");

   class ContactDAO implements contactDAOInterface {

      private \PDO $conn;

      public function __construct($conn) {
         $this->conn = $conn;
      }
      public function create(Contact $contact) {
         $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";
         $start_query = $this->conn->prepare($query);
         
         $name = $contact->getName();
         $phone = $contact->getPhone();
         $observations = $contact->getObservations();
         
         $start_query->bindParam(':name', $name);
         $start_query->bindParam(':phone', $phone);
         $start_query->bindParam(':observations', $observations);

         $start_query->execute();
      }
      public function findAll(){
         $contacts = [];

         $query = "SELECT * FROM contacts";
         $start_query = $this->conn->query($query);
         $response = $start_query->fetchAll();

         foreach($response as $item){
            $contact = new Contact();

            $contact->setId($item['id']);
            $contact->setName($item['name']);
            $contact->setPhone($item['phone']);
            $contact->setObservations($item['observations']);

            $contacts[] = $contact;
         }

         return $contacts;
      }
   }
?>