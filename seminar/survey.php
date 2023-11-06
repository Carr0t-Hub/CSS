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
<br>
<center>
    <img src="../assets/img/logo.png" height="128px" alt="DA-BAR">
</center>
<form action="../process/submit_survey.php" method="POST">
    <div class="d-flex justify-content-center p-2 py-5 pt-4">

        <div class="maindiv">
            <div class="">
                <div class=" bg-white  shadow-sm rounded">

                    <input type="hidden" name="surveyID" value="<?= $surveys['id'] ?>">

                    <div class="p-3  border-bottom text-center">
                        <h3><?= $surveys['title'] ?></h3>
                    </div>

                    <div class="row p-3 g-2">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                        </div>

                    </div>

                    <div class="">
                        <?php
                        foreach ($sections as $key => $section) {
                        ?>
                            <div class="p-3 text-white" style="background: #006838">
                                <div style="font-size: 24px; font-weight: bold"><?= $section['title']  ?></div>
                            </div>
                            <div class="p-3 d-flex flex-column" style="gap: 10px">
                                <?php
                                foreach ($section['questions'] as $key => $question) {
                                ?>
                                    <div class="d-flex" style="gap: 12px">
                                        <span><?= $key + 1 ?>.) </span>
                                        <div class="w-100">
                                            <span><?= $question['question'] ?></span>
                                            <div class="pt-2 w-100">
                                                <?php
                                                if ($question['type'] == "multiple") {
                                                    foreach ($question['choices'] as $key => $choice) {
                                                ?>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="<?= $question['id'] ?>" id="q<?= $question['id'] . $choice['id']  ?>" value="<?= $choice['id'] ?>">
                                                            <label class="form-check-label" for="q<?= $question['id'] . $choice['id']  ?>">
                                                                <?= $choice['choice_content'] ?>
                                                            </label>
                                                        </div>
                                                    <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <div class="">
                                                        <textarea class="form-control w-100" name="<?= $question['id'] ?>" rows="2"></textarea>
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
            <br>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">SUBMIT</button>
            </div>
        </div>

    </div>
</form>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    // $(document).ready(function() {
    //     $("form").submit(function(e) {
    //         e.preventDefault();
    //         var data = $(this).serialize();

    //         $.ajax({
    //             type: "POST",
    //             url: "../config/submit_survey.php",
    //             data: data,
    //             success: function(data) {
    //                 console.log(data);
    //                 if (data == "success") {
    //                     alert("Survey Submitted!");
    //                     window.location.href = "../index.php";
    //                 } else {
    //                     alert("Error Submitting Survey!");
    //                 }
    //             }
    //         });
    //     });
    // });
</script>

<?php
include("../common/footer.php");
?>