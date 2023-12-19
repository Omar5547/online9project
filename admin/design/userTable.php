<a class="btn btn-info" href="?action=add">Add user</a>
            <br>
            <br>

            <table class= "table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th> username</th>
                        <th>address</th>
                        <th>phone</th>
                        <th>email</th>
                        <th>privliges</th>
                        <th>gender</th>
                        <th>Controls</th>
                    </tr>
              </thead>
                <tbody>
                    <?php
                    require_once 'functions/connect.php';
                    $select_users = "SELECT * FROM users";
                    $query = $conn -> query ($select_users);
                    $id=0;
                    foreach($query as $user){

                   
                    ?>
                    <tr>
                        <td><?= ++$id ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['address'] ?></td>
                        <td><?= $user['phone'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['priv'] == 0 ?'Admin' :'User' ?></td>
                        <td><?php
                        if($user['gender'] ==0){
                            echo "Male";
                        } else {
                            echo"female";
                        }
                       
                        ?>  </td>
                        <td>
                            <a  class ="btn btn-primary"href="?action=edit&id=<?= $user['id']?>">Edit</a>
                            <!-- <a  class ="btn btn-danger"href="Delete">Delete</a> -->
                            <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?php echo $user['id']?>">
Delete
</button>

<!-- Modal -->
<div class="modal fade" id="<?php echo $user['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        are you sure to delete user :<?= $user['username']?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a  class="btn btn-danger"href="functions/userDelete.php?id=<?= $user['id']?>">confirm</a>
      </div>
    </div>
  </div>
</div>

                        </td>
                    </tr>
             <?php   } ?>
                </tbody>
            </table>