<?php

// mettre les questions ici et créer une méthode generateDisplay


final class QcmManager
{

    private QuizzRepository $quizRepository;
    private QuestionRepository $questionRepository;
    private AnswerRepository $answerRepository;

    public function __construct()
    {
        $this->quizRepository = new QuizzRepository();
        $this->questionRepository = new QuestionRepository();
        $this->answerRepository = new AnswerRepository();
    }


    public function generateQuiz(int $idQuiz): string
    {
        $qcm = $this->buildQcm($idQuiz);


        return $this->displayQcm($qcm);
    }

    private function buildQcm(int $idQuiz): Qcm
    {
        $qcm = $this->quizRepository->find($idQuiz);
        $questions = $this->questionRepository->findAllQuestionByQuiz($idQuiz);

        $qcm->setQuestions($questions);

        /**
         * @var Question $question
         */
        foreach ($qcm->getQuestions() as $question) {
            $answers = $this->answerRepository->findAllAnswersByQuestion($question->getId());

            $question->setReponses($answers);
        }

        return $qcm;
    }


    // j'ai juste rajouter $qst je ferai la suite demain 

    private function displayQcm(Qcm $qcm): string
    {



        ob_start();
?>

        <form action="./resultat.php" method="post">
            <h1 id=title><?= $qcm->getIntitule() ?></h1>
            <p><span id="timer">15</span> secondes</p>


            <?php
            /**
             * @var Question $question
             */
            foreach ($qcm->getQuestions() as $key => $question): ?>
                <article class="question">

                    <h2>
                        < QUESTION-<span style="color: #9B5EBF;"> <?= $key + 1 ?> /></span>
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
                        foreach ($question->getReponses() as $reponse): ?>


                            <input type="radio" name="question<?= $key+1 ?>" type="button" value="<?= $reponse->getIsBonneReponse() ?>"><?= $reponse->getText() ?></input> <!-- un bouton par reponse   -->

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
