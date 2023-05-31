<?php include "pages/template-parts/head.php" ?>

<section>
    <h1 class="text-center text-danger my-5">All Students Here</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead class="bg-danger text-white">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Date of Birth</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($students->students as $value) { ?>
                        <tr>
                            <th scope="row"><?php echo $value['id'] ?></th>
                            <td><?php echo $value['name'] ?></td>
                            <td><?php echo $value['class'] ?></td>
                            <td><?php echo $value['mobile'] ?></td>
                            <td><?php echo $value['dob'] ?></td>
                        </tr>
                        <?php } ?>                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include "pages/template-parts/footer.php" ?>