<!DOCTYPE html>
<html lang="fr">
    <head>    
        <title>Galerie</title>
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

        <section  class="pageremplie">
        <script>
            let currentPhotoIndex = 0;
            const photos = ['assets/img/photo/photo (1).jpg','assets/img/photo/photo (2).jpg','assets/img/photo/photo (3).jpg',
                'assets/img/photo/photo (4).jpg', 'assets/img/photo/photo (5).jpg','assets/img/photo/photo (6).jpg','assets/img/photo/photo (7).jpg',
                'assets/img/photo/photo (8).jpg', 'assets/img/photo/photo (9).jpg','assets/img/photo/photo (10).jpg','assets/img/photo/photo (11).jpg',
                'assets/img/photo/photo (12).jpg', 'assets/img/photo/photo (13).jpg','assets/img/photo/photo (14).jpg'
            ]; 

            function showPhoto(index) {
                const photoElement = document.getElementById('photo');
                if (index >= 0 && index < photos.length) {
                photoElement.src = photos[index];
                }
            }      

            function previousPhoto() {
                currentPhotoIndex = (currentPhotoIndex - 1 + photos.length) % photos.length;
                showPhoto(currentPhotoIndex);
            }

            function nextPhoto() {
                currentPhotoIndex = (currentPhotoIndex + 1) % photos.length;
                showPhoto(currentPhotoIndex);
            }

            document.addEventListener('DOMContentLoaded', () => {
                showPhoto(currentPhotoIndex);
            });

        </script>
            <div class="imgsection">
                <div class="galerie">
                    <div> 
                        <img id="photo" src="photo1.jpg" alt="Photo"> 
                    </div> 
                    <div class="buttons">
                        <button onclick="previousPhoto()">◀</button> 
                        <button onclick="nextPhoto()">▶</button>
                    </div>
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