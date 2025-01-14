
<?php





class QuestionMapper
{
    public function mapToObject(array $data)
    {
        return new Question(
            $data['intitule'],
            $data['id'],
            $data['id_quiz']

        );
    }
}




