<?php
include("../common/header.php");
include("../config/function.php");

$surveys = getOneSeminarSurvey($conn, $_GET['id']);
$sections = $surveys['sections'];

?>
<style>
    body {
        background-color: #F5F5F5 !important;
    }

    .maindiv {
        width: 1024px;
    }

    @media screen and (max-width: 600px) {
        .maindiv {
            width: 100%;
            padding: 0 10px;
        }
    }
</style>
<div class="d-flex justify-content-center p-2 py-5">
    <div class="maindiv bg-white  shadow-sm">
        <div class="p-3  border-bottom text-center">
            <h3><?= $surveys['title'] ?></h3>
        </div>
        <div class="">
            <?php
            foreach ($sections as $key => $section) {
            ?>
                <div class="p-3 bg-dark text-white">
                    <h4><?= $section['title']  ?></h4>
                </div>
                <div class="p-3 d-flex flex-column" style="gap: 10px">
                    <?php
                    foreach ($section['questions'] as $key => $question) {
                    ?>
                        <div class="d-flex" style="gap: 12px">
                            <span><?= $key + 1 ?>.) </span>
                            <div class="">
                                <span><?= $question['question'] ?></span>
                                <div class="pt-2">
                                    <?php
                                    foreach ($question['choices'] as $key => $choice) {
                                    ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="choices<?= $section['id'] . $question['id'] ?>" id="choices<?= $question['id'] . $choice['id']  ?>">
                                            <label class="form-check-label" for="choices<?= $question['id'] . $choice['id']  ?>">
                                                <?= $choice['choice_content'] ?> <?= $question['id'] . $choice['id']  ?>
                                            </label>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>


                    <?php

                    }

                    ?>


                </div>
            <?php
            }
            ?>


        </div>
    </div>
</div>


<?php
include("../common/footer.php");
?>