<?php
include("common/header.php");
?>
<style>
    body {
        background-color: #f5f5f5;
    }
</style>
<div class="p-5 bg-white rounded-3 shadow-sm">
    <div class="d-flex flex-column align-items-center" style="gap: 10px">
        <i class="fa-solid fa-circle-check fa-4x text-success"></i>

        <span class="fw-bold" style="font-size: 20px">
            Thank you for completing the survey!
        </span>
    </div>

    <p class="text-center" style="font-size: 20px">
        You may now close this window.
    </p>
    <br>
    <div class="row g-2">
        <div class="col-md-6">
            <a href="https://bar.gov.ph" class="btn btn-outline-secondary w-100">Go to BAR Website</a>
        </div>
        <div class="col-md-6">
            <a href="" class="btn btn-success w-100">
                New Response
            </a>
        </div>
    </div>
</div>

<?php include("common/footer.php"); ?>