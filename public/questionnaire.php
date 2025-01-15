<?php
include_once '../utils/autoloader.php';

$qcmManager = new QcmManager();

// var_dump($qcmManager);
// die();
// $qcm = $qcManager->getQcm();

require_once './components/header.php';
?>



    <link rel="stylesheet" href="./assets/css/question.css">
    <script src="./assets/js/timer.js" defer></script>
</head>

<body>
    <main>

        <?= $qcmManager->generateQuiz($_GET['idQuiz']) ?>
      
    </main>


<?php require_once './components/footer.php' ?>