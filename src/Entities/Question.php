
<?php 



class Question {

    private string $intituleQuestion;
    private array $reponses;
    private string $explication;
    private int $id;
    private int $id_quiz;

    // supprimer la fonction si j'en ai plus besoin

    public function __construct(string $intituleQuestion , int $id, int $id_quiz){

        $this->intituleQuestion = $intituleQuestion;        
        $this->reponses = [];        
    
        $this->id = $id ;     
        $this->id_quiz = $id_quiz  ;    

    }
   

    public function getIntituleQuestion(){
        return $this->intituleQuestion;
    }


// getter pour afficher dans une autre page 
// setter pour modifier 


    public function  getReponses(){
        return $this->reponses;
    }



    
    public function setTouteLesReponse(array $reponses)
    {
        foreach ($reponses as $reponse) {
            if (!$reponse instanceof Answer) {
                throw new Exception("Il faut que le tableau soit composé de reponse uniquement");
            }
        }

        $this->reponses = $reponses;

    }

}