

<?php



final class QuizzRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Récupère toutes les questions ayant le même quiz_id et retourne un array
     */
    public function findAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM quiz");
        $quizDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(!$quizDatas){
            return [];
        }

        foreach ($quizDatas as $quizData) {

            $quiz = QcmMapper::mapToObject($quizData);

            $quizs[] = $quiz;
           
            
        }

        return $quizs;
    }

    public function find(int $idQuizz): Qcm
    {
        $stmt = $this->pdo->prepare("SELECT * FROM quiz WHERE id = :idQuizz");
        $stmt->execute([
            ':idQuizz' => $idQuizz,
        ]);


        $quizData = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$quizData){
            return [];
        }

        return QcmMapper::mapToObject($quizData);
    }
}