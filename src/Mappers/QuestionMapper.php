
<?php

final class QuestionMapper implements MapperContract
{
    public static function mapToObject(array $questionData): Question
 
    {
        return new Question(
            $questionData['id'],
            $questionData['intitule'],
        );
    }
}




