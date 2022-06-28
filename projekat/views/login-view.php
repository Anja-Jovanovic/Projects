<style>
  main {
    padding-top: 30px;
  }

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

  <div class="d-flex container  mb-5" style="width: 30rem; height: 23rem">

    <form class=" mx-auto p-3 mt-2 mb-2 border border-light rounded" method="post" action="login.php" style="width: 50rem">


      <div class="form-group col-md-14 text-black mb-3 mt-2">
        <label for="inputEmail"><b>Email</b></label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">

      </div>




      <div class="form-group col-md-14 text-black mb-5">
        <label for="inputNumber"><b>Password</b></label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">

      </div>



      <div class="second">

        <div class="form-group col-2 mx-auto  ">
          <input type="submit" name="login" class="rounded btn btn-secondary text-white btn-lg mb-3" value="Log in"> </input>
        </div>
      </div>
  </div>
  </form>
  </div>



</main>