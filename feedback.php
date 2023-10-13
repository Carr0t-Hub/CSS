<?php include("common/header.php"); ?>

<div class="container">
  <div class="card">
    <center>
      <img src="assets/img/logo.png" class="mt-3 rounded mx-auto d-block" height="20%" width="20%" 
    alt="DA-BAR">
    </center>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-12">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="fullName" placeholder="NAME">
            <label for="fullName">NAME</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-12">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="agency" placeholder="AGENCY">
            <label for="agency">AGENCY</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-12">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="address" placeholder="ADDRESS">
            <label for="address">ADDRESS</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-12">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" placeholder="username@gmail.com">
            <label for="email">EMAIL</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-12">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="contactNumber" placeholder="Contact Number">
            <label for="contactNumber">CONTACT NO.</label>
          </div>
        </div>
      </div>

      <!-- RESPONSIVENESS -->
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <div class="rating-slider">
              <div class="text">
                  <strong>Responsiveness</strong>
                  <ul>
                      <li>awful</li>
                      <li>bad</li>
                      <li>okay</li>
                      <li>good</li>
                      <li>great</li>
                  </ul>
              </div>
              <div class="smiley">
                  <svg class="eye left" viewBox="0 0 18 22">
                      <path d="M12.6744144,18.0128897 C17.3794842,15.6567898 19.3333811,9.83072065 17.0385652,5 C15.7595661,7.57089081 13.5517099,9.64170285 10.4149967,11.2124361 C7.27828344,12.7831694 3.80661788,13.5564215 0,13.5321925 C2.2948159,18.3629131 7.9693445,20.3689896 12.6744144,18.0128897 Z"></path>
                  </svg>
                  <svg class="eye right" viewBox="0 0 18 22">
                      <path d="M12.6744144,18.0128897 C17.3794842,15.6567898 19.3333811,9.83072065 17.0385652,5 C15.7595661,7.57089081 13.5517099,9.64170285 10.4149967,11.2124361 C7.27828344,12.7831694 3.80661788,13.5564215 0,13.5321925 C2.2948159,18.3629131 7.9693445,20.3689896 12.6744144,18.0128897 Z"></path>
                  </svg>
                  <svg class="mouth" viewBox="0 0 64 28">
                      <path d="M32,2 C41.5729357,2 58,10.8218206 58,21 C50.2396023,18.9643641 41.5729357,17.9465462 32,17.9465462 C22.4270643,17.9465462 13.7603977,18.9643641 6,21 C6,10.8218206 22.4270643,2 32,2 Z"></path>
                  </svg>
                  <svg class="teeth" viewBox="0 0 64 28">
                      <path d="M32,7.83261436 C41.5729357,7.83261436 52.5729357,7.05507624 63,1.5 C63,10.3056732 46.3594035,14.5 32,14.5 C17.6405965,14.5 1,10.3056732 1,1.5 C11.4270643,7.05507624 22.4270643,7.83261436 32,7.83261436 Z"></path>
                  </svg>
              </div>
              <div class="slide">
                  <svg viewBox="0 0 273 12" fill="currentColor"><path d="M266.934082,0.00110627889 C270.247182,-0.0357036686 272.96282,2.62025389 272.99963,5.93335351 C272.999877,5.95556942 273,5.97778653 273,6.00000382 C273,9.31330792 270.314036,11.9992716 267.000732,11.9992716 C266.978515,11.9992716 266.956298,11.9991482 266.934082,11.9989014 L2.96667078,9.06611103 C1.32291919,9.04784825 1.97412392e-14,7.71014921 0,6.06629617 L0,5.93371146 C9.7279267e-16,4.28985843 1.32291919,2.95215939 2.96667078,2.93389661 L266.934082,0.00110627889 Z M267,1.45028446 C264.514719,1.45028446 262.5,3.4872632 262.5,6.00000382 C262.5,8.51274443 264.514719,10.5497232 267,10.5497232 C269.485281,10.5497232 271.5,8.51274443 271.5,6.00000382 C271.5,3.4872632 269.485281,1.45028446 267,1.45028446 Z M210,1.95580884 C207.790861,1.95580884 206,3.7664566 206,6.00000382 C206,8.23355103 207.790861,10.0441988 210,10.0441988 C212.209139,10.0441988 214,8.23355103 214,6.00000382 C214,3.7664566 212.209139,1.95580884 210,1.95580884 Z M137,2.46133321 C135.067003,2.46133321 133.5,4.04565001 133.5,6.00000382 C133.5,7.95435763 135.067003,9.53867443 137,9.53867443 C138.932997,9.53867443 140.5,7.95435763 140.5,6.00000382 C140.5,4.04565001 138.932997,2.46133321 137,2.46133321 Z M64,2.96685758 C62.3431458,2.96685758 61,4.32484341 61,6.00000382 C61,7.67516423 62.3431458,9.03315005 64,9.03315005 C65.6568542,9.03315005 67,7.67516423 67,6.00000382 C67,4.32484341 65.6568542,2.96685758 64,2.96685758 Z M3,3.97790633 C1.8954305,3.97790633 1,4.88323021 1,6.00000382 C1,7.11677742 1.8954305,8.02210131 3,8.02210131 C4.1045695,8.02210131 5,7.11677742 5,6.00000382 C5,4.88323021 4.1045695,3.97790633 3,3.97790633 Z"></path></svg>
                  <span>
                      <svg viewBox="0 0 273 12" fill="currentColor"><path d="M266.934082,0.00110627889 C270.247182,-0.0357036686 272.96282,2.62025389 272.99963,5.93335351 C272.999877,5.95556942 273,5.97778653 273,6.00000382 C273,9.31330792 270.314036,11.9992716 267.000732,11.9992716 C266.978515,11.9992716 266.956298,11.9991482 266.934082,11.9989014 L2.96667078,9.06611103 C1.32291919,9.04784825 1.97412392e-14,7.71014921 0,6.06629617 L0,5.93371146 C9.7279267e-16,4.28985843 1.32291919,2.95215939 2.96667078,2.93389661 L266.934082,0.00110627889 Z M267,1.45028446 C264.514719,1.45028446 262.5,3.4872632 262.5,6.00000382 C262.5,8.51274443 264.514719,10.5497232 267,10.5497232 C269.485281,10.5497232 271.5,8.51274443 271.5,6.00000382 C271.5,3.4872632 269.485281,1.45028446 267,1.45028446 Z M210,1.95580884 C207.790861,1.95580884 206,3.7664566 206,6.00000382 C206,8.23355103 207.790861,10.0441988 210,10.0441988 C212.209139,10.0441988 214,8.23355103 214,6.00000382 C214,3.7664566 212.209139,1.95580884 210,1.95580884 Z M137,2.46133321 C135.067003,2.46133321 133.5,4.04565001 133.5,6.00000382 C133.5,7.95435763 135.067003,9.53867443 137,9.53867443 C138.932997,9.53867443 140.5,7.95435763 140.5,6.00000382 C140.5,4.04565001 138.932997,2.46133321 137,2.46133321 Z M64,2.96685758 C62.3431458,2.96685758 61,4.32484341 61,6.00000382 C61,7.67516423 62.3431458,9.03315005 64,9.03315005 C65.6568542,9.03315005 67,7.67516423 67,6.00000382 C67,4.32484341 65.6568542,2.96685758 64,2.96685758 Z M3,3.97790633 C1.8954305,3.97790633 1,4.88323021 1,6.00000382 C1,7.11677742 1.8954305,8.02210131 3,8.02210131 C4.1045695,8.02210131 5,7.11677742 5,6.00000382 C5,4.88323021 4.1045695,3.97790633 3,3.97790633 Z"></path></svg>
                  </span>
                  <div></div>
              </div>
          </div>

          <svg style="position: absolute; visibility: hidden;">
              <defs>
                  <filter id="inset-shadow">
                      <feOffset dx='0' dy='3' />
                      <feGaussianBlur stdDeviation='1' result='offset-blur' />
                      <feComposite operator='out' in='SourceGraphic' in2='offset-blur' result='inverse' />
                      <feFlood flood-color='black' flood-opacity='.5' result='color' />
                      <feComposite operator='in' in='color' in2='inverse' result='shadow' />
                      <feComposite operator='over' in='shadow' in2='SourceGraphic' />
                  </filter>
              </defs>
          </svg>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-lg btn-primary">Submit</button>
    </div>
  </div>

</div>

<?php include("common/footer.php"); ?>