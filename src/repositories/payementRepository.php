<?php
include_once('../../entities/payement.php');
class payementRepository{
    private $db;

    /**
     * constructeur qui prend en parmetre un db_connect
     */
    function __construct($db_connection){
        $this->db=$db_connection;
    }
    /**
     * fonction d'insertion d'un nouveau payement
     * @return booleen
     * @author KALGORA
     */
    public function createpayement(payement $payement){
        try{
             $stmt = $this->db->prepare("INSERT INTO payement (datedepayement, modedepayement, somme)VALUES(:d,:m,:s)");
             $stmt->bindValue(":d",$payement->getDatedepayement());
             $stmt->bindValue(":m",$payement->getModedepayement());
             $stmt->bindValue(":s",$payement->getSomme());
             $stmt->execute();
             return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
    public function getOne($id){
        $req = $this->db->prepare("SELECT * FROM payement WHERE id=".$id);
        $req->execute();
        $données = $req->fetch(PDO::FETCH_ASSOC);
        $paye = new payement($données);
        return $paye;
    }

            /**
         * Cette fonction recupère toutes les entrées de la BD
         * @author KALGORA    
         * @return array Payement
         */
        public function getAll(){
            $req = $this->db->query("SELECT * FROM payement");
            $paye = $req->fetchAll(PDO::FETCH_ASSOC);
            return $paye;
        }

        /**
         * Cette fonction met à jour une personne
         * @author KALGORA
         * @param Payement
         * @return void
         */
        public function updatepayement(payement $paye){
            $req = $this->db->prepare("UPDATE payement SET datedepayement=:d, modedepayement=:m, somme=:s WHERE id=:id");
            $req->bindValue(':id', $paye->getId());
            $req->bindValue(':d', $paye->getDatedepayement());
            $req->bindValue(':m', $paye->getModedepayement());
            $req->bindValue(':s', $paye->getsomme());
            $req->execute();
        }

        /**
         * Cette fonction supprime un enregistrement connaissant l'id
         * @author KALGORA
         * @param int id
         * @return void
         */
        public function deletepayement(int $id){
            $req = $this->db->prepare("DELETE FROM payement WHERE id=:id");
            $req->bindValue(':id', $id);
            $req->execute();
        }

        public function getDb(){
            $this->db;
        }

        public function setDb(PDO $db_connection){
            $this->db = $db_connection;
        }
    }

?>