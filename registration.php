<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>

<div>

</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">The Perfect Cup</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
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
                    <hr>
                    <h2 class="intro-text text-center">registration
                        <strong>FORM</strong>
                    </h2>
                    <hr>
                </div>
                <form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					
					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>

					<label for="email"><b>Email Address</b></label>
                    <input class="form-control" id="email"  type="email" name="email" required>
                    
					<label for="password"><b>Password</b></label>
                    <input class="form-control" id="password"  type="password" name="password" required>

                    <label for="Confirmer password"><b>Confirmer password</b></label>
                    <input class="form-control" id="Confirmer password"  type="text" name="Confirmer password" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
            </div>
        
        </div>

    </div>
    <!--container -->
    <!--Modal-1-->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!--Modal Content-->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss-="modal">&times;</button>
				<h4 class="modal-title">Coconut Oil Coffee</h4>
			</div>
			<div class="nodal-body">
				<p>Sample Text</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
   
    <!--Modal-2-->
	<div id="myModal2" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!--Modal Content-->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss-="modal">&times;</button>
				<h4 class="modal-title">Irish Coffee</h4>
			</div>
			<div class="nodal-body">
				<p>Sample Text</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
   
    <!--Modal-3-->
	<div id="myModal3" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!--Modal Content-->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss-="modal">&times;</button>
				<h4 class="modal-title">Frozen Caramel Latte</h4>
			</div>
			<div class="nodal-body">
				<p>Sample Text</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
