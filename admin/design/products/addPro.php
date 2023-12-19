
<form method="post" action="functions/proAdd.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="text" name="price" value="" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">sale</label>
    <input type="text" name="sale" value="" class="form-control" id="exampleInputEmail1">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="img" value="" class="form-control" id="exampleInputEmail1">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">category</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1">
    <?php
    require_once 'functions/connect.php';
    $sel_cat="SELECT * FROM category";
    $query = $conn -> query($sel_cat);
    foreach($query as $category){
    
    ?>
    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
    <?php } ?>
    </select>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          
            
           

            </div>
        </div>