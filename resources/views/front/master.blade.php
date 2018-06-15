<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Analytican.io | @yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  @include('front.partials.stylesheets')

</head>

<body id="body">

     @yield('content')
     @yield('scripts')
</body>
</html>
