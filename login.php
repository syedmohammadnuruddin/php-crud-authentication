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
            <h3>Login</h3>
            <?php
            if(isset($_POST['submit'])){
                if(!empty($_POST['username']) && !empty($_POST['password'])){
                    $response = $user->loginCheck($_POST['username'], $_POST['password']);
                    
                    if(count($response)==1){
                        print_r($response);
                        session_start();

                        $_SESSION['user_id'] = $response[0]['id'];
                        $_SESSION['username'] = $response[0]['username'];
                        header('location: dashboard.php');

                    }else{
                        echo "Invalid Credentials";
                    }
                }
            }
            ?>
            <form action="" method="POST" class="form-group">
                <input class="form-control" type="text" name="username" placeholder="Username"><br>
                <input class="form-control" type="password" name="password" placeholder="Password"><br>
                <input class="btn btn-success btn-block" type="submit" name="submit">
            </form>
        </div>
    </div>
</div>
<br>
<?php include 'footer.php'; ?>
<?php include 'doc_end.php'; ?>