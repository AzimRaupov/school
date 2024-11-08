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
    .add{
        text-align: center;
    }
</style>
<form action="insert/insert.php" enctype="multipart/form-data" method="post">
 <div class="form-group">
  <label for="headr" class="form-label">Заголовак</label>
  <input type="text" class="form-control" name="headr" id="headr">
 </div>
 <div class="form-group">
  <label for="chick" class="form-label">цылка</label>
  <input type="text" class="form-control" id="chick" name="chick">
 </div>
<div class="form-group">
<label for="info" class="form-label">Информатсия</label>
<textarea name="info" id="info" rows="5" class="form-control"></textarea>
</div>
 <div class="form-group">
 <label for="image" class="form-label">Изображение</label>
 <input type="file" class="form-control" id="image" name="image">
 </div>
 <div class="form-group">
  <input type="checkbox" class="form-check-input" id="ublish" name="Publish">
  <label class="form-check-label" for="Publish">Опубликовать</label>
 </div>
 <div class="add">
 <button type="submit" class="btn btn-primary" name="add" >Добавить</button>
 </div>
</form>
<?php


// }

?>