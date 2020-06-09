<?php

// function ex1
function bool() {
    return true;
};

// function ex2
function string() {
    return 'Je suis une chaine de caractères.';
};

// function ex3
function concat() {
    return 'Je suis une chaine ' . 'de caractères concaténés.';
};

// function ex4
$number1 = rand(1, 20);
$number2 = rand(1, 20);
function numbers($number1, $number2) {
    if ($number1 > $number2) {
        return 'Le premier nombre est plus grand !';
    } elseif ($number1 < $number2) {
        return 'Le premier nombre est plus petit !';
    } elseif ($number1 == $number2) {
        return 'Les deux nombres sont identiques !';
    }
};

// function ex5
$string = 'Je suis le n°';
$number3 = 1;
function concat1($string, $number3) {
    return $string . $number3 . ' !';
};

// function ex6
$lastname = 'Snow';
$firstname = 'Jon';
$age = 22;
function direBonjour($lastname, $firstname, $age) {
    return 'Bonjour ' . $firstname . ' ' . $lastname . ', tu as ' . $age . ' ans.';
};

// function ex7
$gender = substr(str_shuffle('FH'), 0, 1);
$age1 = rand(1, 120);
function profil($gender, $age1) {
    if ($age1 >= 18 AND $gender == "H") { 
        return 'Vous êtes un homme et vous êtes majeur.'; }
    elseif ($age1 >= 18 AND $gender == "F") { 
        return 'Vous êtes une femme et vous êtes majeure.'; }
    elseif ($age1 < 18 AND $gender == "H") { 
        return 'Vous êtes un homme et vous êtes mineur.'; }
    else { 
        return 'Vous êtes une femme et vous êtes mineure.'; }
};

// function ex8
$number4 = rand(1, 200);
$number5 = rand(1, 200);
$number6 = rand(1, 200);
function sum($number4, $number5, $number6) {
    $number7 = $number4 + $number5 + $number7;
    return $number7;
};

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP - Part. IV</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Exercices PHP</h1>

    <h2>PARTIE IV - Les fonctions</h2>

    <h3>Exercice 1</h3>
    <!-- Faire une fonction qui retourne true. -->
    <p><?= bool() ?></p>

    <h3>Exercice 2</h3>
    <!-- Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine. -->
    <p><?= string() ?></p>

    <h3>Exercice 3</h3>
    <!-- Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines. -->
    <p><?= concat() ?></p>

    <h3>Exercice 4</h3>
    <!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
    - Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    - Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    - Les deux nombres sont identiques si les deux nombres sont égaux -->
    <p><?= numbers($number1, $number2) ?></p>

    <h3>Exercice 5</h3>
    <!-- Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres. -->
    <p><?= concat1($string, $number3) ?></p>

    <h3>Exercice 6</h3>
    <!-- Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. 
    Elle doit renvoyer une chaine de la forme :  
    Bonjour + nom + prénom + , tu as + age + ans. -->
    <p><?= direBonjour($lastname, $firstname, $age) ?></p>

    <h3>Exercice 7</h3>
    <!-- Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. 
    Le genre peut être :
    - Homme
    - Femme  
    La fonction doit renvoyer en fonction des paramètres :
    - Vous êtes un homme et vous êtes majeur
    - Vous êtes un homme et vous êtes mineur
    - Vous êtes une femme et vous êtes majeure
    - Vous êtes une femme et vous êtes mineure
    Gérer tous les cas. -->
    <p><?= profil($gender, $age1) ?></p>

    <h3>Exercice 8</h3>
    <!-- Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
    Tous les paramètres doivent avoir une valeur par défaut. -->
    <p><?= sum($number4, $number5, $number6) ?></p>

</body>

</html>