<!DOCTYPE html>
<html>
<head>
    <title> @yield('title','Developers BFF') </title>
    <meta charset='utf-8'>
</head>
<body>

    <header>
		<a href ="/"> <h1> Developer's Best Friend </h1></a>
    </header>

    <section>
        @yield('content',"this is the master template")
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>