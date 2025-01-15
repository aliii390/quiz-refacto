



<?php



final class Answer
{
    private int $id;
    private bool $isBonneReponses;
    private string $text;


    public function __construct(int $id, string $text = '', bool $isBonneReponses = false)
    {
        $this->id = $id;
        $this->text = $text;
        $this->isBonneReponses = $isBonneReponses;
    }

    public function getId(): int
    {
        return $this->id;
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
