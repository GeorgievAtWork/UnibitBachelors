<?php
require 'assets/partials/head.php';
require 'assets/configs/pdo.php';
?>

<a href="#home" class="scrollToTopBtn"><i class="fa fa-long-arrow-up "></i></a>
<section id="home" class="container-fluid background">
    <nav class="navbar navbar-expand-md navbar-dark ">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#categories">Категории</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tutors">Преподаватели</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="#"><img src='assets/images/logo.png' width="150" height="150" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">За нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacts">Контакти</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container pushdown left-text-cont">
            <h1 class="display-4">Добре дошли в Expansio</h1>
            <p class="lead">Какво искате да научите днес?</p>
        </div>
    </div>
    <div class="row ">
        <div class="col-sm-12 see-more">
            <a href="#about">Вижте повече <i class="fas fa-angle-double-down"></i> </a>
        </div>
    </div>
</section>

<section id="about" class="container-fluid section-container about-container">
    <div class="row title-holder">
        <div class="col-md-12">
            <h2 class="title" data-aos="fade-down" data-aos-duration="750" data-aos-delay="150">Защо Expansio?</h2>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-md-12 ">
                <p class="about-text" data-aos="fade-up" data-aos-duration="750" data-aos-delay="150">
                    Expansio е онлайн платформа за обучение. Специалното на платформата е, че не са нужни регистрация или каквито и да е потребителски данни.
                    Всеки може да се възползва от съдържанието, предлагано напълно безплатно от преподаватели в областта. В случай, че сте преподавател, който желае да представя своите курсове в нашата платформа, моля свържете се с посредством предоставените контакти.
                    Видеоуроците са подредени по категории, като сайта не съдържа допълнителни страници, което го прави лек и бърз.
                    Потребителят само трябва да избере категория и видеоурок и да натисне бутона "Play".
                    Информацията за преподавателите, както и страница с данни за тях могат да се достъпят също лесно, като това става от секцията "Преподаватели" или директно от хипервръзката под съответния им видеоурок.
                    Мотото на Expansio е: "Безплатно, навсякъде, по всяко време, без допълнителни обвързвания".
                </p>
            </div>
        </div>

        <div class="row img-container">
            <div class="col-md-4">
                <img src="assets/images/about-1.png" alt="image1" class="oval-img right" id="oval-img-1" data-aos="fade-right" data-aos-duration="1000" />
                <span class="caption" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000" data-aos-anchor="#oval-img-1">Искаш да научиш нещо ново?</span>
            </div>
            <div class="col-md-4">
                <img src="assets/images/about-2.png" class="oval-img" id="oval-img-2" alt="image2" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150" width="300" height="300" />
                <span class="caption" data-aos="fade-up" data-aos-delay="750" data-aos-duration="750" data-aos-anchor="#oval-img-2">Избери от категориите в сайта и започни да учиш с видеоуроци</span>
            </div>
            <div class="col-md-4">
                <img src="assets/images/about-3.png" alt="image3" class="oval-img left wider" id="oval-img-3" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="300" />
                <span class="caption" data-aos="fade-left" data-aos-delay="900" data-aos-duration="750" data-aos-anchor="#oval-img-3">Придобий нови знания</span>
            </div>
        </div>
    </div>
</section>

<section id="categories" class="container-fluid section-container categories-container">
    <div class="row title-holder">
        <div class="col-md-12">
            <h2 class="title white" data-aos="fade-down">Категории</h2>
        </div>
    </div>
    <div class="container">
        <form id="category-form" action="category.php" method="POST">
            <div class="row categories-holder">
                <?php
                $stmt = $pdo->query("SELECT * FROM subjects");
                while ($row = $stmt->fetch()) { ?>
                    <div class="col-sm-4 category-box" data-aos="fade-up">
                        <a href="#" type="submit" onclick="redirectCategory(<?php echo $row['subject_id'] ?>)">
                            <img src="<?php echo $row['image_path'] ?>" class="img-holder" />
                            <?php echo $row['subject_name'] ?></a>
                    </div>
                <?php } ?>
            </div>
        </form>
    </div>
</section>

<section id="tutors" class="container-fluid section-container tutors-container">
    <div class="row title-holder">
        <div class="col-md-12">
            <h2 class="title" data-aos="fade-down">Преподаватели</h2>
        </div>
        </row>
        <form class="container" id="tutor-form" action="tutor.php" method="POST">
            <div class="row tutors-holder">
                <?php
                $stmt = $pdo->query("SELECT * FROM tutors");
                while ($row = $stmt->fetch()) {
                ?>
                    <div class="col-xl-4 tutor-box" data-aos="fade-up">
                        <a href="#" type="submit" onclick="redirectTutor(<?php echo $row['tutor_id'] ?>)">
                            <img src="<?php echo $row['avatar_path'] ?>" class="img-holder" />
                            <span class="name-holder"><?php echo $row['first_name'] . " " . $row['last_name'] ?></span>
                            <p><?php echo $row['description'] ?></p>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </form>
    </div>
</section>

<section id="contacts" class="container-fluid section-container contacts-container">
    <div class="row title-holder">
        <div class="col-md-12">
            <h2 class="title" data-aos="fade-down" data-aos-delay="100">Контакти</h2>
        </div>


        <div class="container content-holder">
            <div class="row contacts-holder">
                <div class="col-xl-3 location-data" data-aos="fade-right" data-aos-delay="200">
                    <h4>Адрес</h4>
                    <p>България, София, ж.к. Lorem Ipsum, улица Ipsum Lorem №: 2</p>

                    <h4>Телефон</h4>
                    <p>0888888888</p>

                    <h4> Email </h4>
                    <p>lorem.ipsum@lipsum.com</p>
                </div>
                <div class="col-xl-1 offset-xl-1"></div>
                <div class="col-xl-7 location-data" data-aos="fade-left" data-aos-delay="300">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Sofia%20bulgaria&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <p class="trademark">Създадено от Георги Георгиев - 46156р, като част от практическата разработка за дипломна работа<br /> Ниво - Бакалавър</p>

</section>

<?php
require 'assets/partials/footer.php';
?>