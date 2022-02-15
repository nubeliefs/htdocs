
<body>

  <div class="container-fluid" id="space">

    <div class="row">
      <div class="col-sm-2"></div>

      <div class="col-sm-8">
        <br>
        <h1 class="display-2">Contact Us</h1>
        <p class="lead text-justify">
          You can write us onto our email address for more suggestion and ideas.
          Click on the below button to view email address.
        </p>
        <br>
        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal">
          View Email
        </button>
        <p> </p>
        <p> </p>
        <p> </p>
        <p> </p>
        <p> </p>
        <div class="small">
        <strong>Warning!</strong> Please don't spam over mailbox!
        </div>
        <br>
        <h1 class="display-6">Or, send us your details!</h1>
        <p class="lead">
          Please fill the below form, so that we can get in touch with you!
        </p>
        
        <p>
          
            <form action="" class="was-validated" method="POST">
    <div class="mb-3 mt-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Firstname Lastname" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out your firstname and lastname</div>
    </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
  <div class="valid-feedback">Valid.</div>
  <div class="invalid-feedback">Please fill out your email address</div>
  </div>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
  <textarea class="form-control" name="comments" id="exampleFormControlTextarea1" placeholder="Drop your comments for any suggestion / queries or leave this field empty" rows="3"></textarea>
  </div>

  <button type="submit" name="submit" class="btn btn-outline-dark">Submit</button>
  </form>

        </p>


        <!-- Insert message-->

    <?php
      session_start();

      // Echo session variables that were set on previous page
     
      if (strcmp($_SESSION["Result"], "SUCCESS") !== 0) {
       
    }
    else {
        echo '<div class="alert alert-success" role="alert">
        Your details have been saved successfully!
      </div>';
    }

    ?>

        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Email Address</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <address>
                  <strong>nubeliefs.com</strong><br>
                  <a href="mailto:#">non.universal.beliefs@gmail.com</a>
                </address>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>

    </div>
  </div>
</body>



