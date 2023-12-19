<a class="btn btn-info" href="?action=add">Add product</a>
            <br>
            <br>

            <table class= "table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th> name</th>
                        <th>price</th>
                        <th>sale</th>
                        <th>img</th>
                        <th>category</th>
                        <th>Controls</th>
                    </tr>
              </thead>
                <tbody>
                    <?php
                    require_once 'functions/connect.php';
                    $select_pro = "SELECT * FROM products";
                    $query = $conn -> query ($select_pro);
                    $id=0;
                    foreach($query as $product){

                   
                    ?>
                    <tr>
                        <td><?= ++$id ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['sale'] ?></td>
                        <td>
                          <?php $img ?>
                          <img style="width:50px; height:50px"; border-radius:50% src="images/<?= $product['img']?>"  alt ="no image" ></td>
                        <td><?php
                        $cat_id =  $product['cat_id'];
                        $select_cat ="SELECT name FROM category WHERE id =$cat_id";
                        $query = $conn -> query($select_cat) ;
                        $category = $query -> fetch_assoc();
                        echo $category ['name'];
                        
                        
                        
                        ?></td>
                       
                        <td>
                            <a  class ="btn btn-primary"href="?action=edit&id=<?= $product['id']?>">Edit</a>
                            <!-- <a  class ="btn btn-danger"href="Delete">Delete</a> -->
                            <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?php echo $product['id']?>">
Delete
</button>

<!-- Modal -->
<div class="modal fade" id="<?php echo $product['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        are you sure to delete user :<?= $product['username']?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a  class="btn btn-danger"href="functions/userDelete.php?id=<?= $product['id']?>">confirm</a>
      </div>
    </div>
  </div>
</div>

                        </td>
                    </tr>
             <?php   } ?>
                </tbody>
            </table>