<style>
    footer {

        bottom: 0;
        width: 1690px;
    }
</style>
<div class="container ms-0 me-0 p-0 mt-5">
    <section class="mb-5">
        <div id="carouselExampleIndicators" class="carousel slide" style="width:107rem;" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="public/theme/img/walp2.png" class="d-block w-100" alt="WALL">
                </div>
                <div class="carousel-item">
                    <img src="public/theme/img/walp1.jpg" class=" w-100" alt="WALL">
                </div>
                <div class="carousel-item">
                    <img src="public/theme/img/walp2.png" class="d-block w-100" alt="WALL">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>





    <div class="fav d-grid">



        <div class="card border-white border-info bg-secondary mb-3 ms-auto mt-5 ms-5" style="max-width: 40rem;">
            <div class="card-body text-white ">
                <h5 class="card-title"> Most favourite mobiles in our shop right now waiting just for you! 🡻
                </h5>
            </div>
        </div>






        <div class="container mb-5 mt-5 ms-5 ">
            <div class="row ms-5 ">
                <?php
                if (!empty($randProd)) {
                    foreach ($randProd as $singleRandomProduct) {  ?>
                        <div class="card col-4 m-3 ms-auto text-center" style="width: 25rem;">
                            <img class="card-img-top" src="<?php echo $singleRandomProduct['img'];  ?>" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title"><?php echo ($singleRandomProduct['title']);  ?></p>
                                <a href="./single.php?page=<?php echo  $singleRandomProduct['id'] ?>" class="btn btn-primary btn-lg">Show product</a>
                            </div>
                        </div>
                <?php }
                } ?>



            </div>



        </div>







    </div>



</div>