<!DOCTYPE html>
<html lang="fr">
    <head>    
        <title>MisiDev</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/style/style.css" rel="stylesheet"/>
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
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
        <section class="Hero">
            <div id="row">
                <div id="col">
                    <h1 class="logohero">MisiDev</h1>
                    <h2>Votre développeur full stack</h2>
                    <p>Ce site de prefo à pour but de vous montrer ma motivation à apprendre et mon envie de me surpasser</p>
                    <a href="index.php#2">cliqué ici pour en savoir plus</a>
                </div>
                <div>
                    <img src="assets/img/robot1.png" class="vole" ref="heroimg">
                </div>
            </div>
        </section>
        <!-- End HERO -->

        <!-- ABOUT ME-->
        <section  class="pageremplie">
            <div id="container" >
                <h2>À mon sujet</h2>
                <p>Apprenez s'en plus sur moi</p>
            </div> 
            <div>
                <div id="row">
                    <div id="col">
                        <img src="assets/img/robot1.png" ref="aboutimg">
                    </div>
                    <div id="col">
                        <h3>Future développeur web</h>
                        <p>
                            
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
                        <h2>Formation de developpeur web</h2>
                        <p>
                            Cette formation me donne la possibilité d'appronfondir mes connaissances et d'apprendre un métier que je trouve formidable.
                            J'adore résoudre des problème et j'ai souvent besoin de m'isoler pour avancer dans mes projets. Ce travail corresponds au mode de vie 
                            que je veux avoir 
                        </p>

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