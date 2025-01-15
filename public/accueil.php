<?php

include_once '../utils/autoloader.php';

session_start();

/**
 * @var User $_SESSION['user'] 
 */
var_dump($_SESSION['user']->getUsername());


$quizRepository = new QuizzRepository();

$quizs = $quizRepository->findAll();


require_once './components/header.php';
?>
<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <!-- <h1>Bienvenue </h1> mettre le nom de l'user -->


    <h1>
        < QUIZZ<span class="quiz404"> 404/> </span>
    </h1>
    <h2>Les bonnes réponses ne sont pas introuvables</h2>
    <h3>Voici les thèmes</h3>

    <section class="thème">


        <div class="thèmeChoice">
            <!-- <img id="cssImage" src="">   Mettre une image ici -->
            <!-- <a href="../Question/question.php">Commencer</a> -->
            <form action="../../process/process-quiz-choice.php" method="post">
                <!-- <input type="hidden" name="idQuiz" value="<?= $quiz['id'] ?>"> mettre le choix du quizz -->
                <input type="submit" value="Commencer" class="commencer">
            </form>
        </div>


    </section>

    <section>

        <?php foreach ($quizs as $quiz): ?>
            <a href="./questionnaire.php?idQuiz=<?= $quiz->getId() ?>">
                <article>
                    <h4><?= $quiz->getIntitule() ?></h4>

                </article>
            </a>
        <?php endforeach ?>
    </section>

    <a id=deconnexion href="../../process/clean-user-session.php">Déconnexion</a>


    <?php require_once './components/footer.php'; ?>