<!DOCTYPE html>
<html lang="fr">
    <head>    
        <title>MisiDev</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/style/style.css" rel="stylesheet"/>
    </head>
    <body>
        <!-- MENU -->
        <header  class="header">

            <!-- nav -->
            <?php 
                include 'nav.php';
            ?>
            <!-- End nav -->
        </header>
        <!-- End MENU-->
        <!-- HERO -->
        <section>
            <div id="containerHero">
                <div id="row">
                    <div id="col">
                        <h1>MisiDev</h1>
                        <h2>Une solution pour tous vos projet Web</h2>
                        <p>Profitez des services d'un développeur web pour lancer votre projet</p>
                        <a href="index.php#3">En savoir plus</a>
                    </div>
                    <div>
                        <img src="assets/img/hero.jpg" ref="heroimg">
                    </div>
                </div>
            </div>
        </section>
        <!-- End HERO -->

        <!-- ABOUT ME-->
         <section id="1" class="aboutme">
            <div id="container" >
                <h2>À mon sujet</h2>
                <p>Apprenez s'en plus sur moi</p>
            </div> 
            <div>
                <div id="row">
                    <div id="col">
                        <img src="public/assets/img/photo.jpg" ref="aboutimg">
                    </div>
                    <div id="col">
                        <h3>Future développeur web</h>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque incidunt dolore ab itaque repellendus, 
                            excepturi blanditiis, perferendis dolorum praesentium sunt voluptates consectetur porro hic inventore. 
                            Culpa nostrum consectetur non maiores quam iusto fugiat perspiciatis minima adipisci. Facere illum explicabo 
                            sunt debitis pariatur dolor temporibus odio. Aliquid consectetur eveniet in quam, possimus ad natus maiores numquam 
                            beatae! Voluptatibus aliquam impedit voluptas.
                        </p>
                    </div>
                </div>
            </div>
         </section>

            <!-- Box-->
        <section id="box" class="aboutme">
            <div id="container" >
                <div id="col">
                    <div id="box" class="box">
                        <i class="iconebox"></i>
                        <h2>Point fort 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae doloremque ut aspernatur tempore soluta harum!</p>

                    </div>
                </div>
                <div id="col">
                    <div id="box" class="box">
                        <h2>Point fort 2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae doloremque ut aspernatur tempore soluta harum!</p>

                    </div>
                </div>
                <div id="col">
                    <div id="box" class="box">
                         <h2>Point fort 3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae doloremque ut aspernatur tempore soluta harum!</p>

                    </div>
                </div>
            </div> 
         </section>
            <!-- Box-->
        <!-- End About Me-->

        <!-- Why Us-->
        <section id="2" class="whyus">
            <div id="container" >
                <h2>Pourquoi moi</h2>
                <p> </p>
            </div> 
            <div>
                <div id="row">
                    <div id="col">
                        <h3>Pourquoi moi</h>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque incidunt dolore ab itaque repellendus, 
                                excepturi blanditiis, perferendis dolorum praesentium sunt voluptates consectetur porro hic inventore. 
                                Culpa nostrum consectetur non maiores quam iusto fugiat perspiciatis minima adipisci. Facere illum explicabo 
                                sunt debitis pariatur dolor temporibus odio. Aliquid consectetur eveniet in quam, possimus ad natus maiores numquam 
                                beatae! Voluptatibus aliquam impedit voluptas.
                            </p>

                    </div>
                    <div id="col">
                        <img src="assets/img/motive.jpg" ref="whyusimg">
                    </div>
                </div>
            </div>
         </section>
        <!-- End Why Us-->

        <!-- Review-->
        <section id="3" class="review">
            <div id="container" >
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque incidunt dolore ab itaque repellendus, 
                    excepturi blanditiis, perferendis dolorum praesentium sunt voluptates consectetur porro hic inventore. 
                    Culpa nostrum consectetur non maiores quam iusto fugiat perspiciatis minima adipisci. Facere illum explicabo 
                    sunt debitis pariatur dolor temporibus odio. Aliquid consectetur eveniet in quam, possimus ad natus maiores numquam 
                    beatae! Voluptatibus aliquam impedit voluptas.
                </p>                       
            </div> 
        </section>
        <!-- End Review-->
        <!-- Footer --> 
        <?php 
            include 'footer.php';
        ?>
        <!-- End Footer --> 
    </body>
</html>