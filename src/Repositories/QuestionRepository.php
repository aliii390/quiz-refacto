


<?php


// mettre la requete sql ici  créer plusieurs fonction dans le manager qcm 


class QuestionRepository
{
    private PDO $pdo;
    private QuestionMapper $mapper;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->mapper = new QuestionMapper();
    }

    /**
     * Récupère toutes les questions ayant le même quiz_id et retourne un array
     */


    public function findAllQuizzId(int $idQuizz): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM question WHERE id_quiz = :idQuizz");
        $stmt->bindParam(":idQuizz", $idQuizz, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if (!$data) {
            return [];
        }
        $arrayQuestions = [];


        foreach ($data as $question) {

            $objectQuestion = $this->mapper->mapToObject($question);

            $arrayQuestions[] = $objectQuestion;
            
        }

        return $arrayQuestions;
    
    }
    }

