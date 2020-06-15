<?php
// session_start(); ?>
<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>The Perfect Cup - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet" />

    <!-- Fonts -->
    <link
      href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
      rel="stylesheet"
      type="text/css"
    />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">
      3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
          <a class="navbar-brand" href="index.php">The Perfect Cup</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <div class="container">
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <hr />
            <h2 class="intro-text text-center">
            <div class="header">
  	<h2>Login</h2>
  </div>
            </h2>
            <hr />
            <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
    <div class="form-group">
  		<label>email</label>
  		<input class="form-control"  type="text" name="email" >
  	</div>
    <div class="form-group">
  		<label>Password</label>
  		<input class="form-control" type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button class="btn btn-primary" type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="sin.php">Sign up</a>
  	</p>
  </form>
          </div>
        </div>
      </div>
    </div>
    <!--container -->
    <!--Modal-1-->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss-="modal">
            &times;
          </button>
          <h4 class="modal-title">Coconut Oil Coffee</h4>
        </div>
        <div class="nodal-body">
          <p>Sample Text</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>

    <!--Modal-2-->
    <div id="myModal2" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss-="modal">
            &times;
          </button>
          <h4 class="modal-title">Irish Coffee</h4>
        </div>
        <div class="nodal-body">
          <p>Sample Text</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>

    <!--Modal-3-->
    <div id="myModal3" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss-="modal">
            &times;
          </button>
          <h4 class="modal-title">Frozen Caramel Latte</h4>
        </div>
        <div class="nodal-body">
          <p>Sample Text</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p>Copyright &copy; The Perfect Cup 2019</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
