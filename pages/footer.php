<?php

    $activeExpo = false;
    $activeInter = false;
    $activeGaler = false;
    $activeConclu = false;
    $activeCont = false;
    if (isset($_GET['pg'])){
        if ($_GET['pg'] == 'exposition'){
            $activeExpo = true;
 
        }
        else if($_GET['pg'] == 'interview'){
            $activeInter = true;
 
        }
        else if($_GET['pg'] == 'galerie'){
            $activeGaler = true;
 
        }
        else if($_GET['pg'] == 'conclusion'){
            $activeConclu = true;
 
        }
        else if($_GET['pg'] == 'contact'){
            $activeCont = true;
 
        }

    }
?>
<!-- footer -->
            
        <footer class="footer">
            <div class="footertext">
                <a href="index.php"  ><h5 class="ficonemenu" >MisiDev</h5></a>
                <p class="pfooter">
                    Mon projet est en plein développement. 
                    Revenez souvent pour découvrir les avancées et les nouveautés ce site est en constante évolution. Merci de faire partie de cette aventure !
                </p>
            </div>
            <div class="liens">
                <h4>liens</h4>
                <hr/>
                <div class="menufooter">

                        <ul class="listfooter">
                            <li ><a href="?pg=exposition" class="<?php if($activeExpo == true){echo "factive";}else{echo "fbouton";}?>" >Exposition</a></li>
                            <li ><a href="?pg=interview" class="<?php if($activeInter == true){echo "factive";}else{echo "fbouton";}?>" >Interview</a></li>
                            <li ><a href="?pg=conclusion" class="<?php if($activeConclu == true){echo "factive";}else{echo"fbouton";}?>" >Conclusion</a></li>
                        </ul>

                        <ul class="listfooter">
                            <li ><a href="?pg=galerie" class="<?php if($activeGaler == true){echo "factive";}else{echo "fbouton";}?>" >Galerie</a></li>                    
                            <li ><a href="?pg=contact" class="<?php if($activeCont == true){echo "factive";}else{echo "fbouton";}?>" >Conctact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </footer>
        <div class="copyright">
            <p >Copyright &copy; 2024 MisiDev. All Rights Reserved.</p>
        </div>
<!-- End footer -->
