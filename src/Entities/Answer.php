



<?php



final class Answer
{
    private bool $isBonneReponses;
    private string $text;
    private int $idQuestion;


    public function __construct(string $text, bool $isBonneReponses = false , int $idQuestion)
    {
        $this->text = $text;
        $this->isBonneReponses = $isBonneReponses;
        $this->idQuestion = $idQuestion;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getIsBonneReponse(): bool
    {
        return $this->isBonneReponses;
    }



}
