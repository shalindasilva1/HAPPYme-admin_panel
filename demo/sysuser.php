<!DOCTYPE html>
<html lang="en">
<?php include 'core/init.php'; ?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/navbars/system.php' ?>
<?php
function sysuser_data(){
  $query = mysql_query("SELECT `suid`,`user_name`,`password`,`created_time`,`created_by` from `systemuser`");
  echo '<div class="col-sm-9">
  <div class="row">
  <div class="col-sm-8">
  <div class="well">
  <h4 tyle="float:right">Update / Delete</h4>
  <p style="margin-bottom:10px;float:right" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-sm pull-right" data-title="Edit" data-toggle="modal" data-target="#add" >Add new user</button></p>
  <table class="table table-bordered" style="display: block; height: 310px; overflow: auto;">

  <thead>

  <th>User ID</th>
  <th>User Name</th>
  <th>Password</th>
  <th>Created Time</th>
  <th>Created By</th>


  <th colspan="2">Edit</th>
  </thead>
  <tbody>';
  while ($data =mysql_fetch_array($query)) {
    $suid = $data[0];
    $user_name = $data[1];
    $password =$data[2];
    $created_time = $data[3];
    $created_by = $data[4];
    echo "<tr>";
    echo"<td>
    {$suid}
    </td>";
    echo "<td>
    {$user_name}
    </td>";
    echo "<td>
    {$password}
    </td>";
    echo "<td>
    {$created_time}
    </td>";
    echo "<td>
    {$created_by}
    </td>";
    echo '<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button name="suid" value="'. $suid .'" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>

    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>';
    echo"</tr>";
  }
  echo"
  </table>
  </div>
  </div>
  </div>
  </div>
  </div>

  </div>
  </div>
  </div>";

}
sysuser_data();

?>


<!--add-->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Add New System User Detail</h4>
      </div>
      <form action="actionsysuser.php" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input class="form-control " type="text"  name="username" placeholder="User Name" required>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="createdby" placeholder="Created By" required>

          </div>
          <div class="form-group">
            <p>
              default password will be "password"
            </p>
          </div>
        </div>
        <div class="modal-footer ">
          <input type="submit" class="btn btn-warning btn-lg" style="width: 100%;"></input>

        </div>
        <input type="hidden" name="fno" value="1">
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>



<!--edit-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit System User Detail</h4>
      </div>
      <div class="modal-body">
        <form action="actionsysuser.php" method="post">
          <div class="form-group">

            <input class="form-control " name="username" type="text" placeholder="User Name">
          </div>
          <div class="form-group">
            <input class="form-control " name="password" type="text" placeholder="Password">

          </div>
          <div class="form-group">
            <input class="form-control " name="created_by" type="text" placeholder="Created By">

          </div>
        </div>
        <div class="modal-footer ">
          <input type="submit" class="btn btn-warning btn-lg" style="width: 100%;"></button>
        </div>
        <input type="hidden" name="fno" value="2">
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>



<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete This Record</h4>
      </div>
      <div class="modal-body">

        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

</div>
</body>
</html>
