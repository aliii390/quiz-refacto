

<?php 

// mettre les questions ici et créer une méthode generateDisplay


final class QcmManager{
   

    // j'ai juste rajouter $qst je ferai la suite demain 

    public function generateDisplay(Qcm $qcm ): string
    {

        $nameQcm = htmlspecialchars($qcm->getTitle());

        $questionsHtml = '';
        foreach($qcm->getQuestions() as $question){
            $questionName = htmlspecialchars($question->getIntituleQuestion());
            $question->getReponses();
            $questionsHtml .= "<li>" . $questionName . "</li>";

            $textHtml = '';
            foreach($question->getReponses()as $reponse){
                $ftTest = $reponse->getText();
                $textHtml .= "<li>". $ftTest."</li>";
            }
            
        }


      

     



$html = <<<HTML

    <!DOCTYPE html>
    <html lang="en">




<link rel="stylesheet" href="../../public/css/question.css">
<script src="../../assets/JS/timer.js" defer></script>
</head>

<body>

    <main>
        <form action="" method="post">
            <h1 id=title>{$questionsHtml}</h1>
            <p><span id="timer">15</span> secondes</p>
                    <section class="question">

                        <h2>
                            < QUESTION-<span style="color: #9B5EBF;"> /></span>
                        </h2>

                        <div class="btn-placement">
                            <div class="h3-placement">
                                <h3>{$textHtml}</h3>
                            </div>
                            
                            
                                            <!-- rajouter un btn par reponses (le code est dans mon block notes) -->

                        
                        </div>

                    </section>
                    <hr class="question-separator">
        
    
            <div id=btnCentré>
                <input type="submit" class="btn-submit" value="Voir les résultats">
            </div>

        </form>
    </main>


HTML;
        return $html;

    }
    





}