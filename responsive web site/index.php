<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil || Moldova Foods</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <!--<link rel="stylesheet" href="css/text-funny.css">-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container">
            <?php include "header.html"?>
            <script src="js/changingIndex.js"></script>
            <div class="content">
                <div class="bannerText" id="slideshowText">
                    <div class="active">
                        <h2>Découvrez <br>la cuisine moldave</h2>
                        <p><span class="text-bg">La cuisine moldave est le résultat de la synthèse, au 
                            fil du temps, des goûts, des idées et des habitudes 
                            gastronomiques propres à la population moldave </span>
                        </p>
                        <a href="connaitre.php">En savoir plus</a>
                    </div>
                    <div>
                        <h2>Nos produits<br>sont locaux</h2>
                        <p><span class="text-bg">La matière première qui est utilisée dans la production 
                            des plats de Moldova Foods provient directement des
                            producteurs locaux. Nous tenons à la soutenabilité de
                            notre planète. <br>
                            <span id="possible">(*dans la limite du réalisable*)</span> </span>
                        </p>
                        <a href="connaitre.php">En savoir plus</a>
                    </div>
                    <div>
                        <h2>Laissez vous <br>tenter</h2>
                        <p><span class="text-bg">Notre mission est simple: servir des plats délicieux pour 
                            que les clients veuillent retourner la semaines d'après
                        </span></p>
                        <a href="connaitre.php">En savoir plus</a>
                    </div>
                </div>

                <div class="bannerImg" id="slideshow">
                    <img src="img/principal/pelimeni.jpg" class="active" >
                    <img src="img/background-food-dessert.jpg">
                    <img src="img/restaurant/restaurant-int3.jpg">
                </div>
            </div>

            <div class="icons">
                <ul class="controls">
                    <li><a><i class="fas fa-chevron-left" onClick="prevSlide(); prevSlideText(); myFunction();"></i></a></li>
                    <li><a><i class="fas fa-chevron-right" onClick="nextSlide();nextSlideText(); myFunction();"></i></a></li> 
                </ul>
            </div>


            <div id="menuAccueil">
                <div id="menuTitre">
                    <h1>Menu</h1>
                    <h3>Nos spécialitées</h3>
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
                                    <h2>Formule Famille</h2>
                                    <h3>Réduction de 15% sur la somme totale</h3>
                                </div>
                            </div>
                            <div class="item-price">
                            </div>
                        </div>
                    </div>

                    <div id="menuEntrees" class="menuFormules-control">
                        <h1>Entrées</h1>
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
                                <div class="icon">
                                    <img src="img/gluten.png" alt="gluten free"></img>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                <div class="icon">
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
                                <div class="icon">
                                    <img src="img/gluten.png" alt="gluten free"></img>
                                </div>
                            </div>
                        </div>
                    </div>

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
                    </div>

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
                    </div>

                    <div id="menuButton">
                        <a href="menu.php">
                            <button type="button" id="changeMenu" class="submit-button">
                                Regarder tout le menu
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/t-shirt-blue.jpg" alt="blue t-shirt">
                    </div>

                    <div class="swiper-slide">
                        <img src="img/t-shirt.jpg" alt="t-shirt">
                    </div>
                    
                    <div class="swiper-slide">
                        <img src="img/pillow.jpg" alt="moldova pillow">
                    </div>
                    
                    <div class="swiper-slide">
                        <img src="img/tapis.jpg" alt="tapis">
                    </div>
                    
                    <div class="swiper-slide">
                        <img src="img/cup.jpg" alt="cup">
                    </div>
                    
                    <div class="swiper-slide">
                        <img src="img/pull.jpg" alt="cup">
                    </div>
                    
                    <div class="swiper-slide">
                        <img src="img/robe.jpg" alt="cup">
                    </div>
                    
                    <div class="swiper-slide">
                        <img src="img/tot-bag.jpg" alt="cup">
                    </div>
                    
                    <div class="swiper-slide">
                        <img src="img/flag.jpg" alt="cup">
                    </div>
                </div>

                <div class="swiper-pagination"></div>
                
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

        <?php include 'footer.html' ?>

        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="js/swiper.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>