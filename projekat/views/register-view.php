<style>
  label {
    font-size: 20px;
  }

  input {
    height: 50px;
  }

  form {
    background-color: white;
  }

  footer {

    bottom: 0;
    width: 1700px;
  }
</style>





<main>
  <div class="container ms-0 me-0 p-0" style="height: 45rem;">

    <form class=" mx-auto p-3 me-5 mt-2 mb-5  border border-light rounded" method="post" action="./register.php" style="width: 50rem;">



      <div class="form-group col-md-14 text-black mb-3">
        <label for="inputAddress"><b>Name</b></label>
        <input type="text" class="form-control" id="inputName" placeholder="John" name="name">
        <?php echo $alert_name; ?>
      </div>



      <div class="form-group col-md-14 text-black mb-3">
        <label for="inputAddress"><b>Last name</b></label>
        <input type="text" class="form-control" id="inputLastName" placeholder="Doe" name="last_name">
        <?php echo $alert_lname; ?>
      </div>



      <div class="form-group col-md-14 text-black mb-3">
        <label for="inputEmail"><b>Email</b></label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
        <?php echo $alert_email; ?>
      </div>

      <div class="form-group col-md-14 text-black mb-5">
        <label for="inputNumber"><b>Password</b></label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
        <?php echo $alert_pass; ?>
      </div>

      <div class="form-group col-2 mx-auto  ">
        <input type="submit" name="submit" class="rounded btn btn-secondary text-white btn-lg mb-3" value="Register "> </input>
      </div>


    </form>
  </div>
</main>