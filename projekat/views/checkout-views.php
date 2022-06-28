<style>
  label {
    font-size: 20px;
  }

  input {
    height: 50px;
  }

  footer {
    bottom: 0;
    width: 1700px;
  }
</style>



<main>

  <div class="d-flex container " style="width: 70rem; height: 80rem">

    <form class=" mx-auto p-3 mt-2 mb-2" method="post" action="./checkout.php" style="width: 50rem">



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




      <div class="form-group col-md-14 text-black mb-3">
        <label for="inputNumber"><b>Number</b></label>
        <input type="number" class="form-control" id="inputNumber" placeholder="Number" name="number">
        <?php echo $alert_phone; ?>
      </div>



      <div class="form-group col-md-14 text-black mb-3">
        <label for="inputAddress"><b>Address</b></label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
        <?php echo $alert_phone; ?>
      </div>
      <div class="cityAndZip d-flex justify-content-between">
        <div class="form-row">

          <div class="d-grid">
            <div class="CityAndZip d-flex">

              <div class="form-group col-md-7 text-black mb-3">
                <label for="inputCity"><b>City</b></label>
                <input type="text" class="form-control" id="inputCity" name="city">
                <?php echo $alert_city; ?>
              </div>



              <div class="form-group col-md-7 ms-2 text-black mb-3">
                <label for="inputZip"><b>Zip</b></label>
                <input type="text" class="form-control" id="inputZip" name="zip">
                <?php echo $alert_zip; ?>
              </div>
            </div>

          </div>

          <div class="second">

            <div class="form-group  mt-3 mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label text-black" for="gridCheck">
                  <b> Do you agree with terms and conditions?</b>
                </label>
              </div>
            </div>

            <div class="form-group col-2 mx-auto  ">
              <input type="submit" name="submit" href="tnx.php" class="rounded btn btn-secondary border-white text-white btn-lg mb-3 "> </input>
            </div>
            <?php echo $alert1; ?>

          </div>
        </div>
    </form>
  </div>








</main>