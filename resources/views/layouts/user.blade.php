<!DOCTYPE html>
<html lang="en">

<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>RBido</title>
    @include('layouts.user.styles')
    
</head>

<body>

    @include('layouts.user.header')

    @yield('content')
  
    @include('layouts.user.footer')  

    @include('layouts.user.scripts')
  
</body>

</html>
