
<?php
require_once 'functions/connect.php';
$id = $_GET['id'];
$selectUser="SELECT * FROM users WHERE id = '$id' ";
$query =$conn  -> query($selectUser);
$user = $query -> fetch_assoc();
?>
<form method="post" action="functions/userEdit.php">
  <div class="form-group">
    <input type="hidden" name="id" value="<?=$user['id']?>">
    <label for="exampleInputEmail1">username</label>
    <input type="text" name="username" value="<?= $user['username']?>" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputInputEmail1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="EditPassword">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="email" value="<?= $user['email']?>" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">phone</label>
    <input type="text" name="phone" value="<?= $user['phone']?>" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="0" <?= $user['gender']== 0 ? 'checked' : '' ?>>
    <label class="form-check-label" for="inlineRadio1">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" <?= $user['gender']== 1 ? 'checked' : '' ?>>
    <label class="form-check-label" for="inlineRadio2">Female</label>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" value="<?= $user['address']?>" class="form-control" id="exampleInputEmail1">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">privliges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
    <option value="0"<?= $user['priv']== 0 ? 'selected' : '' ?>> Admin</option>
    <option value="1"<?= $user['priv']== 1 ? 'selected' : '' ?>>User</option>
    </select>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          
            
           

            </div>
        </div>