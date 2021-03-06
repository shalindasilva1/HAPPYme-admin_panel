<body>
  <nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">HappyME inc. &copy;</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="sysuser.php">System Users</a></li>
          <li class="active"><a href="appuser.php">App Users</a></li>
          <li><a href="places.php">Places</a></li>
          <li><a href="service.php">Service</a></li>
          <li><a href="feedback.php">Feedback</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
        <div class="row">
          <div class="media">
            <a class="pull-left" href="#">
              <img class="media-object dp img-circle" src="imgs/logo.png" style="width: 100px;height:100px; margin: 17px 0px 0px 17px; ">
            </a>
            <div class="media-body">
              <h2>HappyME inc. &copy;</h2>
              <h3 class="media-heading"><?php echo ($user_data['user_name']);?><br><small><?php echo ($user_data['type']);?></small></h4>
                  <a class="btn btn-primary btn-sm pull-right" style="margin-right:19px;"href="logout.php">Logout</a>
              </div>
            </div>
          </div>
          <hr style="border-top: 1px solid #c1bbbb;">
          <h3>Admin Panel</h3>
          <ul class="nav nav-pills nav-stacked">
            <li><a href="sysuser.php">System Users</a></li>
            <li class="active"><a href="appuser.php">App Users</a></li>
            <li><a href="places.php">Places</a></li>
            <li><a href="service.php">Service</a></li>
            <li><a href="feedback.php">Feedback</a></li>
          </ul><br>
        </div>
        <div class="col-sm-9">
          <div class="jumbotron" style="border-radius: 0px;padding: 10px;">
            <h3 class="text-center" style="margin:10px">App Users</h3>
          </div>
        </div>
