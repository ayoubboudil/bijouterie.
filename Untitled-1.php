<html>
<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['nom'];
   $prenom = $_POST['prenom'];
   $email = $_POST['email'];
   $tele = $_POST['tele'];
   $adress = $_POST['adress'];



   if (empty($name)) {
       $errors[] = 'nom est vide';
   }
   if (empty($prenom)) {
    $errors[] = 'nom est vide';
}
if (empty($tele)) {
    $errors[] = 'est vide';
}
if (empty($adress)) {
    $errors[] = 'nom est vide';
}

   if (empty($email)) {
       $errors[] = 'Email est vide';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalide';
   }


   if (empty($errors)) {
       $toEmail = 'example@example.com';
       $emailSubject = 'New email from your contact form';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) {

           header('Untitled-3.html');
       } else {
           $errorMessage = 'Oops, something went wrong. Please try again later';
       }

   } else {

       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   }
}

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bijouterie</title>
        <link rel="stylesheet" href="Untitled-2.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <header>
            <div class="logo">
                <p><span>Bij</span>outerie</p>
            </div>
            <ul class="menu">
                <li><a href="#home">Accueil</a></li>
                <li><a href="#apropos">Nos bijoux</a></li>
                <li><a href="#commander">Commander</a></li>             
            </ul>
        </header>

        <!--section accueil home-->


        <section id="home">
            <div class="left">
                <h4>  Les jours précieux  </h4>
                <h1>Découvrez la remise spéciale de
                    25% sur une sélection de 20 produits disponible dans toutes nos boutiques !</h1>
                    <button><a href="#commander">Commander maintenant</a></button>
                </div>
                <div class="right">
                    <img src="bijouterie_1.jpg" alt="">
                </div>
        </section> 


        <!--section a propos -->


        <section id="apropos">
                    <h4 class="mini_title">Nos bijoux</h4>
                
                <div class="dishes">
                    <div class="dish">>
                        <img src="bij1.jpg">
                        <p>Bague</p>
                        <h2> 499 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div>
                    <div class="dish">
                        <img src="bij2.jpg">
                        <p>Bague</p>
                        <h2> 199 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div>
                    <div class="dish">
                        <img src="bij3.jpg">
                        <p>Bague</p>
                        <h2> 349 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div>
                    <div class="dish">
                        <img src="bij4.jpg">
                        <p>Bague</p>
                        <h2> 279 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div>
                    <div class="dish">
                        <img src="bij5.jpg">
                        <p>Bague</p>
                        <h2> 299 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div>
                    <div class="dish">
                        <img src="bij6.jpg">
                        <p>Bague</p>
                        <h2> 249 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div>
                    <div class="dish">
                        <img src="bij4.jpg">
                        <p>Bague</p>
                        <h2> 279 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div>
                    <div class="dish">
                        <img src="bij5.jpg">
                        <p>Bague</p>
                        <h2> 299 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div>
                    <div class="dish">
                        <img src="bij6.jpg">
                        <p>Bague</p>
                        <h2> 249 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div>
                    <div class="dish">
                        <img src="bij6.jpg">
                        <p>Bague</p>
                        <h2> 249 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div>
                    <div class="dish">
                        <img src="bij6.jpg">
                        <p>Bague</p>
                        <h2> 249 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div>
                    <div class="dish">
                        <img src="bij6.jpg">
                        <p>Bague</p>
                        <h2> 249 dh</h2>
                        <a href="#"> Acheter </a>
                    </div>
                    <div class="dish">
                        <img src="bij6.jpg">
                        <p>Bague</p>
                        <h2> 249 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div>
                    <div class="dish">
                        <img src="bij6.jpg">
                        <p>Bague</p>
                        <h2> 249 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div><div class="dish">
                        <img src="bij6.jpg">
                        <p>Bague</p>
                        <h2> 249 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div><div class="dish">
                        <img src="bij6.jpg">
                        <p>Bague</p>
                        <h2> 249 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div><div class="dish">
                        <img src="bij6.jpg">
                        <p>Bague</p>
                        <h2> 249 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div><div class="dish">
                        <img src="bracelet.jpeg">
                        <p>Bague</p>
                        <h2> 249 dh</h2>
                        <a href="#commander"> Acheter </a>
                    </div>
                </div>
                
        </section>

  
                  <!-- section commander -->


    <section id="commander">

       
        <h4 class="mini_title">Contacter</h4>
        <h2 class="title"><u> Remplie le formulaire </u></h2>
        <form action="">
            <label>Nom :</label>
            <input type="text" name="nom">
            <label>Prénom :</label>
            <input type="text" name="prenom">
            <label>Email :</label>
            <input type="email" name="email">
            <label>Télephone :</label>
            <input type="text" name="tele">
            <label>Adresse :</label>
            <input type="text" name="adress">
            
            <button input type="submit" value="Commander" ><a href="Untitled-3.html">Commander</a></button>
        </form>
    </section>

                 <!--footer-->


    <footer>
        <div class="services_list">
            <div class="service">
                <img src="clock.png" alt="">
                <h2> Ouverture </h2>
                <p> 10h30 à 23h45</p>
                <p> 23h45 à 9h30</p>
            </div>
            <div class="service">
                <img src="adresse.png" alt="">
                <h2> Adresse </h2>
                <p> Marrakech_Maroc</p>
                <p> Gueliz </p>
            </div>
            <div class="service">
                <img src="email.png" alt="">
                <h2> Email </h2>
                <p> ayoubboudil21@gmail.com </p>
            </div>
            <div class="service">
                <img src="telephone.png" alt="">
                <h2> Numéro </h2>
                <p> 06.84.86.10.24</p>
            </div>
            <hr>
        </div>
        <p class="footer_text"> Réalisé par <u><span>Ayoub Boudil</span></u></p>
    </footer>
</body>
</html>
