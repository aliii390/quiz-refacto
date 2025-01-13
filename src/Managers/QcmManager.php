

<?php 

// mettre les questions ici et créer une méthode generateDisplay


final class QcmManager{
   

    // j'ai juste rajouter $qst je ferai la suite demain 

    public function generateDisplay(Qcm $qcm , Question $qst): string
    {

        $nameQcm = htmlspecialchars($qcm->getTitle());

        $questionsHtml = '';
        foreach($qcm->getQuestions() as $question){
            $questionName = htmlspecialchars($question->getIntituleQuestion());
            $questionsHtml .= "<li>" . $questionName . "</li>";
        }


//   rajouter le deuxieme foreach pour les reponse et mettre les nom de variable dans le html en dessous
       $textHtml= '';

        foreach($qst->getReponses() as $reponse){
            $ftTest = $reponse->getText();
            $textHtml = "<li>". $ftTest."</li>";
        }
        



        $html = <<<HTML

            <section>
                <h1> {$questionsHtml}</h1>
                <ul>
                   {$ftTest}
                </ul>
            </section>

        HTML;

        return $html;
    }
    
}