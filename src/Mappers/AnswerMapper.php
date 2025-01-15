

<?php



class AnswerMapper implements MapperContract
{
    public static function mapToObject(array $answerData): Answer
    {
        return new Answer(
            $answerData['id'],
            $answerData['reponse'],
            $answerData['is_correct']

        );
    }


}
 