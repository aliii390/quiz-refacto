



<?php



final class Answer
{
    private bool $isBonneReponses;
    private string $text;


    public function __construct(string $text, bool $isBonneReponses = false)
    {
        $this->text = $text;
        $this->isBonneReponses = $isBonneReponses;
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
