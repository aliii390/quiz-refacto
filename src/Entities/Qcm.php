<?php


class Qcm
{
    private int $id;
    private string $intitule;
    
    private array $questions;
    

    public function __construct(int $id, string $intitule = '', array $questions = [])
    {
        $this->id = $id;
        $this->intitule = $intitule;
        $this->questions = $questions;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIntitule(): string
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