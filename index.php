<?php
include("common/header.php");
include("config/function.php");

include("questionnaire.php");

$divisions = getDivisions($mysqli);

$services = getServices($conn, 'physical');

?>
<form method="POST" action="process/index.php" id="mainform">
  <input type="hidden" value="physical" name="type">
  <div class="container">
    <div class="card">
      <div class="card-body">
        <!-- <div class="d-flex justify-content-between">
        <h4>Control No: ______</h4>
        <div class="alert alert-light border h6" role="alert">
          ANTI-RED TAPE AUTHORITY <br>
          CLIENT SATISFACTORY MEASUREMENT <br>
          FORM <br>
          PSA Approval No: ARTA-2242-3
        </div>
      </div> -->
        <center>
          <img src="assets/img/logo.png" height="20%" width="20%" alt="DA-BAR">
          <h5 class="fw-bold">HELP US SERVE YOU BETTER!</h5>
        </center>
        <div class="card p-3">
          <div class="card-body">
            <div class="row g-2">
              <div class="col-md-3">
                <div class="form-floating">
                  <input type="date" class="form-control" id="dateSurvey" placeholder="Select Date" name="dateSurvey" disabled>
                  <label for="dateSurvey">Date</label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-floating">
                  <select class="form-select" id="selectClientType" aria-label="" name="clientType">
                    <option disabled selected>Please Select</option>
                    <option value="Citizen">Citizen</option>
                    <option value="Business">Business</option>
                    <option value="Government">Government</option>
                  </select>
                  <label for="selectClientType">Client Type</label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-floating">
                  <select class="form-select" id="selectGender" aria-label="" name="gender">
                    <option disabled selected>Please Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                  <label for="selectGender">Sex</label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-floating">
                  <select class="form-select" id="selectAge" aria-label="" name="age">
                    <option disabled selected>Please Select</option>
                    <option value="1">18 to 24</option>
                    <option value="2">25 to 39</option>
                    <option value="3">40 to 60</option>
                    <option value="4">61 and above</option>
                  </select>
                  <label for="selectAge">Age</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <select class="form-select" id="division" aria-label="" name="division">
                    <option disabled selected>Please select a division </option>

                    <?php

                    foreach ($divisions as $key => $row) {

                    ?>
                      <option value="<?= $row['divisionID'] ?>"><?= $row['division'] ?></option>
                    <?php

                    }
                    ?>
                  </select>
                  <label for="division">Division</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <select class="form-select" id="section_unit" aria-label="" name="section_unit" disabled>

                  </select>
                  <label for="section_unit">Section/Unit</label>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-floating">
                  <select class="form-select" id="selectResidence" aria-label="" name="region">
                    <option disabled selected>Please Select</option>
                    <option value="NCR">NCR - National Capital Region</option>
                    <option value="CAR">CAR - Cordillera Administrative Region</option>
                    <option value="Region I">Region I - Ilocos Region</option>
                    <option value="Region II">Region II - Cagayan Valley</option>
                    <option value="Region III">Region III - Central Luzon</option>
                    <option value="Region IV-A">Region IV-A - CALABARZON</option>
                    <option value="Region IV-B">Region IV-B - MIMAROPA</option>
                    <option value="Region V">Region V - Bicol Region</option>
                    <option value="Region VI">Region VI - Western Visayas</option>
                    <option value="Region VII">Region VII - Central Visayas</option>
                    <option value="Region VIII">Region VIII - Eastern Visayas</option>
                    <option value="Region IX">Region IX - Zamboanga Peninsula</option>
                    <option value="Region X">Region X - Northern Mindanao</option>
                    <option value="Region XI">Region XI - Davao Region</option>
                    <option value="Region XII">Region XII - SOCCSKSARGEN</option>
                    <option value="Region XIII">Region XIII - CARAGA</option>
                    <option value="BARMM">BARMM - Bangsamoro Autonomous Region in Muslim Mindanao</option>
                  </select>
                  <label for="selectResidence">Region of residence</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-floating">
                  <select class="form-select" id="selectService" aria-label="" name="service" disabled>
                  </select>
                  <label for="selectService">Service Availed</label>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-body">
              <div class="row mt-1">
                <div class="col-md-12">
                  <h6>INSTRUCTIONS: <span class="fw-bold">Check Mark (✔)</span> your answer to the Citizen's Charter (CC) questions. The Citizen's Charter is an official document that reflects the services of a government agency/office including its requirements, fees, and processing times among others.</h6>
                </div>
              </div>
              <div class="row mt-1">
                <div class="col-md-12">
                  <!-- CC1 -->
                  <div class="form-floating mb-4">
                    <div class="d-flex">
                      <div style="width: 64px">CC1</div>
                      <div class="form-floating">
                        Which of the following best describes your awareness of a CC?
                      </div>
                    </div>
                    <div class="d-flex mt-2">
                      <div style="width: 64px"></div>
                      <div class="">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cc1" id="cc1-1" value="1">
                          <label class="form-check-label" for="cc1-1">
                            1. I know what a CC is and I saw this office's CC.
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cc1" id="cc1-2" value="2">
                          <label class="form-check-label" for="cc1-2">
                            2. I know what a CC is but I did NOT see this office's CC.
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cc1" id="cc1-3" value="3">
                          <label class="form-check-label" for="cc1-3">
                            3. I learned of the CC only when I saw this office's CC.
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cc1" id="cc1-4" value="4" onclick="check(this.id)">
                          <label class="form-check-label" for="cc1-4">
                            4. I do not know what a CC is and I did not see one in this office. (Answer 'N/A' on CC2 and CC3)
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- CC2 -->
                  <div class="form-floating mb-4">
                    <div class="d-flex">
                      <div style="width: 64px">CC2</div>
                      <div>
                        If aware of CC (answered 1-3 in CC1), would you say that the CC of this office was...?
                      </div>
                    </div>
                    <div class="d-flex mt-2">
                      <div style="width: 64px"></div>
                      <div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cc2" id="cc2-1" value="1">
                          <label class="form-check-label" for="cc2-1">
                            1. Easy to see
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cc2" id="cc2-2" value="2">
                          <label class="form-check-label" for="cc2-2">
                            2. Somewhat easy to see
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cc2" id="cc2-3" value="3">
                          <label class="form-check-label" for="cc2-3">
                            3. Difficult to see
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cc2" id="cc2-4" value="4">
                          <label class="form-check-label" for="cc2-4">
                            4. Not visible at all
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cc2" id="cc2-5" value="5">
                          <label class="form-check-label" for="cc2-5">
                            5. N/A
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- CC3 -->
                  <div class="form-floating">
                    <div class="d-flex">
                      <div style="width: 64px">CC3</div>
                      <div>
                        If aware of CC (answered 1-3 in CC1), how much did the CC help you in your transaction?
                      </div>
                    </div>
                    <div class="d-flex mt-2">
                      <div style="width: 64px"></div>
                      <div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cc3" id="cc3-1" value="1">
                          <label class="form-check-label" for="cc3-1">
                            1. Helped very much
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cc3" id="cc3-2" value="2">
                          <label class="form-check-label" for="cc3-2">
                            2. Somewhat helped
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cc3" id="cc3-3" value="3">
                          <label class="form-check-label" for="cc3-3">
                            3. Did not help
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cc3" id="cc3-4" value="4">
                          <label class="form-check-label" for="cc3-4">
                            4. N/A
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-body">
              <div class="row mt-1">
                <div class="col-md-12">
                  <h6>INSTRUCTIONS: <br>
                    For SQD 0-8, please put a <span class="fw-bold">check mark (✔)</span> on the column that best corresponds to your answer.</h6>
                </div>
              </div>
              <div class="row mt-1">
                <div class="col-md-12">
                  <table class="table table-bordered table-condensed table-stripped">
                    <thead>
                      <tr>
                        <td></td>
                        <td class="fw-bold align-middle">
                          <center><small>Strongly Disagree</small></center>
                        </td>
                        <td class="fw-bold align-middle">
                          <center><small>Disagree</small></center>
                        </td>
                        <td class="fw-bold align-middle">
                          <center><small>Neither Agree nor Disagree</small></center>
                        </td>
                        <td class="fw-bold align-middle">
                          <center><small>Agree</small></center>
                        </td>
                        <td class="fw-bold align-middle">
                          <center><small>Strongly Agree</small></center>
                        </td>
                        <td class="fw-bold align-middle">
                          <center><small>Not Applicable</small></center>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($physical as $key => $row) {
                      ?>
                        <tr class="form-floating">
                          <td width="30%" class="titleerror"><b><?= $row['name'] ?>.</b> <?= $row['question'] ?></td>
                          <td class="align-middle">
                            <input type="radio" class="btn-check" name="sqd<?= $key ?>" id="sqd<?= $key ?>-1" value="1" autocomplete="off">
                            <label class="btn" for="sqd<?= $key ?>-1"><img src="assets/img/1.png" alt="" height="40%" width="40%"></label>
                          </td>
                          <td class="align-middle">
                            <input type="radio" class="btn-check" name="sqd<?= $key ?>" id="sqd<?= $key ?>-2" value="2" autocomplete="off">
                            <label class="btn" for="sqd<?= $key ?>-2"><img src="assets/img/2.png" alt="" height="40%" width="40%"></label>
                          </td>
                          <td class="align-middle">
                            <input type="radio" class="btn-check" name="sqd<?= $key ?>" id="sqd<?= $key ?>-3" value="3" autocomplete="off">
                            <label class="btn" for="sqd<?= $key ?>-3"><img src="assets/img/3.png" alt="" height="40%" width="40%"></label>
                          </td>
                          <td class="align-middle">
                            <input type="radio" class="btn-check" name="sqd<?= $key ?>" id="sqd<?= $key ?>-4" value="4" autocomplete="off">
                            <label class="btn" for="sqd<?= $key ?>-4"><img src="assets/img/4.png" alt="" height="45%" width="45%"></label>
                          </td>
                          <td class="align-middle">
                            <input type="radio" class="btn-check" name="sqd<?= $key ?>" id="sqd<?= $key ?>-5" value="5" autocomplete="off">
                            <label class="btn" for="sqd<?= $key ?>-5"><img src="assets/img/5.png" alt="" height="40%" width="40%"></label>
                          </td>
                          <td class="align-middle">
                            <input type="radio" class="btn-check" name="sqd<?= $key ?>" id="sqd<?= $key ?>-6" value="6" autocomplete="off">
                            <label class="btn" for="sqd<?= $key ?>-6">
                              <h3 class="mb-0">N/A</h3>
                            </label>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="form-floating">
            <textarea class="form-control" name="remarks" placeholder="Leave a remarks here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Remarks (optional):</label>
          </div>
          <br>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success btn-lg" id="submitform">SUBMIT</button>
          </div>
        </div>
      </div>

    </div>
</form>
<br>
<br>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

<script type="text/javascript">
  $('#mainform').validate({
    errorElement: 'div',
    errorPlacement: function(error, element) {
      error.addClass('invalid-feedback');

      if (element.attr("name").includes("sqd")) {
        error.insertAfter(element.parent().parent());
        element.closest('.form-floating').find('.titleerror').append(error);
      } else {
        element.closest('.form-floating').append(error);
      }
    },
    rules: {
      clientType: {
        required: true
      },
      gender: {
        required: true
      },
      age: {
        required: true
      },
      division: {
        required: true
      },
      section_unit: {
        required: true
      },
      region: {
        required: true
      },
      service: {
        required: true
      },
      cc1: {
        required: true
      },
      cc2: {
        required: true
      },
      cc3: {
        required: true
      },
      sqd0: {
        required: true
      },
      sqd1: {
        required: true
      },
      sqd2: {
        required: true
      },
      sqd3: {
        required: true
      },
      sqd4: {
        required: true
      },
      sqd5: {
        required: true
      },
      sqd6: {
        required: true
      },
      sqd7: {
        required: true
      },
      sqd8: {
        required: true
      },

    },
    messages: {
      clientType: {
        required: "Client type is required"
      },
      gender: {
        required: "Gender is required"
      },
      age: {
        required: "Age is required"
      },
      division: {
        required: "Division is required"
      },
      section_unit: {
        required: "Section/Unit is required"
      },
      region: {
        required: "Region is required"
      },
      service: {
        required: "Service is required"
      },
      cc1: {
        required: "CC1 is required"
      },
      cc2: {
        required: "CC2 is required"
      },
      cc3: {
        required: "CC3 is required"
      },
      sqd0: {
        required: "SQD0 is required"
      },
      sqd1: {
        required: "SQD1 is required"
      },
      sqd2: {
        required: "SQD2 is required"
      },
      sqd3: {
        required: "SQD3 is required"
      },
      sqd4: {
        required: "SQD4 is required"
      },
      sqd5: {
        required: "SQD5 is required"
      },
      sqd6: {
        required: "SQD6 is required"
      },
      sqd7: {
        required: "SQD7 is required"
      },
      sqd8: {
        required: "SQD8 is required"
      },


    }
  })
</script>
<script type="text/javascript">
  $('#division').change(function() {

    var divisionID = $(this).val();
    $.ajax({
      url: "process/divisionSelect.php",
      method: "POST",
      data: {
        division: divisionID
      },
      success: function(data) {
        if (data) {

          $('#section_unit').html(data);
          $('#section_unit').removeAttr('disabled');
        } else {
          $('#section_unit').html('<option value="" disabled selected>No Section Found</option>');
          $('#section_unit').attr('disabled', 'disabled');
        }

      }
    });
  });

  $('#section_unit').change(function() {

    var section = $(this).val();
    $.ajax({
      url: "process/serviceSelect.php",
      method: "POST",
      data: {
        section_unit: section,
        type: 'physical'
      },
      success: function(data) {
        console.log(data);

        if (data) {

          $('#selectService').html(data);
          $('#selectService').removeAttr('disabled');
          $('#submitform').removeAttr('disabled');
        } else {
          $('#selectService').html('<option value="" disabled selected>No Service Found</option>');
          $('#selectService').attr('disabled', 'disabled');
          $('#submitform').attr('disabled', 'disabled');
        }

      }
    });

  })


  //set date to #dateSurvey to today date

  document.getElementById('dateSurvey').valueAsDate = new Date();

  // Get the radio buttons for choice 1
  const choice1Option1 = document.getElementById('cc1-1');
  const choice1Option2 = document.getElementById('cc1-2');
  const choice1Option3 = document.getElementById('cc1-3');
  const choice1Option4 = document.getElementById('cc1-4');

  // Get the radio buttons for choice 2
  const choice2Option5 = document.getElementById('cc2-5');

  // Get the radio buttons for choice 3
  const choice3Option4 = document.getElementById('cc3-4');

  // Add event listeners to the choice 1 radios
  choice1Option1.addEventListener('change', function() {
    // Enable a specific radio button in choice 2 and choice 3 when option 1 is selected
    if (choice1Option1.checked) {
      choice2Option5.checked = false;
      choice3Option4.checked = false;
      choice2Option5.disabled = true;
      choice3Option4.disabled = true;
    }
  });

  // Add event listeners to the choice 2 radios
  choice1Option2.addEventListener('change', function() {
    // Enable a specific radio button in choice 2 and choice 3 when option 2 is selected
    if (choice1Option2.checked) {
      choice2Option5.checked = false;
      choice3Option4.checked = false;
      choice2Option5.disabled = true;
      choice3Option4.disabled = true;
    }
  });

  // Add event listeners to the choice 3 radios
  choice1Option3.addEventListener('change', function() {
    // Enable a specific radio button in choice 2 and choice 3 when option 3 is selected
    if (choice1Option3.checked) {
      choice2Option5.checked = false;
      choice3Option4.checked = false;
      choice2Option5.disabled = true;
      choice3Option4.disabled = true;
    }
  });

  // Add event listeners to the choice 4 radios
  choice1Option4.addEventListener('change', function() {
    // Disable a specific radio button in choice 2 and choice 3 when option 1 is selected
    if (choice1Option4.checked) {
      choice2Option5.checked = true;
      choice3Option4.checked = true;
      choice2Option5.disabled = false;
      choice3Option4.disabled = false;
    }
  });
</script>



<?php include("common/footer.php"); ?>