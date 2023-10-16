<?php include("common/header.php"); ?>

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
      <div class="card">
        <div class="card-body">
          <div class="row mt-5">
            <div class="col-md-3">
              <div class="form-floating mb-3">
                <input type="date" class="form-control" id="dateSurvey" placeholder="Select Date">
                <label for="dateSurvey">Date</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating">
                <select class="form-select" id="selectClientType" aria-label="">
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
                <select class="form-select" id="selectGender" aria-label="">
                  <option disabled selected>Please Select</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <label for="selectGender">Sex</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating">
                <select class="form-select" id="selectAge" aria-label="">
                  <option disabled selected>Please Select</option>
                  <option value="18 to 24">18 to 24</option>
                  <option value="25 to 39">25 to 39</option>
                  <option value="40 to 60">40 to 60</option>
                  <option value="61 and above">61 and above</option>
                </select>
                <label for="selectAge">Age</label>
              </div>
            </div>
          </div>
          <div class="row mt-1">
            <div class="col-md-8">
              <div class="form-floating">
                <select class="form-select" id="selectResidence" aria-label="">
                  <option disabled selected>Please Select</option>
                  <option value="NCR - National Capital Region">NCR - National Capital Region</option>
                  <option value="CAR - Cordillera Administrative Region">CAR - Cordillera Administrative Region</option>
                  <option value="Region I - Ilocos Region">Region I - Ilocos Region</option>
                  <option value="Region II - Cagayan Valley">Region II - Cagayan Valley</option>
                  <option value="Region III - Central Luzon">Region III - Central Luzon</option>
                  <option value="Region IV-A - CALABARZON">Region IV-A - CALABARZON</option>
                  <option value="Region IV-B - MIMAROPA">Region IV-B - MIMAROPA</option>
                  <option value="Region V - Bicol Region">Region V - Bicol Region</option>
                  <option value="Region VI - Western Visayas">Region VI - Western Visayas</option>
                  <option value="Region VII - Central Visayas">Region VII - Central Visayas</option>
                  <option value="Region VIII - Eastern Visayas">Region VIII - Eastern Visayas</option>
                  <option value="Region IX - Zamboanga Peninsula">Region IX - Zamboanga Peninsula</option>
                  <option value="Region X - Northern Mindanao">Region X - Northern Mindanao</option>
                  <option value="Region XI - Davao Region">Region XI - Davao Region</option>
                  <option value="Region XII - SOCCSKSARGEN">Region XII - SOCCSKSARGEN</option>
                  <option value="Region XIII - CARAGA">Region XIII - CARAGA</option>
                  <option value="BARMM - Bangsamoro Autonomous Region in Muslim Mindanao">BARMM - Bangsamoro Autonomous Region in Muslim Mindanao</option>
                </select>
                <label for="selectResidence">Region of residence</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <select class="form-select" id="selectService" aria-label="">
                  <option disabled selected>Please Select</option>
                  <option value="DATA">DATA</option>
                  <option value="DATA">DATA</option>
                  <option value="DATA">DATA</option>
                </select>
                <label for="selectService">Service Availed</label>
              </div>
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
              <table class="table table-condensed">
                <tbody>
                  <!-- CC1 -->
                  <tr>
                    <td rowspan="2">CC1</td>
                    <td>Which of the following best describes your awareness of a CC?</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cc1" id="cc1-1" value="cc1-1">
                        <label class="form-check-label" for="cc1-1">
                          1. I know what a CC is and I saw this office's CC.
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cc1" id="cc1-2" value="cc1-2">
                        <label class="form-check-label" for="cc1-2">
                          2. I know what a CC is but I did NOT see this office's CC.
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cc1" id="cc1-3" value="cc1-3">
                        <label class="form-check-label" for="cc1-3">
                          3. I learned of the CC only when I saw this office's CC.
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cc1" id="cc1-4" value="cc1-4" onclick="check(this.id)">
                        <label class="form-check-label" for="cc1-4">
                          4. I do not know what a CC is and I did not see one in this office. (Answer 'N/A' on CC2 and CC3)
                        </label>
                      </div>
                    </td>
                  </tr>
                  <!-- CC2 -->
                  <tr>
                    <td rowspan="2">CC2</td>
                    <td>If aware of CC (answered 1-3 in CC1), would you say that the CC of this office was...?</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cc2" id="cc2-1" value="cc2-1">
                        <label class="form-check-label" for="cc2-1">
                          1. Easy to see
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cc2" id="cc2-2" value="cc2-2">
                        <label class="form-check-label" for="cc2-2">
                          2. Somewhat easy to see
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cc2" id="cc2-3" value="cc2-3">
                        <label class="form-check-label" for="cc2-3">
                          3. Difficult to see
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cc2" id="cc2-4" value="cc2-4">
                        <label class="form-check-label" for="cc2-4">
                          4. Not visible at all
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cc2" id="cc2-5" value="cc2-5">
                        <label class="form-check-label" for="cc2-5">
                          5. N/A
                        </label>
                      </div>
                    </td>
                  </tr>
                  <!-- CC3 -->
                  <tr>
                    <td rowspan="2">CC3</td>
                    <td>If aware of CC (answered 1-3 in CC1), how much did the CC help you in your transaction?</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cc3" id="cc3-1" value="cc3-1">
                        <label class="form-check-label" for="cc3-1">
                          1. Helped very much
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cc3" id="cc3-2" value="cc3-2">
                        <label class="form-check-label" for="cc3-2">
                          2. Somewhat helped
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cc3" id="cc3-3" value="cc3-3">
                        <label class="form-check-label" for="cc3-3">
                          3. Did not help
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="cc3" id="cc3-4" value="cc3-4">
                        <label class="form-check-label" for="cc3-4">
                          4. N/A
                        </label>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
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
                    <td class="fw-bold align-middle"><center><small>Strongly Disagree</small></center></td>
                    <td class="fw-bold align-middle"><center><small>Disagree</small></center></td>
                    <td class="fw-bold align-middle"><center><small>Neither Agree nor Disagree</small></center></td>
                    <td class="fw-bold align-middle"><center><small>Agree</small></center></td>
                    <td class="fw-bold align-middle"><center><small>Strongly Agree</small></center></td>
                    <td class="fw-bold align-middle"><center><small>Not Applicable</small></center></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="30%"><b>SQD0.</b> I am satisfied with the service that I availed.</td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd0-1" id="sqd0-1"><img src="assets/img/1.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd0-2" id="sqd0-2"><img src="assets/img/2.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd0-3" id="sqd0-3"><img src="assets/img/3.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd0-4" id="sqd0-4"><img src="assets/img/4.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd0-5" id="sqd0-5"><img src="assets/img/5.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd0-6" id="sqd0-6"><h3 class="mb-0">N/A</h3></button></center></td>
                  </tr>
                  <tr>
                    <td width="30%"><b>SQD1.</b> I spent a reasonable amount of time for my transaction.</td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd1-1" id="sqd1-1"><img src="assets/img/1.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd1-2" id="sqd1-2"><img src="assets/img/2.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd1-3" id="sqd1-3"><img src="assets/img/3.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd1-4" id="sqd1-4"><img src="assets/img/4.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd1-5" id="sqd1-5"><img src="assets/img/5.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd1-6" id="sqd1-6"><h3 class="mb-0">N/A</h3></button></center></td>
                  </tr>
                  <tr>
                    <td width="30%"><b>SQD2.</b> The officec followed the transation's requirements and steps based on the information provided.</td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd2-1" id="sqd2-1"><img src="assets/img/1.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd2-2" id="sqd2-2"><img src="assets/img/2.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd2-3" id="sqd2-3"><img src="assets/img/3.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd2-4" id="sqd2-4"><img src="assets/img/4.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd2-5" id="sqd2-5"><img src="assets/img/5.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd2-6" id="sqd2-6"><h3 class="mb-0">N/A</h3></button></center></td>
                  </tr>
                  <tr>
                    <td width="30%"><b>SQD3.</b> The steps (including payment) I needed to do for my transaction were easy and simple.</td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd3-1" id="sqd3-1"><img src="assets/img/1.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd3-2" id="sqd3-2"><img src="assets/img/2.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd3-3" id="sqd3-3"><img src="assets/img/3.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd3-4" id="sqd3-4"><img src="assets/img/4.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd3-5" id="sqd3-5"><img src="assets/img/5.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd3-6" id="sqd3-6"><h3 class="mb-0">N/A</h3></button></center></td>
                  </tr>
                  <tr>
                    <td width="30%"><b>SQD4.</b> I easily found information about my transaction from the office or its website.</td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd4-1" id="sqd4-1"><img src="assets/img/1.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd4-2" id="sqd4-2"><img src="assets/img/2.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd4-3" id="sqd4-3"><img src="assets/img/3.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd4-4" id="sqd4-4"><img src="assets/img/4.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd4-5" id="sqd4-5"><img src="assets/img/5.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd4-6" id="sqd4-6"><h3 class="mb-0">N/A</h3></button></center></td>
                  </tr>
                  <tr>
                    <td width="30%"><b>SQD5.</b> I paid a reasonable amount of fees for my transaction.</td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd5-1" id="sqd5-1"><img src="assets/img/1.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd5-2" id="sqd5-2"><img src="assets/img/2.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd5-3" id="sqd5-3"><img src="assets/img/3.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd5-4" id="sqd5-4"><img src="assets/img/4.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd5-5" id="sqd5-5"><img src="assets/img/5.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd5-6" id="sqd5-6"><h3 class="mb-0">N/A</h3></button></center></td>
                  </tr>
                  <tr>
                    <td width="30%"><b>SQD6.</b> I feel the office was fair to everyone, or <i>"walang palakasan"</i>, during my transaction.</td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd6-1" id="sqd6-1"><img src="assets/img/1.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd6-2" id="sqd6-2"><img src="assets/img/2.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd6-3" id="sqd6-3"><img src="assets/img/3.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd6-4" id="sqd6-4"><img src="assets/img/4.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd6-5" id="sqd6-5"><img src="assets/img/5.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd6-6" id="sqd6-6"><h3 class="mb-0">N/A</h3></button></center></td>
                  </tr>
                  <tr>
                    <td width="30%"><b>SQD7.</b> I was treated courteously by the staff, and (if asked for help) the staff was helpful.</td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd7-1" id="sqd7-1"><img src="assets/img/1.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd7-2" id="sqd7-2"><img src="assets/img/2.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd7-3" id="sqd7-3"><img src="assets/img/3.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd7-4" id="sqd7-4"><img src="assets/img/4.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd7-5" id="sqd7-5"><img src="assets/img/5.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd7-6" id="sqd7-6"><h3 class="mb-0">N/A</h3></button></center></td>
                  </tr>
                  <tr>
                    <td width="30%"><b>SQD8.</b> I got what I needed from the government office, or (if denied) denial of request was sufficiently explained to me.</td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd8-1" id="sqd8-1"><img src="assets/img/1.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd8-2" id="sqd8-2"><img src="assets/img/2.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd8-3" id="sqd8-3"><img src="assets/img/3.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd8-4" id="sqd8-4"><img src="assets/img/4.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd8-5" id="sqd8-5"><img src="assets/img/5.png" alt="" height="40%" width="40%"></button></center></td>
                    <td class="align-middle"><center><button class="btn border-none" name="sqd8-6" id="sqd8-6"><h3 class="mb-0">N/A</h3></button></center></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
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