<?php
include_once '../utils/autoloader.php';

$score = 0;

foreach($_POST as $index => $givenAnswer){

    if($givenAnswer === "1"){
        $score++;
    }

}
// var_dump($score);
// die();
require_once './components/header.php'
?>

<link rel="stylesheet" href="./assets/css/question.css">
<script src="./assets/js/timer.js" defer></script>
</head>

<body>
    <main>

    <h1> Vous avez eu <?= $score ?> /3</h1>
<!-- faire le résultat ici créer un manager pour et un mapper  -->
 

    </main>


<?php require_once './components/footer.php' ?>