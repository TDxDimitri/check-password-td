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
    $tab=null;
    $v=0;
    $c=null;

    if((!empty($password)) && preg_match("/[0-9]/",$password)){

        $ent = "d-none";
        $v=$v+20;

     }
    if((!empty($password)) && preg_match("/[a-z]/",$password)){

        $min = "d-none";
        $v=$v+20;

     }
    if((!empty($password)) && preg_match("/[A-Z]/",$password)){

        $maj = "d-none";
        $v=$v+20;

     }
    if((!empty($password)) && preg_match("/[!@#$%^&*()_+\-=\[\]{};:\\|,.<>\/?]/",$password)){

        $spec = "d-none";
        $v=$v+20;

     }
    if((!empty($password)) && preg_match("/^.{12,}$/", $password)){

        $qtt = "d-none";
        $v=$v+20;

    }

    if($v==20){
         $c = "bg-danger";
    }
    if($v==40){
         $c = "bg-warning";
    }
    if($v==60){
         $c = "bg-info";
    }
    if($v==80){
         $c = "";
    }
    if($v==100){
         $c = "bg-success";
    }
    
    echo '<div class="progress">
                <div class=" progress-bar-animated progress-bar progress-bar-striped ' . $c . '" role="progressbar" style="width: '.$v.'%" aria-valuenow="'.$v.'" aria-valuemin="0" aria-valuemax="100"></div>
            </div>';

    if(($v==100)){
        
        $tab = "d-none";
                
        echo '<div class="d-flex justify-content-center">
                <a type="button" href="index.php?" class=" mt-5 btn btn-success">Ok</a>
            </div>';
    }        

    echo    '<div class="container mt-5 w-50">
                <ul class="list-group">
                    <li class="list-group-item active ' . $tab . '">Le mot de passe doit contenir au moins:</li>
                    <li class="list-group-item ' . $ent . '">un chiffre</li>
                    <li class="list-group-item ' . $min . '">une minuscule</li>
                    <li class="list-group-item ' . $maj . '">une majuscule</li>
                    <li class="list-group-item ' . $spec . '">un caractère spécial</li>
                    <li class="list-group-item ' . $qtt . '">12 caractères</li>
                </ul>
            </div>';


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
