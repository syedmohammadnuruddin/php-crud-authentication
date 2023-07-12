<?php
class Question extends Database{
    public function createQuestion($title, $question, $user_id){
        $currentDateTime = date('Y-m-d H:i:s');
        $sql = "INSERT INTO questions (title, details, user_id, created_at) values ('$title', '$question', '$user_id','$currentDateTime')";
        $this->dataSave($sql);
    }
}
?>