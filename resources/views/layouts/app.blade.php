<!DOCTYPE html>
<html lang="en">
<head>
  <title>CodeBreakers&trade;</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  @yield('head')

</head>
<body>


<nav class="navbar navbar-inverse">
  
  <div class="navbar-header">
  <a class="navbar-brand" href="{{ url('/') }}">CodeBreakers</a>
  

      <ul class="nav navbar-nav">
          <li><a href="{{ route('meetings.index') }}">View</a></li>
          <li><a href="{{ route('meetings.create') }}">Create</a></li>
      </ul>
      
  </div>
</nav>


@yield('content')

    
</body>
</html>


