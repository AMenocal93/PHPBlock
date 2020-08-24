<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHPBlock | @yield('title')</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="{{ asset('js/blockly_compressed.js') }}"></script>
  <script src="{{ asset('js/blocks_compressed.js') }}"></script>
  <script src="{{ asset('js/php_compressed.js') }}"></script>
  <script src="{{ asset('msg/js/es.js')}}"></script>
</head>     </head>
<body>
  @yield('nav')
  <div class="container">
    @yield('content')
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
  <script src="{{ asset('materialize/js/materialize.js')}}"></script>
  <script>
    $( document ).ready(function(){
      $(".dropdown-trigger").dropdown();
    });
  </script>
  <script src="{{ asset('js/starting.js') }}"></script>

  <script>
    $(document).ready(function(){
      $('.materialboxed').materialbox();
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.scrollspy');
      var instances = M.ScrollSpy.init(elems, options);
    });
  </script>

</body> 
</html>