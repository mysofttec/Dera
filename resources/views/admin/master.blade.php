<!DOCTYPE html>
<html>
<head>
	<title>Backend</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="{{asset('admin/bootstrap/css/bootstrap.min.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('admin/css/AdminLTE.min.css')}}">
	<!-- AdminLTE Skins. Choose a skin from the css/skinsfolder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{asset('admin/css/skins/_all-skins.min.css')}}">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	<!-- Header starts from here -->
	<header class="main-header">
		<a href="{{route('admin.index')}}" class="logo"><b>Admin Panel</b><p></p></a>
		<nav class="navbar navbar-static-top">
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
			</a>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}"><i class="fa fa-btn fa-home"></i>Home</a></li>
					<li class="dropdown user user-menu">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px">
							<img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:32px;height: 32px;border-radius: 45%;">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/profile') }}"><i class="fa fa-btn user"></i>Profile</a></li>
							<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
						</ul>
					</li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="hidden-xs">User Name</span>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<img src="{{asset('admin/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
							<p>User Name</p>
						</li>
						<li class="user-footer">
							<div class="pull-right">
								<a href="{{url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
							</div>
						</li>
					</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<section class="sidebar">
			<ul class="sidebar-menu">
				<li class="header">MAIN NAVIGATION</li>
				@role('admin')
				<li>
					<a href="{{route('backend.acl.index')}}">
						<i class="fa fa-users"></i><span>Users</span>
						<small class="label pull-right bg-green">new</small>
					</a>
				</li>
				<li>

					<a href="{{route('backend.roles.index')}}">
						<i class="fa fa-users"></i><span>Manage Roles</span>
						<small class="label pull-right bg-green">new</small>
					</a>
				</li>
				<li>
					<a href="{{route('backend.permissions.index')}}">
						<i class="fa fa-users"></i><span>Manage Permisiions</span>
						<small class="label pull-right bg-green">new</small>
					</a>
				</li>
				<li>
					<a href="{{route('backend.categories.index')}}">
						<i class="fa fa-users"></i><span>Manage Categories</span>
						<small class="label pull-right bg-green">new</small>
					</a>
				</li>
				<li>
					<a href="{{route('backend.license.index')}}">
						<i class="fa fa-users"></i><spa>Manage Licenses</spa></span>
						<small class="label pull-right bg-green">new</small>
					</a>
				</li>
				@endrole

				<li class="treeview">
					<a href="#"><i class="fa fa-pie-chart"></i><span>Products</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul style="display: none;" class="treeview-menu">
						<li><a href="#"><i class="fa fa-circle-o"></i> Index</a></li>
						<li><a href="#"><i class="fa fa-circle-o"></i> Create Article</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#"><i class="fa fa-pie-chart"></i><span>Orders</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul style="display: none;" class="treeview-menu">
						<li><a href="#"><i class="fa fa-circle-o"></i> Index</a></li>
						<li><a href="#"><i class="fa fa-circle-o"></i> Create Tag</a></li>
					</ul>
				</li>
				</li>
			</ul>
		</section>
	</aside>

	<!-- main content area -->
	<div class="content-wrapper">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">@yield('title')</h3>
			</div>
			<div class="box-body">

				@if(Session::has('flash_message'))
					<div class="alert alert-success">
						{{Session::get('flash_message')}}
					</div>
				@endif

				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
				@endif
				@yield('content')
			</div>
		</div>

	</div>
</div>

<!-- jQuery 2.2.0 -->
<script src="{{asset('admin/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/js/demo.js')}}"></script>
</body>
</html>