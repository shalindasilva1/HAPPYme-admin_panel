<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<?php include 'includes/navbars/system.php' ?>
<div class="col-sm-9">
  <div class="well">
    <h4>System Users Table</h4>
    <br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>User ID</th>
          <th>User Name</th>
          <th>Password</th>
          <th>Created Time</th>
          <th>Created By</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
  <div class="row">
    <div class="col-sm-6">
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
    <div class="col-sm-6">
      <div class="well">
        <h4>Update / Delete</h4>
        <form>
          <div class="form-group">
            <label for="user_name">User Name:</label>
            <input type="text" class="form-control" id="user_name">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
