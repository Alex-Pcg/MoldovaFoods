<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu || Moldova Foods</title>
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/contacter.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>

    </head>
    <body>
        <header id="navbar">
            <a href="#" class="logo">Moldova <span>Foods</span></a>
            <ul id="link-words">
                <li><a href="index.php" class=" btn">Accueil</a></li>
                <li><a href="menu.php" class="btn">Menu</a></li>
                <li><a href="connaitre.php" class="btn">Nous connaître</a></li>
                <li><a href="reservation.php" class="btn">Réserver</a></li>
                <li><a href="contacter.php" class="btn active">Contacter</a></li>
            </ul>
            <span class="menuIcon" onclick="menuToggle();"></span>
        </header>
        <?php include "contact form/send-contact.php" ?>
        <div id="contact">

            <iframe id="location"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1415.3541102009353!2d-0.6000498418195225!3d44.807134694774696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd55277e81468f0f%3A0x9888f3abc18f90a6!2sAll%C3%A9e%20Baudrimont%2C%2033400%20Talence!5e0!3m2!1sfr!2sfr!4v1596892129654!5m2!1sfr!2sfr"
                width="450" 
                height="600" 
                frameborder="0" 
                style="border:0;" 
                allowfullscreen="" 
                aria-hidden="false" 
                tabindex="0">
            </iframe>

            <form id="survey-form" method="POST" action="">
                    <h2>Contactez Nous</h2>

                    <div class="form-group">
                        <label id="name-label" for="name">Votre nom</label>
                        <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        placeholder="Introduisez votre nom"
                        required
                        />
                    </div>
    
                    <div class="form-group">
                        <label id="email-label" for="email" pattern=".+@[mM][aA][iI][lL][fF][oO][rR][aA][lL][lL][.][cC][oO][mM]">Email</label>
                        <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        placeholder="Introduisez votre email"
                        required
                        />
                    </div>

                    <div class="form-group">
                        <label id="sujet-label" for="sujet">Sujet</label>
                        <input
                        type="text"
                        name="subject"
                        id="subject"
                        class="form-control"
                        placeholder="Quel est le sujet?"
                        required
                        />
                    </div>
                
                    <div class="form-group">
                        <p>Votre message</p>
                        <textarea
                        id="message"
                        class="input-textarea"
                        name="message"
                        placeholder="Nous allons répondre dans les plus brefs délais"
                        ></textarea>
                    </div>
                
                    <div class="form-group" id="width-control2">
                        <button name="submit" type="submit" id="submit" class="submit-button">
                        Envoyer le message
                        </button>
                    </div>

                    <?php if(!empty($statusMsg)){ ?>
                        <div class=statusMsg>
                            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p> 
                        </div> 
                    <?php } ?> 
                </form>
        </div>
        
        <?php include 'footer.html' ?>
        <script src="js/main.js"></script>
    </body>
</html>