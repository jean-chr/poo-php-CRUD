<?php
    //require_once('../entities/Personne.php');

    Class CommandeRepository{
        private $db;

        public function __construct(PDO $db){
            $this->db = $db;
        }

        /**
         * Cette fonction insère une personne en BD
         * @author DJADE
         * @param commande
         * @return void
         */
        public function create(commande $prod){
            $req = $this->db->prepare("INSERT INTO commande (nom, modepayement, date) VALUES (:nom, :modepayement, :date)");
            $req->bindValue(':nom', $prod->getNom());
            $req->bindValue(':modepayement', $prod->getModepayement());
            $req->bindValue(':date', $prod->getDate());
            $req->execute();
        }

        /**
         * Cette fonction renvoie une personne connaissant son id
         * @author DJADE
         * @param int id
         * @return commande
         */
        public function getOne(int $id){
            $req = $this->db->prepare("SELECT * FROM commande WHERE id=:id");
            $req->bindValue(':id', $id);
            $req->execute();
            $jean = $req->fetch();
            $prodt = new commande($jean);
            return $prodt;
        }

        /**
         * Cette fonction recupère toutes les entrées de la BD
         * @author DJADE
         * @return array commande
         */
        public function getAll(){
            $req = $this->db->query("SELECT * FROM commande");
            $prod = $req->fetchAll(PDO::FETCH_ASSOC);
            return $prod;
        }

        /**
         * Cette fonction met à jour une personne
         * @author DJADE
         * @param commande
         * @return void
         */
        public function update(commande $prod){
            $req = $this->db->prepare("UPDATE commande SET nom=:nom, modepayement=:modepayement, date=:date WHERE id=:id");
            $req->bindValue(':id', $prod->getId());
            $req->bindValue(':nom', $prod->getNom());
            $req->bindValue(':modepayement', $prod->getModepayement());
            $req->bindValue(':date', $prod->getDate());
            $req->execute();
        }

        /**
         * Cette fonction supprime un enregistrement de personne connaissant l'id
         * @author DJADE
         * @param int id
         * @return void
         */
        public function delete(int $id){
            $req = $this->db->prepare("DELETE FROM commande WHERE id=:id");
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
    //require_once('src/pages/commande/traitement.php');
    ?>