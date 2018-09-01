<!DOCTYPE html>
<html lang="ar">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>لوحة التحكم</title>

	<!-- Bootstrap Core CSS -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
	<link href="{{asset('css/AdminLTE.min.css')}}" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/footer.css')}}" rel="stylesheet" type="text/css">


</head>
<body ng-app="myApp">
<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">{{trans('menu.dashboard')}}</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">

					@if (Auth::check())
						<li><a href="{{ url('/customers') }}">{{trans('menu.customers')}}</a></li>
						<li><a href="{{ url('/section') }}">الاقسام</a></li>
						<li><a href="{{ url('/items') }}">{{trans('menu.items')}}</a></li>
						<li><a href="{{ url('/suppliers') }}">{{trans('menu.suppliers')}}</a></li>
						<li><a href="{{ url('/receivings') }}">{{trans('menu.receivings')}}</a></li>
						<li><a href="{{ url('/sales') }}">{{trans('menu.sales')}}</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{trans('menu.reports')}} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/reports/receivings') }}">{{trans('menu.receivings_report')}}</a></li>
								<li><a href="{{ url('/reports/sales') }}">{{trans('menu.sales_report')}}</a></li>
							</ul>
						</li>
						<li><a href="{{ url('/employees') }}">{{trans('menu.employees')}}</a></li>
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}"></a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/tutapos-settings') }}">{{trans('menu.application_settings')}}</a></li>
								<li class="divider"></li>
								<li><a href="{{ url('/auth/logout') }}">{{trans('menu.logout')}}</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

<footer class="footer hidden-print" style="background-color: #1d2124; font-size: large; position: static">
	<div class="container">
		<p class="text-muted">You are using <a href="#">mabe3at</a> V-1.0- programed by <a href="#">ahmed alzeer & mohamed alzeer****<i>01015258850 & 01096423848</i></a>.
		</p>

	</div>
</footer>

	<!-- Scripts -->
<!-- jQuery Version 1.11.0 -->
<script src="{{asset('js/jquery-1.11.0.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('js/metisMenu.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('js/sb-admin-2.js')}}"></script>
<script src="{{asset('js/angular.min.js')}}"></script>
<script src="{{asset('js/item.kits.js')}}"></script>
<script src="{{asset('js/sale.js')}}"></script>
<script src="{{asset('js/angularbooter.js')}}"></script>
<script src="{{asset('js/sell.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>



<script>

</script>
</body>
</html>
