<?php 
    if(isset($_POST['submit'])){
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        $email = $_POST['email'];
    }
?>
 <form action="" method="post">
    <input type="text" name="input" id="input" value="" placeholder="nama">
    <br><br>
    <input type="text" name="email" id="email" placeholder="email">
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <br><br>
    <?php 
    if(isset($_POST['submit']))
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Terverifikasi";
        }else{
            echo "Email tidak Terverifikasi";
        }
    ?>
</form>