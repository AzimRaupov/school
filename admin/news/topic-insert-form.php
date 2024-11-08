<?php
session_start();
// if(isset($_SESSION["typeuser"]) && $_SESSION["typeuser"]==="admin"){
// require_once("../../config/connection.php");
require_once("config/headr.php");
require_once("config/nav.php");
?>
<style>
    form{
        width: 30%;
       margin-top: 5%;
       margin-left: 30%;
   
    }
  
</style>
<form action="insert/insert-topic.php" method="post">>
<div class="form-group">
  <label for="topic" class="form-label">Тема</label>
  <input type="text" class="form-control" id="topic" name="topic">
 </div>
 <div class="add">
 <button type="submit" class="btn btn-primary" name="add" >Добавить</button>
 </div>

</form>

<?php


//}

?>