<?php


class Qcm
{
    private string $intitule;
    private array $questions;
    private array $reponses;
    

    public function __construct(string $intitule)
    {
        $this->intitule = $intitule;
        $this->questions = [];
    }

    public function getTitle(): string
    {
        return $this->intitule;
    }

    public function getQuestions(): array
    {
        return $this->questions;
    }




    public function setQuestions(array $questions)
    {
        foreach ($questions as $question) {
            if (!$question instanceof Question) {
                throw new Exception("Il faut que le tableau soit composé de question uniquement");
            }
        }
        $this->questions = $questions;
    }
}