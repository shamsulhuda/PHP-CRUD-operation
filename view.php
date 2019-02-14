<?php 
require_once('Database/config.php');
include "inc/header.php";
?>

<?php 

    $readData = "SELECT * FROM `crud`";

    $res = mysqli_query($connection, $readData);
?>

<div class="container">
    <h2 class="text-center">View Table</h2>
    <div class="row">
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $i = 1;
            while($r = mysqli_fetch_assoc($res)){
          
        ?>
            <tr>
                <th scope="row"><?php echo $i++;?></th>
                <td><?php echo $r['first_name'];?></td>
                <td><?php echo $r['email_id'];?></td>
                <td><?php echo $r['age'];?></td>
                <td><?php echo $r['gender'];?></td>
                <td>
                    <span><a href="edit.php?id=<?php echo $r['id'];?>">Edit</a></span> |


                    <!-- Modal -->
                    <div class="modal fade" id="myModal<?php echo $r['id']; ?>" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Delete File</h4>
                            </div>
                            <div class="modal-body">
                            <p>Are you sure?</p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <a href="delete.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-danger"> Yes..! Delete</button></a>
                            </div>
                        </div>
                        
                        </div>
                    </div>

                    
                    <span><a href="delete.php?id=<?php echo $r['id'];?>">Delete</a></span>
                </td>
            </tr>

            <?php }?>
        </tbody>
        
    </table>

    </div>
</div>











<?php include "inc/footer.php"; ?>