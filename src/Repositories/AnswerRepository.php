


<?php


// mettre la requete sql ici  créer plusieurs fonction dans le manager qcm 


final class AnswerRepository extends AbstractRepository
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Récupère toutes les réponses d'une question
     * @param int $question_id
     * @return array $answers
     */
    public function findAllAnswersByQuestion(int $question_id): array
    {
        $stmt = $this->pdo->prepare("SELECT *
               FROM answer 
               WHERE answer.id_question = :question_id");
        $stmt->bindParam(":question_id", $question_id, PDO::PARAM_INT);
        $stmt->execute();
        $answerDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if (!$answerDatas) {
            return [];
        }
        $answers = [];


        foreach ($answerDatas as $answerData) {

            $answer = AnswerMapper::mapToObject($answerData);

            $answers[] = $answer;
        }

        return $answers;
    }
}
