


<?php


// mettre la requete sql ici  créer plusieurs fonction dans le manager qcm 


final class QuestionRepository extends AbstractRepository
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Récupère toutes les questions d'un quiz
     */
    public function findAllQuestionByQuiz(int $idQuizz): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM question WHERE id_quiz = :idQuizz");
        $stmt->bindParam(":idQuizz", $idQuizz, PDO::PARAM_INT);
        $stmt->execute();
        $questionDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if (!$questionDatas) {
            return [];
        }
        $questions = [];


        foreach ($questionDatas as $questionData) {

            $question = QuestionMapper::mapToObject($questionData);

            $questions[] = $question;
        }

        return $questions;
    }
}
