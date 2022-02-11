<?php
    //require_once('../entities/Personne.php');

    Class CategorieRepository{
        private $db;

        public function __construct(PDO $db){
            $this->db = $db;
        }

        /**
         * Cette fonction insère une personne en BD
         * @author PALI
         * @param Categorie
         * @return void
         */
        public function create(Categorie $categorie){
            $req = $this->db->prepare("INSERT INTO categorie (genre, libelle, description) VALUES (:genre, :libelle, :description)");
            $req->bindValue(':genre', $categorie->getgenre());
            $req->bindValue(':libelle', $categorie->getlibelle());
            $req->bindValue(':description', $categorie->getdescription());
            $req->execute();
        }

        /**
         * Cette fonction renvoie une personne connaissant son id
         * @author PALI
         * @param int id
         * @return Categorie
         */
        public function getOne(int $id){
            $req = $this->db->prepare("SELECT * FROM categorie WHERE id=:id");
            $req->bindValue(':id', $id);
            $req->execute();
            $data = $req->fetch();
            $com = new Categorie($data);
            return $com;
        }

        /**
         * Cette fonction recupère toutes les entrées de la BD
         * @author PALI
         * @return array Categorie
         */
        public function getAll(){
            $req = $this->db->query("SELECT * FROM categorie");
            $categorie = $req->fetchAll(PDO::FETCH_ASSOC);
            return $categorie;
        }

        /**
         * Cette fonction met à jour une personne
         * @author PALI
         * @param Categorie
         * @return void
         */
        public function update(Categorie $categorie){
            $req = $this->db->prepare("UPDATE categorie SET genre=:genre, libelle=:libelle, description=:description WHERE id=:id");
            $req->bindValue(':id', $categorie->getId());
            $req->bindValue(':genre', $categorie->getGenre());
            $req->bindValue(':libelle', $categorie->getLibelle());
            $req->bindValue(':description', $categorie->getDescription());
            $req->execute();
        }

        /**
         * Cette fonction supprime un enregistrement de personne connaissant l'id
         * @author PALI
         * @param int id
         * @return void
         */
        public function delete(int $id){
            $req = $this->db->prepare("DELETE FROM categorie WHERE id=:id");
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