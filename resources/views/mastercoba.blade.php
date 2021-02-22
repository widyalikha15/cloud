<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #8 : Sistem Template Blade Laravel</title>
</head>
<body>

	<header>

		<h2>Blog MalasNgoding</h2>
		<nav>
			<a href="/blogcoba">HOME</a>
			|
			<a href="/blogcoba/tentangcoba">TENTANG</a>
			|
			<a href="/blogcoba/kontakcoba">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
	</footer>

</body>
</html>