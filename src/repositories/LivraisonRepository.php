<?php

    Class LivraisonRepository{
        private $db;

        public function __construct(PDO $db){
            $this->db = $db;
        }

        /**
         * Cette fonction insère une personne en BD
         * @author BODJONA
         * @param Livraison
         * @return void
         */
        public function create(Livraison $livrons){
            $req = $this->db->prepare("INSERT INTO Livraison (Nom, Adresse, Contact) VALUES (:Nom, :Adresse, :Contact)");
            $req->bindValue(':Nom', $livrons->getNom());
            $req->bindValue(':Adresse', $livrons->getAdresse());
            $req->bindValue(':Contact',$livrons->getContact());
            $req->execute();
        }

        /**
         * Cette fonction renvoie une personne connaissant son id
         * @author BODJONA
         * @param int id
         * @return Livraison
         */
        public function getOne(int $id){
            $req = $this->db->prepare("SELECT * FROM Livraison WHERE id=:id");
            $req->bindValue(':id', $id);
            $req->execute();
            $livrable = $req->fetch();
            $livrable = new Livraison($livrable);
            return $livrable;
        }

        /**
         * Cette fonction recupère toutes les entrées de la BD
         * @author BODJONA
         * @return array Livraison
         */
        public function getAll(){
            $req = $this->db->query("SELECT * FROM Livraison");
            $livrons = $req->fetchAll(PDO::FETCH_ASSOC);
            return $livrons;
        }

        /**
         * Cette fonction met à jour une personne
         * @author BODJONA
         * @param Livraison
         * @return void
         */
        public function update(Livraison $livrons){
            $req = $this->db->prepare("UPDATE Livraison SET Nom=:Nom, Adresse=:Adresse, Contact=:Contact WHERE id=:id");
            $req->bindValue(':id', $livrons->getId());
            $req->bindValue(':Nom', $livrons->getNom());
            $req->bindValue(':Adresse', $livrons->getAdresse());
            $req->bindValue(':Contact', $livrons->getContact());
            $req->execute();
        }

        /**
         * Cette fonction supprime un enregistrement de personne connaissant l'id
         * @author BODJONA
         * @param int id
         * @return void
         */
        public function delete(int $id){
            $req = $this->db->prepare("DELETE FROM Livraison WHERE id=:id");
            $req->bindValue(':id', $id);
            $req->execute();
        }

        public function getDb(){
            $this->db;
        }

        public function setDb(PDO $db){
            $this->db = $db;
        }
    }
    
    ?>