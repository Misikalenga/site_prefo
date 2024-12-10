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

<script>
    function burgerActive() {
        let burger = document.querySelector(".menuburger");
        let boutonOn = document.querySelector(".burgerOn");
        let boutonOff = document.querySelector(".burgerOff");
        if (burger.style.display === 'none' || burger.style.display === ''){
            burger.style.display = 'list-item';
            boutonOff.style.display = 'flex';
            boutonOn.style.display = 'none';
        } else {
            burger.style.display = 'none';
            boutonOff.style.display = 'none';
            boutonOn.style.display = 'flex';
        }
    }
</script>
<!-- nav -->
            
        <nav  class="navbar">
            <!-- bouton burger -->
            <div class="stopburger">
                <div class="burgerOn" onclick="burgerActive()">
                    <img src="../public/assets/img/menu2.png" >
                </div>
                <div class="burgerOff" onclick="burgerActive()">
                    <img src="../public/assets/img/fermer2.png" >
                </div>
            </div>
            <!-- End bouton burger -->            
            <a href="index.php"  ><h5 class="iconemenu" >MisiDev</h5></a>
            <div class="menu">
                <ul class="boutonmenu">
                    <li ><a href="?pg=exposition" class="<?php if($activeExpo == true){echo "active";}else{echo "bouton";}?>" ><strong>Exposition</strong></a></li>
                    <li ><a href="?pg=interview" class="<?php if($activeInter == true){echo "active";}else{echo "bouton";}?>" ><strong>Interview</strong></a></li>
                    <li ><a href="?pg=galerie" class="<?php if($activeGaler == true){echo "active";}else{echo "bouton";}?>" ><strong>Galerie</strong></a></li>
                    <li ><a href="?pg=conclusion" class="<?php if($activeConclu == true){echo "active";}else{echo"bouton";}?>" ><strong>Conclusion</strong></a></li>
                    <li ><a href="?pg=contact" class="<?php if($activeCont == true){echo "active";}else{echo "bouton";}?>" ><strong>Conctact</strong></a></li>
                </ul>
            </div>
            </nav>

            <!-- menu burger -->
            <ul class="menuburger">
                <li ><a href="?pg=exposition" class="<?php if($activeExpo == true){echo "active";}else{echo "bouton";}?>" ><strong>Exposition</strong></a></li>
                <li ><a href="?pg=interview" class="<?php if($activeInter == true){echo "active";}else{echo "bouton";}?>" ><strong>Interview</strong></a></li>
                <li ><a href="?pg=galerie" class="<?php if($activeGaler == true){echo "active";}else{echo "bouton";}?>" ><strong>Galerie</strong></a></li>
                <li ><a href="?pg=conclusion" class="<?php if($activeConclu == true){echo "active";}else{echo"bouton";}?>" ><strong>Conclusion</strong></a></li>
                <li ><a href="?pg=contact" class="<?php if($activeCont == true){echo "active";}else{echo "bouton";}?>" ><strong>Conctact</strong></a></li>
            </ul>
            <!-- End menu burger -->

<!-- End nav -->
