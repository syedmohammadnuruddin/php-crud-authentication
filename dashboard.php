<?php session_start(); ?>
<?php include 'doc_start.php'; ?>
<?php include 'header.php'; ?>
<?php include 'core/User.php'; ?>
<?php include 'core/Question.php'; ?>
<?php
if(!isset($_SESSION['user_id'])){
    header("location:login.php");
}
$user = new User();
$question = new Question();
?>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Dashboard</h3>
            <?php
                if(isset($_POST['submit'])){
                    $title = $_POST['title'];
                    $details = $_POST['details'];
                    $question->createQuestion($title, $details, $_SESSION['user_id']);
                }
            ?>
            <form action="" method="POST" class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title"><br>
                <textarea name="details" id="qdetails" cols="30" rows="10" class="form-control" placeholder="Write your question here"></textarea><br>
                <input type="submit" value="Post Question" name="submit" class="btn btn-success btn-block">
            </form>
        </div>
    </div>
</div>
<br>
<br>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'#qdetails'});</script>
<?php include 'footer.php'; ?>
<?php include 'doc_end.php'; ?>