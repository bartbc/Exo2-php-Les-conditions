<?php  
    
  # PHP - Les conditions
  ## Exercice 1 Créer une variable **age** et l'initialiser avec une valeur.  
  //Si l'age est supérieur ou égale à 18, afficher **Vous êtes majeur**. Dans le cas contraire, afficher **Vous êtes mineur**.
  echo "Exo 1: ";
  $age=17;
  if ($age >= 18) {
    echo 'A '.$age.' ans vous êtes majeur !';
    } else {
      echo 'A '.$age.' ans vous êtes mineur !';
  }

  // Exercice 2 
  // Créer deux variables **age** et **genre**. La variable **genre** peut prendre comme valeur :
  // - Homme
  // - Femme  

  // En fonction de l'âge et du genre afficher la phrase correspondante :
  // - **Vous êtes un homme et vous êtes majeur**
  // - **Vous êtes un homme et vous êtes mineur**
  // - **Vous êtes une femme et vous êtes majeur**
  // - **Vous êtes une femme et vous êtes mineur**  

  // Gérer tous les cas.
  echo "<br>Exo 2: ";
  $age=19;
  $genre="Femme";

  $reponse= ($genre == "Homme") ? 'Vous êtes un Homme et vous êtes ' : 'Vous êtes une Femme et vous êtes ';
  $reponse.= ($age >= 18) ? 'majeur' : 'mineur';
  echo $reponse;

  ## Exercice 3 Traduire ce code avec des if et des else :  
  // echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
  echo "<br>Exo 3: ";
  $maVariable='Homme';

  if ($maVariable != 'Homme') {
    echo 'C\'est une développeuse !!!';
    } else {
      echo 'C\'est un développeur !!!';
  }

  ## Exercice 4  Traduire ce code avec des if et des else :  
  // echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
  echo "<br>Exo 4: ";
  $monAge=21;
  if ($monAge >= 18) {
    echo 'Tu es majeur';
    } else {
      echo 'Tu n\'es pas majeur';
  }

  ## Exercice 5 Traduire ce code avec des if et des else :  
  // echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
  echo "<br>Exo 5: ";
  $maVariable=true;
  if ($maVariable == false) {
    echo 'c\'est pas bon !!!';
    } else {
      echo 'c\'est ok !!';
  }

  ## Exercice 6 Traduire ce code avec des if et des else :  
  // echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!';
  echo "<br>Exo 6: ";
  $maVariable=NULL;
  if ($maVariable) {
    echo 'c\'est ok !!';
    } else {
      echo 'c\'est pas bon !!!';
  }
?>





