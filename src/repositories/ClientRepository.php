<?php
    //require_once('../entities/client.php');

    Class ClientRepository{
        private $bd;

        public function __construct(PDO $bd){
            $this->bd = $bd;
        }

        /**
         * Cette fonction insère une personne en BD
         * @author KOULO
         * @param client
         * @return void
         */
        public function create(Client $cli){
            $req = $this->bd->prepare("INSERT INTO client (nom, prenom, adresse) VALUES (:nom, :prenom, :adresse)");
            $req->bindValue(':nom', $cli->getNom());
            $req->bindValue(':prenom', $cli->getPrenom());
            $req->bindValue(':adresse', $cli->getAdresse());
            $req->execute();
        }

        /**
         * Cette fonction renvoie une personne connaissant son id
         * @author KOLANI
         * @param int id
         * @return client
         */
        public function getOne(int $id){
            $req = $this->bd->prepare("SELECT * FROM client WHERE id=:id");
            $req->bindValue(':id', $id);
            $req->execute();
            $guy = $req->fetch();
            $clien = new Client($guy);
            return $clien;
        }

        /**
         * Cette fonction recupère toutes les entrées de la BD
         * @author KOULO
         * @return array Client
         */
        public function getAll(){
            $req = $this->bd->query("SELECT * FROM client");
            $cli = $req->fetchAll(PDO::FETCH_ASSOC);
            return $cli;
        }

        /**
         * Cette fonction met à jour une personne
         * @author KOULO
         * @param Client
         * @return void
         */
        public function update(Client $cli){
            $req = $this->bd->prepare("UPDATE client SET nom=:nom, prenom=:prenom, adresse=:adresse WHERE id=:id");
            $req->bindValue(':id', $cli->getId());
            $req->bindValue(':nom', $cli->getNom());
            $req->bindValue(':prenom', $cli->getPrenom());
            $req->bindValue(':adresse', $cli->getAdresse());
            $req->execute();
        }

        /**
         * Cette fonction supprime un enregistrement de personne connaissant l'id
         * @author KOULO
         * @param int id
         * @return void
         */
        public function delete(int $id){
            $req = $this->bd->prepare("DELETE FROM client WHERE id=:id");
            $req->bindValue(':id', $id);
            $req->execute();
        }

        public function getDb(){
            $this->bd;
        }

        public function setDb(PDO $bd){
            $this->bd = $bd;
        }
    }