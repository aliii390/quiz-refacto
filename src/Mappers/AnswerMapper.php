

<?php 


  
    class AnswerMapper
{
    public function mapToObject(array $data)
    {
        return new Answer(
            $data['reponse'],
            $data['is_correct'],
            $data['id_question']

        );
    }
}


