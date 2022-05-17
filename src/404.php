<?php
require 'assets/partials/head.php';
?>

<section id="home" class="container-fluid background">
    <div class="jumbotron jumbotron-fluid">
        <div class="container pushdown left-text-cont">
            <h1 class="display-4">Упс, тази страница не съществува</h1>
            <p class="lead">Връщаме Ви към началната страница.</p>
            <?php
                header( "refresh:5;url=index.php" );
            ?>
        </div>
    </div>    
</section>

</body>
</html>