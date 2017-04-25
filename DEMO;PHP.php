<?php
/**
 * Created by PhpStorm.
 * User: littleblackman
 * Date: 24/04/2017
 * Time: 19:00
 */






$values = $_POST['answers']; // les propositions

$values = array('Q1' => 'A', 'Q2' => 'F');


// recupère les vraies bonnes réponses

$true_answers = array('Q1' => 'A', 'Q2' => 'B');

$count = 0;

// vérifie les réponses aux questionnaires
foreach($true_answers as $question => $reponses)
{
    // check if true
    if( $reponses = $values[$question]) {
        $tableau_final[$question] = 1;
        $count ++;
    } else {
        $tableau_final[$question] = 0;

    }
}

// dans ma vue j'envoie $tableau_final, $count;