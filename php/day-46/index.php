<?php 

// echo "<pre>";
// print_r($_POST); 
// print_r($_FILES); 

?>

<div class="">
    <div class="" style="border:1px solid gray; width: 350px; margin: 100px auto; background: yellowgreen">
        <form action="index.php" method="post" enctype="multipart/form-data" style="padding: 30px; padding-left: 90px">
            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name" placeholder="Enter name">
            <br><br>
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" id="email" placeholder="Enter email">
            <br><br>
            <label for="age">Age</label>
            <br>
            <input type="number" name="age" id="age" placeholder="Enter age">
            <br><br>
            <label for="image">Image</label>
            <br>
            <input type="file" name="image" id="image" placeholder="Enter image" multiple>
            <br><br>
            <label for="dob">Date of Birth</label>
            <br>
            <input type="date" name="dob" id="dob" placeholder="Enter dob">
            <br><br>

            <input type="submit" name="submit" value="Register" id="submit">

        </form>
    </div>
</div>