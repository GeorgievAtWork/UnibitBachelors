<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tutor_id'])) {
    require 'assets/partials/head.php';
    require 'assets/configs/pdo.php';
    $tutorID = $_POST['tutor_id'];
    $stmt = $pdo->query("SELECT first_name, last_name, description, avatar_path FROM tutors WHERE tutor_id=$tutorID");
    $row = $stmt->fetch();

    if (is_null($row['first_name'])) {
        header("Location: ./404.php");
    } else {
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
                        <h1 class="display-4"><?php echo $row['first_name'] . " " . $row['last_name'] ?></h1>
                        <p class="lead">В тази категория може да намерите информация за един от нашите преподаватели - "<?php echo $row['first_name'] . " " . $row['last_name'] ?>"</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container tutor-container">
            <div class="row">
                <?php
                $stmt = $pdo->query("SELECT * from tutors WHERE tutor_id=$tutorID");

                while ($row = $stmt->fetch()) { ?>

                    <div class="col-xl-6 avatar-holder">
                        <img src="<?php echo $row['avatar_path'] ?>">
                    </div>
                    <div class="col-xl-6 info-holder">
                        <table>
                            <tr>
                                <td class="to-right">Име:</td>
                                <td><i><?php echo $row['first_name'] ?></i></td>
                            </tr>
                            <tr>
                                <td class="to-right">Фамилия:</td>
                                <td><i><?php echo $row['last_name'] ?></i></td>
                            </tr>
                            <tr>
                                <td class="to-right">Възраст:</td>
                                <td><i><?php echo $row['age'] ?></i></td>
                            </tr>
                            <tr>
                                <td class="to-right">Град:</td>
                                <td><i><?php echo $row['location'] ?></i></td>
                            </tr>
                            <tr>
                                <td class="to-right">Описание:</td>
                                <td><i><?php echo $row['description'] ?></i></td>
                            </tr>
                        </table>
                    </div>
                <?php } ?>
            </div>
        </section>

<?php
        require 'assets/partials/footer.php';
    }
} else {
    header("Location: ./404.php");
}

?>