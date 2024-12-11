<!DOCTYPE html>
<html lang="fr">
    <head>    
        <title>Contact</title>
        <meta charset="UTF-8"/>
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

            <section  class="pageremplie">
                <div class=article>

                </div>
                <div class=article>
                    <img src="assets/img/robot404.png" class="vole" ref="expobibli">   
                    <div>
                        <h2>Erreur 404! Page introuvable</h2>
                        <p>
                            Il semble que la page que vous cherchez soit introuvable.
                            <br/> 
                            Nous vous invitons à revenir à la page d'accueil et à poursuivre votre navigation. 
                            Si le problème persiste, n'hésitez pas à nous contacter pour obtenir de l'aide. 
                            <br/> 
                            Merci de votre compréhension et désolé pour le désagrément.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Footer --> 
            <?php 
                include 'footer.php';
            ?>
            <!-- End Footer --> 
    </body>
</html>