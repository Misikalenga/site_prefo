<?php

    $active = false;
    if (isset($_GET['pg'])){
        if ($_GET['pg'] == 'conclusion'){
            $active = true;
            echo $active ;
        }
    }
?>
<!-- nav -->
            
            <nav id="navbar" class="navbar">
                <a  href="index.php"><h1>MisiDev</h1></a>
                <ul class="menu">
                    <li><a href="index.php#1"  >1</a></li>
                    <li><a href="index.php#2"  >2</a></li>
                    <li><a href="index.php#3"  >3</a></li>
                    <li></li>
                    <li>
                        <a><span>Menu+</span></a>
                        <ul>
                            <li><a href="?pg=exposition" class="exposition" target="_parent">Exposition</a></li>
                            <li><a href="?pg=interview" class="interview" target="_parent">Interview</a></li>
                            <li><a href="?pg=galerie" class="galerie" target="_parent">Galerie</a></li>
                            <li><a href="?pg=conclusion" class="<?php if($active == true){echo "active";}?>" >Conclusion</a></li>
                            <li><a href="?pg=contact" class="contact" target="_parent">Conctact</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
<!-- End nav -->
