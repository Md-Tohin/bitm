<?php

    // if (5 > 1) {
    //    echo "true";
    // } else {
    //    echo "false";
    // }


    echo 5 == 1 ? "true" : "false"; 

    // if(isset($_GET['submit_btn'])){
    //     echo $_GET['name'];
    //     echo "<br>";
    //     echo $_GET['email'];  
    // }

?>

<section class="form-section">
    <form action="" method="">
        <label for="name">Name: </label><br>
        <input type="text" name="name" id="name" placeholder="Enter name"><br><br>

        <label for="email">Email: </label><br>
        <input type="email" name="email" id="email" placeholder="Enter email"><br><br>

        <input type="submit" name="submit_btn" id="submit_btn" value="Submit"><br><br>
    </form>
</section>

<style>
    .form-section{
        height: 300px;
        width: 500px;
        background: #faf1d9;
        padding: 80px 150px;
        box-sizing: border-box;
        margin: 100px auto;
        /* transform: translate(50%, 50%); */
    }
</style>