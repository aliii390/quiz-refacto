<?php




include_once '../../utils/autoloader.php';

$qcm = new Qcm("Nom qcm");
$question = new Question("Nom question","Explication: ");
$answer = [
    new Answer("salut", true),
    new Answer("test")
];

$question->setTouteLesReponse($answer);

var_dump($qcm);





// var_dump($qcm->getQuestions());
// die();

// var_dump($qcm);
// die();


?>

<?php require_once '../Components/Footer.php'; ?>
<link rel="stylesheet" href="../css/style.css">
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
   
<h2><?= $qcm->getTitle()?></h2>
<?php foreach($qcm->getQuestions() as $question): ?>
    <h3><?= $question->getIntituleQuestion() ?></h3>
    <?php endforeach; ?>
    
    <?php foreach($question->getReponses() as $reponse): ?>
    <li><?= $reponse->getText() ?></li>
    <?php endforeach; ?>

<a id=deconnexion href="../../process/clean-user-session.php">Déconnexion</a>


<?php require_once '../Components/Footer.php'; ?>