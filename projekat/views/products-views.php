<main>
  <div class="everything">

    <div class="card bg-secondary ">
      <div class="card-body  d-flex justify-content-between mx-auto" style="width: 84rem;  height: 5rem;">

        <!-- SORT -->
        <form action="./all-products.php" method="get" style="width: 14rem;  height: 3rem;" class=" d-flex">
          <select class="form-select form-select-sm me-3 " aria-label=".form-select-sm example" name="sort">
            <option <?php if ($sort == "") {
                      echo htmlspecialchars("Selected");
                    } ?> value="">Select sorting</option>
            <option <?php if ($sort == ORDER_BY_PRICE_ASC) {
                      echo htmlspecialchars("Selected");
                    } ?> value="<?php echo htmlspecialchars(ORDER_BY_PRICE_ASC); ?>">By price asc</option>
            <option <?php if ($sort == ORDER_BY_PRICE_DESC) {
                      echo htmlspecialchars("Selected");
                    } ?> value="<?php echo htmlspecialchars(ORDER_BY_PRICE_DESC); ?>">By price desc</option>
          </select>
          <button type="submit" class="btn btn-light ml-1 mb-2 mt-1">OK</button>
        </form>
        <br>
        <br>

        <!-- SEARCH -->
        <form class="d-flex" role="search" method="get" action="./all-products.php">
          <input class="form-control me-2 border-white ms-auto" type="search" name="search" style="width: 31rem" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-white border-white text-white ms-auto ml-0" type="submit">Search</button>
        </form>
      </div>

    </div>







    <div class="container mb-5 mt-5">
      <div class="row ">
        <?php foreach ($allProducts as $singleProduct) {  ?>
          <div class="card col-4 m-3 mx-auto" style="width: 22rem;">
            <img class="card-img-top" src="<?php echo $singleProduct['img'];  ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $singleProduct['title'];  ?></h5>
              <p class="card-text"><em><?php echo $singleProduct['description'];  ?></em></p>
              <p class="card-price"><?php echo $singleProduct['price']  . " din";  ?></p>
              <a href="./single.php?page=<?php echo $singleProduct['id'] ?>" class="btn btn-secondary text-white ms-2 me-4" style=" height: 3.5rem;">See product</a>
              <button form="add-to-cart-<?php echo $singleProduct['id']; ?>" class="btn btn-secondary text-white ms-3" name="cart" style=" height: 3.5rem;">Get in cart</button>
              <form id="add-to-cart-<?php echo $singleProduct['id']; ?>" method="post" action="./all-products.php">
                <input type="hidden" name="product_id" value="<?php echo $singleProduct['id']; ?>">
              </form>
            </div>
          </div>
        <?php } ?>
      </div>

    </div>

</main>