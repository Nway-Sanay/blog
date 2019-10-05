<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">

	<title>@yield('title', 'Project')</title>

	<style type="text/css">
		.is_complete{
			text-decoration: line-through;
		}
	</style>
</head>
<body>

	<div class="container">
		@yield('content')
	</div>
	
</body>
</html>