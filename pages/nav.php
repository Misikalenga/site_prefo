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
            
        <nav id="navbar" class="navbar">            
            <a href="index.php" class="iconemenu" >MisiDev</a></li>
            <div class="menu">
                <ul class="boutonmenu">
                    <li ><a href="?pg=exposition" class="<?php if($activeExpo == true){echo "active";}?>" >Exposition</a></li>
                    <li ><a href="?pg=interview" class="<?php if($activeInter == true){echo "active";}?>" >Interview</a></li>
                    <li ><a href="?pg=galerie" class="<?php if($activeGaler == true){echo "active";}?>" >Galerie</a></li>
                    <li ><a href="?pg=conclusion" class="<?php if($activeConclu == true){echo "active";}?>" >Conclusion</a></li>
                    <li ><a href="?pg=contact" class="<?php if($activeCont == true){echo "active";}?>" >Conctact</a></li>
                </ul>
            </div>
        </nav>
<!-- End nav -->
