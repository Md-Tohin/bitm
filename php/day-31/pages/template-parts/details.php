<?php include "pages/template-parts/head.php" ?>

<section>
    <h1 class="text-center text-danger my-5">Featured Product</h1>
    <div class="container">
        <div class="row">  
            <div class="col-md-12">
                <div class="card">
                    <img src="<?php echo $_GET['img'] ?>" style="width: 100%; height: 400px;" class="card-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_GET['title'] ?></h5>
                        <p class="card-text"><?php echo $_GET['lg_desc'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "pages/template-parts/footer.php" ?>