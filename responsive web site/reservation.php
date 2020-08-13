<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resérvation || Moldova Foods</title>
        <link rel="stylesheet" href="css/reserv.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container">
            <header id="navbar">
                <a href="#" class="logo">Moldova <span>Foods</span></a>
                <ul id="link-words">
                    <li><a href="index.php" class=" btn">Accueil</a></li>
                    <li><a href="menu.php" class="btn">Menu</a></li>
                    <li><a href="connaitre.php" class="btn">Nous connaître</a></li>
                    <li><a href="reservation.php" class="btn active">Réserver</a></li>
                    <li><a href="contacter.php" class="btn">Contacter</a></li>
                </ul>
                <span class="menuIcon" onclick="menuToggle();"></span>
            </header>
            <?php include "reservation form/send-reserv.php"?>

            <div class="main">
                <div class="intro">
                    <h1 id="title" class="text-center">Faites une resérvation</h1>
                    <p id="description" class="description text-center">
                        Nous disposons de capacités pour accueillir jusqu'à 20 peronnes
                    </p>
                </div>

                <div id="img-left">
                    <img src="img/chef2.jpg" alt="chef's photo">
                </div>

                <form id="survey-form" method="POST" action="">
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
                        <label id="number-label" for="number">Numéro de téléphone</label>
                        <input
                        type="tel"
                        name="phone"
                        id="number"
                        class="form-control"
                        placeholder="numéro de téléphone"
                        pattern="0[67]\d{8}"
                        required
                        />
                    </div>
    
                    <div class="form-group">
                        <p>Combien de personnes?</p>
                        <select id="dropdown" name="role" class="form-control" required>
                        <option disabled selected value>nombre de personnes</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6 ou plus</option>
                        </select>
                    </div>
                         
                    <div class="form-group">
                        <p>
                        Quelle date?
                        </p>
                        <input type="date" id="date"  name="date" class="form-control" min='2020-08-09' required>
                    </div>

                    <div class="form-group">
                        <p>
                        A quelle heure?
                        </p>
                        <select id="heure" name="heure" class="form-control" required>
                        <option disabled selected value>Selectionnez l'heure</option>
                        <option value="12h">12h</option>
                        <option value="12h30">12h30</option>
                        <option value="13h">13h</option>
                        <option value="13h30">13h30</option>
                        <option value="14h">14h</option>
                        <option value="18h30">18h30</option>
                        <option value="19h">19h</option>
                        <option value="19h30">19h30</option>
                        <option value="20h">20h</option>
                        <option value="20h30">20h30</option>
                        <option value="21h">21h30</option>
                        <option value="22h">22h</option>
                        </select>
                    </div>
                
                    <div class="form-group" id="width-control">
                        <p>Des commentaires? Des restrictions alimentaire?</p>
                        <textarea
                        id="comments"
                        class="input-textarea"
                        name="comment"
                        placeholder="Notre équipe est formée pour s'adapter à votre besoin"
                        ></textarea>
                    </div>
                
                    <div class="form-group" id="width-control2">
                        <button type="submit" id="submit" name="submit" class="submit-button">
                        Faites la resérvation
                        </button>
                    </div>

                    <?php if(!empty($statusMsg)){ ?>
                        <div class=statusMsg>
                            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p> 
                        </div> 
                    <?php } ?> 
                </form>
            </div>
        </div>

        <?php include 'footer.html' ?>

        <script src="js/dateControl.js"></script>                    
        <script src="js/main.js"></script>
    </body>
</html>