
<?php

// pour récup les questions

class Question
{

    private int $id;
    private string $intituleQuestion;
    private array $reponses;
    private string $explication;



    // supprimer la fonction si j'en ai plus besoin

    public function __construct(int $id, string $intituleQuestion = '', string $explication = '', array $reponses = [])
    {

        $this->id = $id;
        $this->intituleQuestion = $intituleQuestion;
        $this->reponses = $reponses;
        $this->explication = $explication;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }


    public function getIntituleQuestion(): string
    {
        return $this->intituleQuestion;
    }


    // getter pour afficher dans une autre page 
    // setter pour modifier 


    public function  getReponses()
    {
        return $this->reponses;
    }




    public function setReponses(array $reponses): self
    {
        foreach ($reponses as $reponse) {
            if (!$reponse instanceof Answer) {
                throw new Exception("Il faut que le tableau soit composé de reponse uniquement");
            }
        }

        $this->reponses = $reponses;
        return $this;
    }

    /**
     * Get the value of explication
     */
    public function getExplication()
    {
        return $this->explication;
    }
}
