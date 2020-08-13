<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu || Moldova Foods</title>
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/connaitre.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>

    </head>
    <body>
        <header id="navbar">
            <a href="#" class="logo">Moldova <span>Foods</span></a>
            <ul id="link-words">
                <li><a href="index.php" class=" btn">Accueil</a></li>
                <li><a href="menu.php" class="btn">Menu</a></li>
                <li><a href="connaitre.php" class="btn active">Nous connaître</a></li>
                <li><a href="reservation.php" class="btn">Réserver</a></li>
                <li><a href="contacter.php" class="btn">Contacter</a></li>
            </ul>
            <span class="menuIcon" onclick="menuToggle();"></span>
        </header>

        <!--<div id="background-container"><span></span></div>-->

        <div id="top">
            <h1>Sur Nous</h1>
        </div>  
        
        <div id="brief-intro">
            <p>Situé dans l'Université de Bordeaux, Moldova Foods, est une compilation d'expériences culinaires animées, un service de premier ordre et une cuisine moldave de qualité qui ouvre la voie à une connexion authentique autour d'un bon repas.</p>
        </div>  

        <div id="full-description">
            <div class="img-description">
                <img src="img/restaurant/cooking food.jpg" alt="bla bla">
            </div>

            <div class="text-description">
                <p>
                    Moldavie - un pays enclavé situé en Europe de l'Est. En raison de son histoire
                    tumultueuse sous différents régimes, noms et professions, la Moldavie possède
                    une riche tapisserie culturelle, la cuisine étant une composante principale de 
                    la transition. Avec les influences de ses voisins: la Roumanie et l'Ukraine, un 
                    peu de Turquie et de Bulgarie, certains de Russie et même des pays méditerranéens, 
                    la cuisine moldave offre une variété de goûts et de saveurs. Avec des épices, des 
                    herbes et divers types de produits et de viandes, nos plats combinent ces saveurs 
                    pour créer de véritables chefs-d'œuvre, donnant un résultat incroyable pour un repas 
                    bien équilibré. Embarquez avec nous dans un voyage vers une nouvelle expérience culinaire.
                </p>
            </div>

            
            <div class="text-description">
                <p>
                    La cuisine de Moldova Foods tire largement son influence du sud de la Moldavie,
                    apportant une touche à des classiques précieux et introduisant des techniques 
                    culinaires modernes avec le changement des saisons. Les pâtes faites maison,
                    les fromages et autres ingrédients artisanaux abondent dans la cuisine à
                    partir de zéro, et les clients apprécieront l'attention portée aux détails
                    de l'équipe culinaire à chaque bouchée. Fidèle aux traditions culinaires 
                    moldaves, Moldova Foods propose également une option de restauration
                    «Pour les fêtes» qui permet une expérience amusante de style familial,
                    proposée tous les soirs avec le menu complet à la carte.
                </p>
            </div>


            <div class="img-description">
                <img src="img/restaurant/cooking person.jpg" alt="bla bla">
            </div>
            
        </div>

            

        <?php include 'footer.html' ?>

        <script src="js/main.js"></script>
    </body>
</html>