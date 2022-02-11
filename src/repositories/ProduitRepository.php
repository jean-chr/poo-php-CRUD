<?php
    //require_once('../entities/Personne.php');

    Class ProduitRepository{
        private $db;

        public function __construct(PDO $db){
            $this->db = $db;
        }

        /**
         * Cette fonction insère une personne en BD
         * @author BADANAEGOUGNON
         * @param produit
         * @return void
         */
        public function create(Produit $prod){
            $req = $this->db->prepare("INSERT INTO produit (libellet, prix, promo) VALUES (:libellet, :prix, :promo)");
            $req->bindValue(':libellet', $prod->getLibellet());
            $req->bindValue(':prix', $prod->getPrix());
            $req->bindValue(':promo', $prod->getPromo());
            $req->execute();
        }

        /**
         * Cette fonction renvoie une personne connaissant son id
         * @author BADANAEGOUGNON
         * @param int id
         * @return Produit
         */
        public function getOne(int $id){
            $req = $this->db->prepare("SELECT * FROM produit WHERE id=:id");
            $req->bindValue(':id', $id);
            $req->execute();
            $gafar = $req->fetch();
            $prodt = new Produit($gafar);
            return $prodt;
        }

        /**
         * Cette fonction recupère toutes les entrées de la BD
         * @author BADANAEGOUGNON
         * @return array Produit
         */
        public function getAll(){
            $req = $this->db->query("SELECT * FROM produit");
            $prod = $req->fetchAll(PDO::FETCH_ASSOC);
            return $prod;
        }

        /**
         * Cette fonction met à jour une personne
         * @author BADANAEGOUGNON
         * @param Produit
         * @return void
         */
        public function update(Produit $prod){
            $req = $this->db->prepare("UPDATE produit SET libellet=:libellet, prix=:prix, promo=:promo WHERE id=:id");
            $req->bindValue(':id', $prod->getId());
            $req->bindValue(':libellet', $prod->getLibellet());
            $req->bindValue(':prix', $prod->getPrix());
            $req->bindValue(':promo', $prod->getPromo());
            $req->execute();
        }

        /**
         * Cette fonction supprime un enregistrement de personne connaissant l'id
         * @author BADANAEGOUGNON
         * @param int id
         * @return void
         */
        public function delete(int $id){
            $req = $this->db->prepare("DELETE FROM produit WHERE id=:id");
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
    //require_once('src/pages/produit/traitement.php');
    ?>