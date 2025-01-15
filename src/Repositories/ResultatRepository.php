


<?php



final class ResultatRepository extends AbstractRepository{

    public function __construct()
    {
        parent::__construct();
    }


    public function insertResult(){
            $stmt = $this->pdo->prepare("INSERT INTO résultat(score, id_user, id_quiz) VALUES (:score, :id_user, :id_quiz)");
            $resultatDatas = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!$resultatDatas){
                return [];
            }


            foreach ($resultatDatas as $resultatData){
                $resultat = ResultatMapper::mapToObject($resultatData);
                $resultats[] = $resultat;
            }
            return $resultats;
    }
}