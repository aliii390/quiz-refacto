


<?php


class Choix{
     
    private int $id;
    private string $name ;
    private string $img_path;
    private string $img_alt;
    private array $choixQcm;


public function __construct(int $id , string $name , string $img_path, string $img_alt)
{
     $this->id = $id;
     $this->name = $name;
     $this->img_path = $img_path;
     $this->img_alt = $img_alt;
}

public function getChoixName(){
    return $this->name;
}

public function getChoixQcm():array{
    return $this->choixQcm;
}

public function getImgPath(){
    return $this->img_path;
}

public function getImgAlt(){
    return $this->img_alt;
}

public function setToutLesChoix(array $choixQcm){

    foreach($choixQcm as $choix){
        if(!$choix instanceof Question){
            throw new Exception("il faut que le tableau soit composé de choix");
        }
    }
        $this->$choix = $choixQcm;
  
}


}