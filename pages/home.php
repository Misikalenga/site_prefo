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
                    <h2>Futur développeur full stack</h2>
                    <p>Ce site de prefo à pour but de vous montrer ma motivation à apprendre et mon envie de me surpasser</p>

                </div>
                <div class="center">                      
                    <img src="assets/img/robothome.png" class="vole" ref="heroimg">
                </div>
            </div>
        </section>
        <!-- End HERO -->
        <!-- section-->
        <section>
        <div class="center">
                <div class="buleHome">
                    <div class="center">
                            <img src="assets/img/home/1.png" class="imgarticle" ref="expobibli">
                    </div>
                </div> 
            </div>
        <div class="center">
            <div class="buleH">
                <img src="assets/img/home/m4.png" class="imginterM" ref="interview">
                <h4>Pour moi, la programmation n'est pas seulement un choix de carrière!</h4>

            </div>
            <div class="buleMH">
                <img src="assets/img/home/8.png" class="imginter" ref="interview">
                <h4>c'est une passion qui m'anime chaque jour!!</h4>
            </div>
            </div>



        <section  class="bleu">
            <div class="center">
                <div>


                <div class="buleB"> 
                    <div class="center">
                        <img src="assets/img/home/3.png" class="imgarticle" ref="expobibli">
                    </div>
                    <div>
                <div class="buleIB">
                    <h4>
                        Chaque projet, chaque ligne de code, est une opportunité pour progresser 
                    </h4>
                </div> 
                </div> 
                </div>

                </div> 
            <div>
        </section>
            
            <div class="buleH">
                <img src="assets/img/home/m6.png" class="imginterM" ref="interview">
                <h4>La programmation est bien plus qu'une simple compétence pour moi!!</h4>

            </div>
            <div class="buleMH">
                <img src="assets/img/home/7.png" class="imginter" ref="interview">
                <h4>je veux transformer cette passion en résultats concrets!</h4>
            </div>
        </section>         
        <!-- End section-->
        <!-- Footer --> 
        <?php 
            include 'footer.php';
        ?>
        <!-- End Footer --> 
    </body>
</html>