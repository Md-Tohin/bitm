<?php include "pages/template-parts/head.php" ?>

<section>
    <h1 class="text-center text-danger my-5">Featured Product</h1>
    <div class="container">
        <div class="row">
            <?php foreach($products->products as $key => $value) { ?>
                
                <div class="col-md-3">
                    <div class="card">
                        <img src="<?php echo $value['img']; ?>" style="width: 100%; height: 180px;" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['title']; ?></h5>
                            <p class="card-text"><?php echo $value['short_desc'] ?></p>
                            <a href="?page=details&img=<?php echo $value['img'];?>&title=<?php echo $value['title']; ?>&lg_desc=<?php echo $value['long_desc']; ?>" class="btn btn-success">View Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "pages/template-parts/footer.php" ?>

