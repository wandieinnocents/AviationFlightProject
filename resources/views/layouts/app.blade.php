<!DOCTYPE html>
<html lang="en">


<head>
    <title>Civil Aviation</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="assets/images/fav.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mob.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>


    @include('includes.nav')

	@yield('content')

	<!--====== FOOTER - COPYRIGHT ==========-->
	@include('includes.footer')
	<!--========= Scripts ===========-->
	<script src="{{ asset('assets/js/jquery-latest.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
	<script src="{{ asset('assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('assets/js/materialize.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

@yield('after_scripts')

</html>
