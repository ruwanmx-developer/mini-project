<!DOCTYPE html>
<html>

<?php 
$page = 'home';
include('components/header.php')
?>

<body class="antialiased">
    <div class="container-fluid mt-3">
    <?php  include('components/navigation.php') ?>
    </div>
    <div class="container-fluid mt-3">
        <div class="hero-wrap">
            <div class="row">
                <div class="col-6 content">
                    <div>
                        <h1 class="">Responsive left-aligned hero with image</h1>
                        <p class="">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                            world’s most popular front-end open source toolkit, featuring Sass variables and mixins,
                            responsive
                            grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                        <div class="">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-primary">Default</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <img src="../img/img-1.png" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
            </div>

        </div>
    </div>

</body>

</html>