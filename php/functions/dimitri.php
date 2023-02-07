<?php

namespace dimitri;

function checkPassword($password) {

    echo '<h1 class="text-center">Dimitri</h1>';

    echo '<h5 class="text-start mt-5">Mot de passe : '.$password.' </h5>';
    
    echo '<h5 class="text-end ">force du mot de passe</h5>';

    $ent=null;
    $min=null;
    $maj=null;
    $spec=null;
    $qtt=null;

    if((!empty($password)) && preg_match("/[0-9]/",$password)){

        $ent = "d-none";

     }
    if((!empty($password)) && preg_match("/[a-z]/",$password)){

        $min = "d-none";

     }
    if((!empty($password)) && preg_match("/[A-Z]/",$password)){

        $maj = "d-none";

     }
    if((!empty($password)) && preg_match("/[!@#$%^&*()_+\-=\[\]{};:\\|,.<>\/?]/",$password)){

        $spec = "d-none";

     }
    // if((!empty($password)) && preg_match("/.{12-100}/", $password)){

    //     $qtt = "d-none";

    // }
        
    

    echo '<div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 0%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>';

    echo    '<div class="container mt-5 w-50">
                <ul class="list-group">
                    <li class="list-group-item active">Le mot de passe doit contenir au moins:</li>
                    <li class="list-group-item ' . $ent . '">un chiffre</li>
                    <li class="list-group-item ' . $min . '">une minuscule</li>
                    <li class="list-group-item ' . $maj . '">une majuscule</li>
                    <li class="list-group-item ' . $spec . '">un caractère spécial</li>
                    <li class="list-group-item ' . $qtt . '">12 caractères</li>
                </ul>
            </div>';

  // </div>
// <div class="progress">
//   <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
// </div>
// <div class="progress">
//   <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
// </div>
// <div class="progress">
//   <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
// </div>
// <div class="progress">
//   <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
// </div>
















    // mise en place de l'interface 
        // -barre de progression
        // -tableau des imperatifs
//  ---------------------------------------------
        // saisie utilisateur
// -------------------------------------------------
                    //  -
                    //  -
        // verification de la saisie avec regex et pregmatch
                    //  -
                    //  -
        // mise à jour de la barre et du tableau avec condition en fonction du pregmatch

        // repeter processus

        // si pregmatch total (conditions remplies)
        // bouton ok retour => sur l'index /remplace tableau




}
