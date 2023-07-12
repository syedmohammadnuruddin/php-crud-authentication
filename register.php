<?php include 'doc_start.php'; ?>
<?php include 'header.php'; ?>
<?php include 'core/User.php'; ?>
<?php
$user = new User();
?>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Registration</h3>
            <?php
            if(isset($_POST['submit'])){
            if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
                $dataArray = [$_POST['username'], $_POST['email'], md5($_POST['password']),];
                $user->saveUser($dataArray);
                echo "Register success";
            }else{
                echo "All fields are required";
            }
            }
            ?>
            <form action="" method="POST" class="form-group">
                <input class="form-control" type="text" name="username" placeholder="Username"><br>
                <input class="form-control" type="text" name="email" placeholder="Email"><br>
                <input class="form-control" type="password" name="password" placeholder="Password"><br>
                <input class="btn btn-success btn-block" type="submit" name="submit">
            </form>
        </div>
    </div>
</div>
<br>
<br>
<?php include 'footer.php'; ?>
<?php include 'doc_end.php'; ?>