

<?php 

// mettre les questions ici et créer une méthode generateDisplay


final class QcmManager{

    public function generateDisplay(Qcm $qcm): string
    {

        $nameQcm = htmlspecialchars($qcm->getTitle());

        $questionsHtml = '';
        foreach($qcm->getQuestions() as $question){
            $questionName = htmlspecialchars($question->getIntituleQuestion());
            $questionsHtml .= "<li>" . $questionName . "</li>";
        }


//   rajouter le deuxieme foreach pour les reponse et mettre les nom de variable dans le html en dessous

        $html = <<<HTML

            <section>
                <h1>{$nameQcm}</h1>
                <ul>
                    {$questionsHtml}
                </ul>
            </section>

        HTML;

        return $html;
    }
    
}