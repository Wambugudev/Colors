<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Color</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .color{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        span{
          font-weight: 500;
        }

    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand" href="{{route('colors.index')}}" id="home">Opotto<span>.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link mr-4" id="link1" href="{{route('allColor')}}">View Color </a>
            <a class="nav-item nav-link mr-4" id="link2" href="{{route('colors.create')}}">Add Colors </a>
          </div>
        </div>
      </nav>
      <div class="container">
          <h3 id="home2" class=" text-center ">The color you have chosen is....</h3>
        @yield('content')

      </div>
      <script src="{{asset('js/app.js')}}"></script>
      @yield('script')
</body>
</html>
