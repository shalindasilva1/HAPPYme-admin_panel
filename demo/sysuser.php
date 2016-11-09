<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<?php include 'includes/navbars/system.php' ?>
<div class="col-sm-9">
  <div class="row">
    <div class="col-sm-8">
      <div class="well">
        <h4>Update / Delete</h4>
        <table class="table table-bordered" style="display: block; height: 310px; overflow: auto;">

          <thead>

            <th>User ID</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Created Time</th>
            <th>Created By</th>


            <th colspan="2">Edit</th>
          </thead>
          <tbody>

              <tr>

                <td>Mohsin</td>
                <td>Irshad</td>
                <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                <td>isometric.mohsin@gmail.com</td>
                <td>+923335586757</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>

              <tr>

                <td>Mohsin</td>
                <td>Irshad</td>
                <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                <td>isometric.mohsin@gmail.com</td>
                <td>+923335586757</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>

              <tr>
                <td>Mohsin</td>
                <td>Irshad</td>
                <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                <td>isometric.mohsin@gmail.com</td>
                <td>+923335586757</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="well">
          <h4>Add System User</h4>
          <form>
            <div class="form-group">
              <label for="user_name">User Name:</label>
              <input type="text" class="form-control" id="user_name" required>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label required>
                <input type="password" class="form-control" id="pwd">
              </div>
              <div class="form-group">
                <label for="user_name">Created Time:</label>
                <input type="text" class="form-control" id="user_name">
              </div>
              <div class="form-group">
                <label for="user_name">Created By:</label>
                <input type="text" class="form-control" id="user_name" required>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
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
        <form action="" method="post">

          <div class="form-group">
            <input class="form-control " type="text" placeholder="User ID">
          </div>
          <div class="form-group">

            <input class="form-control " type="text" placeholder="User Name">
          </div>
          <div class="form-group">
            <input class="form-control " type="text" placeholder="Password">

          </div>
          <div class="form-group">
            <input class="form-control " type="time" placeholder="Created Time">

          </div>
          <div class="form-group">
            <input class="form-control " type="text" placeholder="Created By">

          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
        </div>

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
