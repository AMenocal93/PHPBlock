<!DOCTYPE html>
<html lang="en">
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
</head>
<body>
    @yield('nav')
    <div class="card-panel">
        @yield('content')
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Trantando de guardar bloques -->
    <script>
    if ('BlocklyStorage' in window) {
      BlocklyStorage.HTTPREQUEST_ERROR = 'There was a problem with the request.\n';
      BlocklyStorage.LINK_ALERT = 'Share your blocks with this link:\n\n%1';
      BlocklyStorage.HASH_ERROR = 'Sorry, "%1" doesn\'t correspond with any saved Blockly file.';
      BlocklyStorage.XML_ERROR = 'Could not load your saved file.\n'+
          'Perhaps it was created with a different version of Blockly?';
    } else {
      document.write('<p id="sorry">Sorry, cloud storage is not available.  This demo must be hosted on App Engine.</p>');
    }
  </script>

    <!-- finalinzando el guardado -->
    <script>
            var workspace = Blockly.inject('blocklyDiv',
                {media: '../../media/',
                 toolbox: document.getElementById('toolbox')});
            
    //guardado de bloques
    

    //CodigoCodigo/fin del tratamiento
    function MostrarCodigo(){
        var codigo = Blockly.PHP.workspaceToCode(workspace);
        document.getElementById('CodigoResultante').innerHTML = codigo;
    }
    workspace.addChangeListener(MostrarCodigo);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="{{ asset('materialize/js/materialize.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"></script>
    <script>
      $( document ).ready(function(){
        $(".dropdown-trigger").dropdown();
        $('.modal').modal();
      });
    </script>
    <script src="{{ asset('js/starting.js') }}"></script>
    @include('bloques.modal')
    <script src= "{{ asset('js/obtenerdata.js') }}"></script>
    <script src= "{{ asset('js/datavue.js') }}"></script>
    <script>
        // An href with #key trigers an AJAX call to retrieve saved blocks.
        if ('BlocklyStorage' in window && window.location.hash.length > 1) {
        BlocklyStorage.retrieveXml(window.location.hash.substring(1));
    }
    </script>
</body>
</html>