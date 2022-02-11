<?php
    /**
    * cette classe a ete ecrite par
     * @author KALGORA Marie-immaculee
    * elle possede 4 attributs
    * son constructeur prend en parametre un tableau
    */
class payement{
    /**
     * l attribut id est une cle primaire
     */
    private $id;
    private $datedepayement;
    private $modedepayement;
    private $somme;
    
    /**
     * le constructeur
     * @param array $data
     */
    public function __construct(array $data){
        $this->hydrate($data);
    
    }
    /**
     * function hydrate
     * @param array de donnees
     */
    public function hydrate(array $data){
        foreach($data as $key=>$value){
            //on cree la methode correspondant
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getDatedepayement(){
        return $this->datedepayement;
    }
    public function setDatedepayement($datedepayement){
        $this->datedepayement = $datedepayement;
    }
    public function getModedepayement(){
        return $this->modedepayement;
    }
    public function setModedepayement($modedepayement){
        $this->modedepayement = $modedepayement;
    }
    public function getSomme(){
        return $this->somme;
    }
    public function setSomme($somme){
        $this->somme = $somme;
    }
}    
?>