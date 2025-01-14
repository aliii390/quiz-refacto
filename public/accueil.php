<?php




include_once '../utils/autoloader.php';

$qcm = new Qcm("Nom qcm");
// $question = new Question("Nom question","Explication: ");
// $answer = [
//     new Answer("salut", true),
//     new Answer("test")
// ];

// $question->setTouteLesReponse($answer);

// var_dump($qcm);





// var_dump($qcm->getQuestions());
// die();

// var_dump($qcm);
// die();


?>

<?php require_once './components/header.php'; ?>
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
   
<h2>METTRE LES DONNER</h2>

    <h3>METTRE LES DONNER</h3>
 
    
    <li>METTRE LES DONNER</li>
   

<a id=deconnexion href="../../process/clean-user-session.php">Déconnexion</a>


<?php require_once './components/footer.php'; ?>