<main>
  <div class="card bg-secondary ">
    <div class="card-body   d-flex justify-content-between mx-auto" style="width: 84rem;  height: 5rem;">
      <div class="btn-group" role="group" aria-label="Basic outlined example">
        <a class="btn btn-outline-light text-light mt-1" href="./single.php?page=<?php echo htmlspecialchars(getPrevProductId($singleProduct['id'])); ?>">PREV</a>
        <a class="btn btn-outline-light text-light mt-1" href="./single.php?page=<?php echo htmlspecialchars(getNextProductId($singleProduct['id'])); ?>">NEXT</a>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row  ">

      <div class="card col-4 m-3 mx-auto pt-3" style="width: 32rem;">
        <img class="card-img-top" src="<?php echo $singleProduct['img'];  ?>" alt="Card image cap">
        <div class="card-body mx-auto text-center">
          <h5 class="card-title"><?php echo $singleProduct['title'];  ?></h5>
          <p class="card-text"><em><?php echo $singleProduct['description'];  ?></em></p>
          <p class="card-price"><?php echo $singleProduct['price'] . " din";  ?></p>
          <div class="input-group mb-3">


          </div>





          <a href="./checkout.php" class="btn btn-secondary text-white btn-lg">BUY</a>
        </div>
      </div>

    </div>




    <div class="row mb-2 ms-auto">

      <div class="card-deck d-flex mx-auto m-0  col-8"><?php
                                                        if (!empty($related)) {
                                                          foreach ($related as $singleRelatedProduct) {  ?>
            <div class="card me-5 mb-2 pt-2" style="width: 32rem;">
              <img class="card-img-top" src="<?php echo $singleRelatedProduct['img'];  ?>" alt="Card image cap">
              <div class="card-body">
                <p class="card-title"><?php echo $singleRelatedProduct['title'];  ?></p>
                <a href="./single.php?page=<?php echo $singleRelatedProduct['id'] ?>" class="btn btn-secondary text-white  btn-sm">Show product</a>
              </div>
            </div>
        <?php }
                                                        } ?>
      </div>


    </div>


</main>