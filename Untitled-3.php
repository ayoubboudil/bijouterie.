<html>
    <!DOCTYPE html>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    
    $destinataire = "ayoubboudil21@gmail.com"; // Remplacez par votre adresse e-mail
    
    $sujet = "Nouveau message depuis le formulaire de contact";
    
    $contenu = "Nom : " . $nom . "\n";
    $contenu .= "Email : " . $email . "\n";
    $contenu .= "adresse : " . $adresse;
    
    $entetes = "From: " . $nom . " <" . $email . ">\r\n";
    $entetes .= "Reply-To: " . $email . "\r\n";
    
    
}
?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bijouterie</title>
        <link rel="stylesheet" href="merci.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <header>
            <div class="logo">
                <p><span>Bij</span>outerie</p>
            </div>
            <ul class="menu">
                <li><a href="index.php#home">Accueil</a></li>
                <li><a href="index.php#apropos">Nos bijoux</a></li>
                <li><a href="index.php#commander">Commander</a></li>             
            </ul>
        </header>
          <!--section accueil home-->
          <section id="home">
            <div class="left">
                <h1>  Merci Pour Votre confiance  </h1>
                <h4> On va vous contacter dans le plutot possible </h4>
                    <button><a href="index.php">Retour à la page principale </a></button>
                </div>
                
               
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
                <p><a href="https://goo.gl/maps/Q2iXWYEt9242BjgZ8">Marrakech_Maroc</a></p>
                <p><a href="https://goo.gl/maps/Q2iXWYEt9242BjgZ8">Gueliz</a></p>
            </div>
            <div class="service">
                <img src="email.png" alt="">
                <h2> Email </h2>
                <p><a href="mailto:ayoubboudil21@gmail.com">ayoubboudil21@gmail.com</a> </p>
            </div>
            <div class="service">
                <img src="telephone.png" alt="">
                <h2> Numéro </h2>
                <p><a href="tel:0684861024">06.84.86.10.24</a></p>
            </div>
            <hr>
        </div>
        <p class="footer_text"> Réalisé par <u><span>Ayoub Boudil</span></u></p>
    </footer>
</body>
</html>
