<?php

// mettre les questions ici et créer une méthode generateDisplay


final class QcmManager
{

    // private QcmRepository $qcmRepository;

    // public function __construct()
    // {
    //     $this->qcmRepository = new QcmRepository;
    // }

    // public function getQcm(int $id): Qcm
    // {
    //     $qcm = $this->qcmRepository->find($id);




    //     return $qcm;
    // }

    // j'ai juste rajouter $qst je ferai la suite demain 

    public function generateDisplay(Qcm $qcm): string
    {

        // $nameQcm = htmlspecialchars($qcm->getTitle());

        // $questionsHtml = '';
        // foreach ($qcm->getQuestions() as $question) {
        //     $questionName = htmlspecialchars($question->getIntituleQuestion());
        //     $questionsHtml .= "<li>" . $questionName . "</li>";


        //     $textHtml = '';
        //     foreach ($question->getReponses() as $reponse) {
        //         $ftTest = $reponse->getText();
        //         $textHtml .= "<li>" . $ftTest . "</li>";
        //     }
        // }


        ob_start();
?>

        <form action="" method="post">
            <h1 id=title><?= $qcm->getTitle() ?></h1>
            <p><span id="timer">15</span> secondes</p>


            <?php 
            /**
             * @var Question $question
             */
            foreach ($qcm->getQuestions() as $key => $question): ?>
                <article class="question">

                    <h2>
                        < QUESTION-<span style="color: #9B5EBF;"> <?= $key +1 ?> /></span>
                    </h2>

                    <div class="btn-placement">
                        <div class="h3-placement">
                            <h3><?= $question->getIntituleQuestion() ?></h3>
                        </div>


                        <!-- rajouter un btn par reponses (le code est dans mon block notes) -->


                        <?php
                        /**
                         * @var Answer $reponse
                         */
                        foreach($question->getReponses() as $reponse): ?> 

                            
                            <input type="radio" name="" type="button" value="<?= $reponse->getIsBonneReponse() ?>"><?= $reponse->getText() ?></input> <!-- un bouton par reponse   -->

                        <?php endforeach ?> 


                    </div>

                </article>
                <hr class="question-separator">
            <?php endforeach ?>


            <div id=btnCentré>
                <input type="submit" class="btn-submit" value="Voir les résultats">
            </div>

        </form>

<?php

        return ob_get_clean();
    }
}
