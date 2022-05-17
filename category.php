<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['category_id'])) {
    require 'assets/partials/head.php';
    require 'assets/configs/pdo.php';
    $subjectID = $_POST['category_id'];
    $stmt = $pdo->query("SELECT subject_name FROM subjects WHERE subjects.subject_id=$subjectID");
    $row = $stmt->fetch()
?>

    <section class="container-fluid background-internal">


        <div class="container">
            <div class="row">
                <div class="col-md-12 logo-holder">
                    <a href="index.php"><img src="assets/images/logo.png" class="internal-logo"></a>
                </div>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <div class="internal-head">
                    <h1 class="display-4"><?php echo $row['subject_name'] ?></h1>
                    <p class="lead">В тази категория може да намерите обучителни видеоклипове на тема "<?php echo $row['subject_name'] ?>"</p>
                </div>
            </div>
        </div>

    </section>

    <section class="container video-container">

        <?php
        $stmt = $pdo->query("SELECT videos.video_title, videos.video_desc, videos.thumb_path, video_path ,tutors.tutor_id, tutors.first_name, tutors.last_name, subjects.subject_name FROM videos INNER JOIN subjects ON videos.subject_id=subjects.subject_id INNER JOIN tutors ON subjects.tutor_id=tutors.tutor_id WHERE videos.subject_id=$subjectID");
        $i = 1;
        while ($row = $stmt->fetch()) {
            if ($i == 1 || $i == 4) { ?>
                <div class="row">
                <?php
                $i = 1;
            }

            if ($i != 4) {
                $newRow = false;
                ?>
                    <div class="col-xl-4 video-holder">
                        <video id="my-video" class="video-js" controls preload="auto" poster="<?php echo $row['thumb_path'] ?>" data-setup="{}">
                            <source src="<?php echo $row['video_path'] ?>" type="video/mp4" />
                            <p class="vjs-no-js">
                                To view this video please enable JavaScript, and consider upgrading to a
                                web browser that
                                <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                            </p>
                        </video>
                        <h2><?php echo $row['video_title'] ?></h2>
                        <p><?php echo $row['video_desc'] ?></p>
                        <form id="tutor-form" action="tutor.php" method="POST"><span class="tutor-name">Преподавател: <a href="#" type="submit" onclick="redirectTutor(<?php echo $row['tutor_id'] ?>)"><?php echo $row['first_name'] . " " . $row['last_name'] ?></a></span></form>
                    </div>
                <?php
                $i++;
            }
            if ($i == 1 || $i == 4) { ?>
                </div>
        <?php
            }
        } ?>

        </div>
    </section>

<?php
    require 'assets/partials/footer.php';
} else {
    header("Location: ./404.php");
}
?>