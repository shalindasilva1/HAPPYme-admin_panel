<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<?php include 'includes/navbars/app.php' ?>
<div class="col-sm-9">
  <div class="well">
    <h4>System Users Table</h4>
    <br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>User ID</th>
          <th>e-Mail</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Facebook ID</th>
          <th>Auth Code</th>
          <th>Created At</th>
          <th>Type</th>
          <th>Image URL</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
  <div class="col-sm-6">
    <div class="well">
      <h4>Delete App User</h4>
      <form>
        <div class="form-group">
          <label for="user_name">User Name:</label>
          <input type="text" class="form-control" id="user_name" required>
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
