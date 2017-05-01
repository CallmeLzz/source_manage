<!DOCTYPE html>
<html>
	<head>
		<title> @yield('title') </title>
		@yield('icon')
		@include('manage::front.layout.head')
		@yield('style')
		@yield('script')
	</head>

	<body>
		@include('manage::front.layout.header')
		
		@yield('content')

		@include('manage::front.layout.footer')

		@include('manage::front.layout.scroll_to_top')
	</body>
</html>