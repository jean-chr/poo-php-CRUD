<?php
/**
 * @author PALI
 * Cette classe Personne contient 4 attribut
 * Le constructeur prend un tableau en paramètre
 */
class Categorie{
    /**
     * C'est l'attribut qui représente la clé primaire
     */
    private $id;
    private $genre;
    private $libelle;
    protected $description;
    
        /**les donnees seront recuperer dans un tableau
         *  Constructeur 
         * @param array $data
         */
        public function __construct(array $data){
            $this->hydrate($data);
        }
        public function hydrate(array $data){
            foreach($data as $key=>$value){
                //on crée la méthode
                $method = 'set'.ucfirst($key);
                if(method_exists($this, $method)){
                    $this->$method($value);
                }
            }
        }
        
        public function getId(){
            return $this->id;
        }

        public function setId(int $id){
            $this->id = $id;
        }
        public function getgenre(){
            return $this->genre;
        }

        public function setgenre($genre){
            $this->genre = $genre;
        }
        public function getlibelle(){
            return $this->libelle;
        }

        public function setlibelle($libelle){
            $this->libelle = $libelle;
        }
        public function getdescription(){
            return $this->description;
        }

        public function setdescription($description){
            $this->description = $description;
        }
        public function __toString(){
            return $this->id.' '.$this->genre;
        }
}
?>