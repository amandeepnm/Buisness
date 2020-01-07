<html>
	<head>
		@include('includes.head')
	</head>

	<body>
		<header>
			@include('includes.header')
		</header>

			@yield('content')
			
			@yield('about')

		<footer>
			@include('includes.footer')
		</footer>
		
		
			@include('includes.script')
	</body>
</html>