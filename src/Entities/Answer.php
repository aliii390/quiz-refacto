



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

    public function getText()
    {
        return $this->text;
    }
    public function getBonneReponse()
    {
        return $this->isBonneReponses;
    }



}
