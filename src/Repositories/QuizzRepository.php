

<?php



class QuizzRepository{
    private PDO $pdo;
    private QuizzMapper $mapper;



    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->mapper = new QuizzMapper();
    }


    
    /**
     * Récupère toutes les questions ayant le même quiz_id et retourne un array
     */
    public function findAllTheme(int $idTheme){
        $stmt = $this->pdo->prepare("SELECT * FROM question WHERE id_quiz = :idTheme");
        $stmt->bindParam(":idTheme", $idTheme, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(!$data){
            return [];
        }
        $arrayTheme = [];
        foreach ($data as $theme) {

            $objectTheme = $this->mapper->mapToObject($theme);

            $arrayTheme[] = $objectTheme;
            
        }

        return $arrayTheme;
    }
}