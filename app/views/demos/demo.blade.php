<!DOCTYPE html>
<html lang='zh-CN'>
<head>
	{{HTML::style('js/bootstrap-3.3.4/dist/css/bootstrap.min.css')}}
	{{HTML::style('js/bootstrap-3.3.4/dist/css/bootstrap-theme.min.css')}}
	{{HTML::style('js/bootstrap-3.3.4/dist/css/Normalize.css')}}
	{{HTML::script('js/libs/jquery-2.0.2.min.js')}}
	{{HTML::script('js/bootstrap-3.3.4/dist/js/bootstrap.min.js')}}
	{{HTML::script('js/demo/demo.js')}}
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
	<h1>h1.Bootstrap heading<small>Secondary text</small></h1>
	<h2>h2.Bootstrap heading<small>Secondary text</small></h2>
	<h3>h3.Bootstrap heading<small>Secondary text</small></h3>
	<h4>h4.Bootstrap heading<small>Secondary text</small></h4>
	<!--用于固定宽度并支持响应式布局的容器-->
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-md-offset-2">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
		</div>
		<div class="row">
			<div class="col-md-6">col-md-6</div>
			<div class="col-md-6">col-md-6</div>
		</div>
		<div class="row">
			<div class="col-md-4">col-md-4</div>
			<div class="col-md-4">col-md-4</div>
			<div class="col-md-4">col-md-4</div>
		</div>

	</div>
	<hr>
	<!-- 用于 100% 宽度，占据全部视口（viewport）的容器-->
	<div class="container-fluid">
			<div class="row">
			<div class="col-md-1 col-md-offset-2">col-md-1</div>
			<div class="col-md-1 col-md-offset-2">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
			<div class="col-md-1">col-md-1</div>
		</div>
		<div class="row">
			<div class="col-md-6">col-md-6</div>
			<div class="col-md-6">col-md-6</div>
		</div>
		<div class="row">
			<div class="col-md-4">col-md-4</div>
			<div class="col-md-4">col-md-4</div>
			<div class="col-md-4">col-md-4</div>
		</div>
	</div>

	<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
	<form>
		<div class="form-group">
			<label for="exampleInputemail">Email address</label>
			<input type="email" class="form-control" placeholder="Email Input" id="exampleInputemail">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
	<br>
	<hr>
	<button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<br>
	<hr>
	<div>
		图标 <span class="glyphicon glyphicon-object-align-left"></span>
    </div>
    <button type="button" class="btn btn-default" aria-label="Left Align">
         <span class="glyphicon glyphicon-object-align-left" aria-hidden="true"></span>
    </button>
    <button type="button" class="btn btn-default btn-lg">
  		<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star
	</button>
	<div class="alert alert-danger" role="alert">
		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		<span class="sr-only">Error:</span>
		Enter a valid email address
	</div>
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
  </ul>
</div>

<div class="dropup">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu2">
    <li role="presentation" class="dropdown-header">Dropdown header</li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
  </ul>
</div>

<div class="btn-group"  roel="group"  aria-label="..">
	<button type="button" class="btn btn-primary">Left</button>
	<button type="button" class="btn btn-primary">Left</button>
	<button type="button" class="btn btn-primary">Left</button>
</div>


<div class="btn-group"  roel="group"  aria-label="..">
	  <button type="button" class="btn btn-primary">Left</button>
	  <button type="button" class="btn btn-primary">Left</button>
	  <div class="btn-group dropup"  roel="group"  aria-label="..">	
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
		    Dropdown
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu2">
		    <li role="presentation" class="dropdown-header">Dropdown header</li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
		    <li role="presentation" class="divider"></li>
		    <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
		  </ul>
	 </div>
</div>
<div class="btn-group btn-group-justified" role="group" aria-label="..">
	<div class="btn-group" role="group">
		<button type="button" class="btn btn-default">Left</button>
	</div>
	<div class="btn-group" role="group">
		<button type="button" class="btn btn-default">Middle</button>
	</div>
	<div class="btn-group" role="group">
		<button type="button" class="btn btn-default">right</button>
	</div>
</div>

<div class="btn-group" role="group" aria-label="..">
	<div class="btn-group dropdown" role="group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Default <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="dropdown">
			<li><a href="#">Action</a></li>
		    <li><a hre="#">Another action</a></li>
		    <li><a href="#">Something else here</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group dropup" role="group">
		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			Primary <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropup" role="dropdown">
			<li><a href="#">Action</a></li>
		    <li><a hre="#">Another action</a></li>
		    <li><a href="#">Something else here</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Separated link</a></li>
		</ul>
	</div>
</div>
	
<!-- Split button -->
<div class="btn-group">
	<div class="btn-group dropdown" role="group" aria-label="..">
		  <button type="button" class="btn btn-danger">Default</button>
		  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		    <span class="caret"></span>
		    <span class="sr-only">Toggle Dropdown</span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
		    <li><a href="#">Action</a></li>
		    <li><a href="#">Another action</a></li>
		    <li><a href="#">Something else here</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Separated link</a></li>
		  </ul>
    </div>
    <div class="btn-group dropup" role="group" aria-label="...">
		  <button type="button" class="btn btn-primary">Primary</button>
		  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		    <span class="caret"></span>
		    <span class="sr-only">Toggle Dropdown</span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
		    <li><a href="#">Action</a></li>
		    <li><a href="#">Another action</a></li>
		    <li><a href="#">Something else here</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Separated link</a></li>
		  </ul>
    </div>
</div>

<div class="input-group">
	<span class="input-group-addon" id="basic-add1">@</span>
	<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-add1">
</div>

<div class="input-group">
	<input type="text" class="form-control" placeholder="email" aria-describedby="basic-add2">
	<span class="input-group-addon" id="basic-add2">@example.com</span>
</div>

<div class="input-group input-group-lg">
	<span class="input-group-addon" id="basic-add1">@</span>
	<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-add1">
</div>

<div class="input-group input-group-sm">
	<span class="input-group-addon" id="basic-add1">@</span>
	<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-add1">
</div>

<div class="row">
	<div class="col-lg-6">
		<div class="input-group">
				<span class="input-group-addon">
					<input type="checkbox" aria-label="..">
				</span>
				<input type="text" class="form-control" aria-label="..">
		</div>
	</div>
	<div class="col-lg-6">
		<div class="input-group">
				<span class="input-group-addon">
					<input type="radio" aria-label="..">
				</span>
				<input type="text" class="form-control" aria-label="..">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">
	  <div class="input-group">
		<span class="input-group-btn" aria-label="..">
			<button class="btn btn-default">Go!</button>
		</span>
		<input type="text" class="form-control" aria-label="..">
	  </div>
	</div>
	<div class="col-lg-6">
	  <div class="input-group">
		<input type="text" class="form-control" aria-label="..">
		<span class="input-group-btn" aria-label="..">
			<button class="btn btn-default">Go!</button>
		</span>
	  </div>
	</div>
</div>

<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <div class="input-group-btn btn-group dropup">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
      <input type="text" class="form-control" aria-label="...">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" aria-label="...">
      <div class="input-group-btn btn-group dropup">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

<div class="row">
	<div class="col-lg-6">
		<div class="input-group btn-group">
		 	   <div class="input-group-btn dropup" role="group">
				  <button type="button" class="btn btn-default">Default</button>
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				    <span class="caret"></span>
				    <span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
	 			    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
			   <input type="text" class="form-control" placeholder="search">
		</div>
	</div>
</div>

<div role="navgitation">
	<ul class="nav nav-tabs nav-justified">
		<li role="presentation" class="active"><a href="#">Home</a></li>
		<li role="presentation" class="disabled"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages</a></li>
	</ul>
</div>
<br>
<nav>
	<ul class="nav nav-pills nav-stacked nav-justified">
			<li role="presentation" class="active"><a href="#">Home</a></li>
			<li role="presentation"><a href="#">Profile</a></li>
	        <li role="presentation"><a href="#">Messages</a></li>
	</ul>
</nav>


<nav>
	<ul class="nav nav-tabs">
		<li role="presentation" class="active"><a href="#">Home</a></li>
		<li role="presentation"><a href="#">Help</a></li>
		<li role="presentation" class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
			      Dropdown <span class="caret"></span>
			    </a>
			    <ul class="dropdown-menu" role="menu">
				      <li><a href="#">Action</a></li>
			          <li><a href="#">Another action</a></li>
			          <li><a href="#">Something else here</a></li>
			          <li class="divider"></li>
			          <li><a href="#">Separated link</a></li>
			    </ul>
		</li>
	</ul>
</nav>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
