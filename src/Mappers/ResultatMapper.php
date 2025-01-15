


<?php 

final class ResultatMapper implements MapperContract{
    public static function mapToObject(array $resultData): Resultat
    {
       return new Resultat(
        $resultData['id'],
        $resultData['score'],
        
       );
    }
}
