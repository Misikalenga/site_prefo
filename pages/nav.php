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
<!-- nav -->
            
        <nav  class="navbar">            
            <a href="index.php"  ><h5 class="iconemenu" >MisiDev</h5></a>
            <div class="menu">
                <ul class="boutonmenu">
                    <li ><a href="?pg=exposition" class="<?php if($activeExpo == true){echo "active";}else{echo "bouton";}?>" >Exposition</a></li>
                    <li ><a href="?pg=interview" class="<?php if($activeInter == true){echo "active";}else{echo "bouton";}?>" >Interview</a></li>
                    <li ><a href="?pg=galerie" class="<?php if($activeGaler == true){echo "active";}else{echo "bouton";}?>" >Galerie</a></li>
                    <li ><a href="?pg=conclusion" class="<?php if($activeConclu == true){echo "active";}else{echo"bouton";}?>" >Conclusion</a></li>
                    <li ><a href="?pg=contact" class="<?php if($activeCont == true){echo "active";}else{echo "bouton";}?>" >Conctact</a></li>
                </ul>
            </div>
        </nav>
<!-- End nav -->
