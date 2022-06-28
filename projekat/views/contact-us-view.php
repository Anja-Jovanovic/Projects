<style>
  p {
    font-size: 30px;
    text-decoration: underline;
    color: white;
    font-weight: 500;
  }

  input[type=submit] {
    border: solid 2px white;
    color: black;
    font-weight: bold;
    width: 150px;
  }

  input[type=submit]:hover {
    background-color: paleturquoise;

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



<div class="container" style=" height: 40rem">
  <p class="text-center "> Here you can send us a message! We assure you we will try to answer fastes we can!</p>








  <form class="border border-light rounded mx-auto pt-5 mt-5" style="width: 40rem; height: 30rem">
    <div class="form-group row col-10 mx-auto mb-3 text-black">
      <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Email</b></label>
      <div class="col-sm-10">
        <input type="email" class="form-control mb-3" id="inputEmail3" placeholder="Email" required="required">
      </div>
    </div>
    <div class="form-group row col-10 mx-auto mb-3 text-black">
      <label for="inputPassword3" class="col-sm-2 col-form-label"><b>Password</b></label>
      <div class="col-sm-10">
        <input type="password" class="form-control mb-3" id="inputPassword3" placeholder="Password" required="required">
      </div>
    </div>

    <div class="form-group row col-10 mx-auto  ">
      <textarea rows="6" cols="50" class="rounded border-black mx-auto mb-3 mb-3" placeholder="Your message"></textarea>
      <input type="submit" name="submit" class="rounded btn btn-secondary text-white border-black mb-3 "> </input>
    </div>
  </form>
</div>