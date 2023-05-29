<?php include "pages/includes/header.php" ?>

<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <h1 class="text-center pb-5">Featured Product</h1>
        </div>
        <div class="row">
            <?php foreach ($blogs->blogs as $key => $value) { ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $value['img'] ?>" style="width: 100%; height: 200px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['title'] ?></h5>
                            <p class="card-text"><?php echo $value['s_des'] ?></p>
                            <!-- <a href="?page=details?img=<?php echo $value['img'] ?>?s_des=<?php echo $value['s_des'] ?>?l_des=<?php echo $value['l_des'] ?>" class="btn btn-primary">Details</a> -->
                            <a href="?page=details" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "pages/includes/footer.php" ?>