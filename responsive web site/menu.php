<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu || Moldova Foods</title>
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>

    </head>
    <body>
        <header id="navbar">
            <a href="#" class="logo">Moldova <span>Foods</span></a>
            <ul id="link-words">
                <li><a href="index.php" class=" btn ">Accueil</a></li>
                <li><a href="menu.php" class="btn active">Menu</a></li>
                <li><a href="connaitre.php" class="btn">Nous connaître</a></li>
                <li><a href="reservation.php" class="btn">Réserver</a></li>
                <li><a href="contacter.php" class="btn">Contacter</a></li>
            </ul>
            <span class="menuIcon" onclick="menuToggle();"></span>
        </header>

        <script type="text/javascript">
            
        </script>

        <div id="background-container"><span></span></div>

        <div id="menuAccueil">
            <div id="menuTitre">
                <h1>Menu</h1>
                <h3>Nos spécialitées</h3>
            </div>
            
            <div id="note">
                <p>Note: dans le but de s'adapter au client, une grande partie de plats 
                    <span id="vegan">non-vegans</span> peuvent être adaptés en remplaçant 
                    avec le tofu, veuillez le mentionner au serveur et nous ferons de notre mieux.
                </p>  
            </div>  
            

            <div id="menuTotal">
                <div id="menuFormules" class="menuFormules-control">
                    <h1>Nos formules</h1>
                    
                    <div class="item-control">
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Menu Enfant</h2>
                                <h3>Plat + Soft + Dessert</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>15€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Menu Midi</h2>
                                <h3>Plat+Café+Dessert</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>17€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Menu Apéro</h2>
                                <h3>2 Plats + 2 Boissons</h3>
                            </div>
                            <p>(pour 2 personnes)</p>
                        </div>
                        <div class="item-price">
                            <p>30€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Formule Famille</h2>
                                <h3>Réduction de 15% sur la somme totale</h3>
                            </div>
                        </div>
                        <div class="item-price">
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Formule de groupe</h2>
                                <h3>Entrée, Plat, Boisson</h3>
                            </div>
                            <p>(+ de 10 personnes)</p>
                        </div>
                        <div class="item-price">
                            <p>18€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Formule de groupe</h2>
                                <h3>Entrée, Plat, Dessert, Boisson</h3>
                            </div>
                            <p>(+ de 10 personnes)</p>
                        </div>
                        <div class="item-price">
                            <p>21€</p>
                        </div>
                    </div>
                </div>

                <div id="menuEntrees" class="menuFormules-control">
                    <h1>Entrées</h1>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/entree/cartofi.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>CARTOFI ȚĂRĂNEȘTI</h2>
                                <h3>Pommes de terre sautées</h3>
                            </div>
                            <p>Patates, légumes</p>
                        </div>
                        <div class="item-price">
                            <p>6€</p>
                            <div class="icons">
                                <img src="img/gluten.png" alt="gluten free"></img>
                                <i class="fas fa-seedling"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/entree/catlete.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>catlete</h2>
                                <h3>Rissoles de viande</h3>
                            </div>
                            <p>Viande, légumes</p>
                        </div>
                        <div class="item-price">
                            <p>5€</p>
                            <div class="icons">
                                <img src="img/gluten.png" alt="gluten free"></img>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/entree/dovleac.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>plăcintă de dovleac</h2>
                                <h3>Petite brioche à citrouille</h3>
                            </div>
                            <p>Viande, oeufs, légumes</p>
                        </div>
                        <div class="item-price">
                            <p>5€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/entree/branza.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>plăcintă cu brânză</h2>
                                <h3>Petite brioche au fromage</h3>
                            </div>
                            <p>Viande, oeufs, légumes</p>
                        </div>
                        <div class="item-price">
                            <p>6€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/entree/pirojoc.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Pirojoc</h2>
                                <h3>Pommes de terre sautées</h3>
                            </div>
                            <p>Viande, oeufs, légumes</p>
                        </div>
                        <div class="item-price">
                            <p>6€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/entree/salade.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Salade</h2>
                                <h3>avec/sans viande</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>4€</p>
                        </div>
                    </div>
                </div>

                <div id="background-container3"><span></span></div>

                <div id="menuPrincipal" class="menuFormules-control">
                    <h1>Plat principal</h1>

                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/principal/pelimeni.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Pelimeni</h2>
                                <h3>Raviolis au boeuf</h3>
                            </div>
                            <p>Viande, oeufs, légumes</p>
                        </div>
                        <div class="item-price">
                            <p>13€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/principal/mamaliga.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Mămăligă</h2>
                                <h3>Polenta accompagnée de viande</h3>
                            </div>
                            <p>Polenta, viande, fromage</p>
                        </div>
                        <div class="item-price">
                            <p>11€</p>
                            <div class="icons">
                                <img src="img/gluten.png" alt="gluten free"></img>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/principal/sarmale.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Sarmale</h2>
                                <h3>Chou farci</h3>
                            </div>
                            <p>Viande, riz, légumes</p>
                        </div>
                        <div class="item-price">
                            <p>14€</p>
                            <div class="icons">
                                <img src="img/gluten.png" alt="gluten free"></img>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/principal/zeama.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Zeamă</h2>
                                <h3>Soupe aux légumes et viande</h3>
                            </div>
                            <p>Viande, légumes</p>
                        </div>
                        <div class="item-price">
                            <p>10€</p>
                            <div class="icons">
                                <img src="img/gluten.png" alt="gluten free"></img>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/principal/caras.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Caras prăjit</h2>
                                <h3>Carpe cuit</h3>
                            </div>
                            <p>Poisson, polenta, ail</p>
                        </div>
                        <div class="item-price">
                            <p>11€</p>
                            <div class="icons">
                                <img src="img/gluten.png" alt="gluten free"></img>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/principal/rosii.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Roșii umplute </h2>
                                <h3>Tomates farcies</h3>
                            </div>
                            <p>Légumes, riz</p>
                        </div>
                        <div class="item-price">
                            <p>12€</p>
                            <div class="icons">
                                <img src="img/gluten.png" alt="gluten free"></img>
                                <i class="fas fa-seedling"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/principal/tabaka.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Pui tabaka</h2>
                                <h3>Poulet grillé sous presse</h3>
                            </div>
                            <p>Viande, légumes</p>
                        </div>
                        <div class="item-price">
                            <p>13€</p>
                            <div class="icons">
                                <img src="img/gluten.png" alt="gluten free"></img>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/principal/entrecote.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Entrecôte grillée</h2>
                                <h3>350g</h3>
                            </div>
                            <p>Viande, patates et salade</p>
                        </div>
                        <div class="item-price">
                            <p>12€</p>
                            <div class="icons">
                                <img src="img/gluten.png" alt="gluten free"></img>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/principal/brochette.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Shashlik</h2>
                                <h3>Brochette traditionnelle moldave</h3>
                            </div>
                            <p>Viande, légumes, salade</p>
                        </div>
                        <div class="item-price">
                            <p>14€</p>
                            <div class="icons">
                                <img src="img/gluten.png" alt="gluten free"></img>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="background-container2"><span></span></div>

                <div id="menuDesserts" class="menuFormules-control">
                    <h1>Desserts</h1>
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/dessert/food1.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>CUȘMA LUI GUGUȚĂ</h2>
                                <h3>Crêpes aux griottes</h3>
                            </div>
                            <p>Meat, potatoes, rice and tomatos</p>
                        </div>
                        <div class="item-price">
                            <p>6€</p>
                        </div>
                    </div>

                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/dessert/food2.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>CLĂTITE CU BRÎNZĂ ȘI STAFIDE</h2>
                                <h3>Crêpes au fromage doux et raisins secs</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>5€</p>
                        </div>                            
                    </div>

                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/dessert/food3.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>COLȚUNAȘI CU VIȘINĂ</h2>
                                <h3>Dumplings/raviolis artisanales aux cerises</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>5€</p>
                        </div>                            
                    </div>

                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/dessert/food4.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>PLĂCINTĂ CU VIȘINE</h2>
                                <h3>Tarte traditionnelle aux cerises</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>4€</p>
                        </div>                            
                    </div>

                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/dessert/food5.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>PLĂCINTĂ CU MERE</h2>
                                <h3>Tarte traditionnelle aux pommes</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>4€</p>
                        </div>                            
                    </div>

                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/dessert/food7.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>CORNULETE FRAGEDE</h2>
                                <h3>Petits croissants aux noix et confiture</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>5€</p>
                        </div>                            
                    </div>

                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/dessert/food8.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Sfințișori</h2>
                                <h3>Pâte enduite de miel et noix</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>4€</p>
                        </div>                            
                    </div>

                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/dessert/food6.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>înghețată</h2>
                                <h3>Boules de glace</h3>
                            </div>
                            <p>Vanille, Chocolat, pistache, café, fraise</p>
                        </div>
                        <div class="item-price">
                            <p>3€</p>
                        </div>                            
                    </div>
                </div>
                
                <div id="background-container4"><span></span></div>

                <div id="menuBoissons" class="menuFormules-control">
                    <h1>Boissons</h1>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/boissons/fautor negre.png" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Fautor Negre</h2>
                                <h3>Vin rouge</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>28€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/boissons/salcuta pinot gris.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Salcuta Pinot Gris</h2>
                                <h3>Vin blanc</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>25€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/boissons/cricova viorica.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Cricova Viorica </h2>
                                <h3>Vin blanc</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>23€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/boissons/saint omer.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Bière - Saint Omèr</h2>
                                <h3>50cl</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>5€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/boissons/goudale ambrée.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Bière - Goudale Ambrée</h2>
                                <h3>50cl</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>6€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/boissons/desperados.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Desperados</h2>
                                <h3>33cl</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>4€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/boissons/cubanisto.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Cubanisto</h2>
                                <h3>33cl</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>4€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/boissons/brut d'or.png" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Champagne - Brut d'Or</h2>
                                <h3>Classique mousseux </h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>40€</p>
                        </div>
                    </div>
                </div>

                <div id="menuSofts" class="menuFormules-control">
                    <h1>Softs</h1>
                                        
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/softs/compot.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Compot</h2>
                                <h3>Boisson infusée aux fruits séchés</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>3€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/softs/kvas.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Kvas</h2>
                                <h3>Boisson fermentée et pétillante</h3>
                            </div>
                            <p>Fermentation naturelle du pain et parfumé avec des fruits</p>
                        </div>
                        <div class="item-price">
                            <p>3€</p>
                        </div>
                    </div>

                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/softs/soda.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Soda 33cl</h2>
                                <h3>Crêpes aux griottes</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>2€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/softs/jus.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Jus de fruits</h2>
                                <h3>de raisin, pomme ou orange</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>2,50€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/softs/cafe expresso.webp" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Café expresso</h2>
                                <h3>expresso</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>2,50€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/softs/cafe allonge.webp" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Café allongé</h2>
                                <h3>allongé</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>2,50€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/softs/chai latte.webp" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>Chai latte</h2>
                                <h3>Crêpes aux griottes</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>3€</p>
                        </div>
                    </div>
                    
                    <div class="item-control">
                        <div class="item-photo"> 
                            <img src="img/softs/san pellegrino.jpg" alt="">
                        </div>
                        <div class="item-titre">
                            <div class="item-titleDuo">
                                <h2>San Pellegrino </h2>
                                <h3>1L</h3>
                            </div>
                        </div>
                        <div class="item-price">
                            <p>2,50€</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    

        <?php include 'footer.html' ?>

        <script src="js/main.js"></script>
    </body>
</html>