


<?php


// mettre la requete sql ici  créer plusieurs fonction dans le manager qcm 


class AnswerRepository
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


    public function findAllAnswer(int $question_id): array
    {
        $stmt = $this->pdo->prepare("SELECT answer.reponse, answer.is_correct
               FROM answer 
               WHERE answer.id_question = :question_id");
        $stmt->bindParam(":question_id", $question_id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if (!$data) {
            return [];
        }
        $arrayAnswer = [];


        foreach ($data as $reponse) {

            $objectReponse = $this->mapper->mapToObject($reponse);

            $arrayAnswer[] = $objectReponse;
            
        }

        return $arrayAnswer;
    
    }
    }

