
<?php 



class Question {

    private string $intituleQuestion;
    private array $reponses;
    private string $explication;


    public function __construct(string $intituleQuestion , string $explication){

        $this->intituleQuestion = $intituleQuestion;        
        $this->reponses = [];        
        $this->explication = $explication;        

    }
   

    public function getIntituleQuestion(){
        return $this->intituleQuestion;
    }



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