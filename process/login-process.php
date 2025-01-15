<?php

require_once '../utils/autoloader.php';

var_dump($_POST);

session_start();

$userRepository = new UserRepository();

$user = $userRepository->findByUsername($_POST['username']);


if(!$user){
    $userRepository->createUser($_POST['username']);
    $user = $userRepository->findByUsername($_POST['username']);
}

$_SESSION['user'] = $user;

header("Location: ../public/accueil.php");