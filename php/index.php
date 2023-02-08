<?php
    include("./functions/dimitri.php");
?>

<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP - Les fonctions</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>

        <div class="container py-3">
                <button type="button" class="btn btn-secondary w-100 mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Testez la force du mot de passe
                </button>

            <?php
            
            if (isset($_GET['password'])) {
                var_dump($_GET);
                $password = $_GET['password'];


               \dimitri\checkPassword($password);

                // Use your own function with your namespace

            }
            else {
                ?>
                    <div class="alert alert-info" role="alert">
                        <h4 class="alert-heading">Bonjour et bienvenue 🙂</h4>
                        <p>Vérifions si votre mot de passe est bien sécurisé !</p>
                        <hr>
                        <p>Pour celà, il vous suffit de le renseigner directement dans l'URL comme dans l'example ci-dessous :</p>
                        <a href="index.php?password=motdepasse" class="link-primary mb-0">index.php?password=motdepasse</a>
                    </div>
                
                <?php
            }

            ?>

        </div>
            
            <form action="index.php?password" method="get">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input type="text" name="password" value="<?php if (isset($_GET['password'])) {echo $_GET['password'];} ?>{" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">annuler</button>
                        <button type="submit" class="btn btn-primary">tester</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </body>
</html>
