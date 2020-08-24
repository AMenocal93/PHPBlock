@extends('layouts.introduccion')
@section('title','Programacion')
@extends('layouts.app')
@section('content')

<h1 class="center-align">Introducción a PHP Block</h1>
<p class="flow-text"> Es una plataforma de programación visual compuesto por un sencillo conjunto de comandos que se pueden combinar como si fueran las piezas de un rompecabezas. Es una herramienta muy útil lo cual tiene una identidad didáctica con la que podrán aprender nociones básicas de programación de una forma intuitiva y simple.</p>
<p class="flow-text">PHP Block permite arrastrar los distintos componentes de control, lógica, operaciones matemáticas, texto, listados y procesos para crear sencillos scripts que podremos visualizar en tiempo real como es la sintaxis del lenguaje PHP.</p>
<div class="divider"></div>
<div class="section">
  <h2>Espacio de trabajo</h2>
  <p class="flow-text">La caja de herramientas es el menú lateral desde donde el usuario puede crear nuevos bloques. Con él, puede construir su aplicación y generar automáticamente el código mediante una interfaz visual.</p>
  <p class="flow-text">En él se muestran las categorias de todos los bloques disponibles se muestran en la caja de herramientas,en el area de trabajo principal se muestran a un costado los bloques junto a la papelera y  al costado derecho la sintaxis del codigo segun las piezas que el usuario elija</p>
  <img  src="imagenes/EspaciodeTrabajo.JPG" class="materialboxed">
</div>
<div class="divider"></div>
<div class="section" >
  <h2 id="Logic">Logic</h2>
  <p class="flow-text">Es una agrupación de instrucciones con el fin de hacer su manejo más fácil. Su característica principal es que a ella se llega por un único punto y desde ella se parte o abandona por un único punto.  Ésto hace que se conformen bloques de instrucciones que son más fácilmente perceptibles para su control evitándose una caótica disposición de las instrucciones. La historia ha mostrado que un estilo libre de disponer las instrucciones es fuente para insertar inconcientemente muchos errores en la lógica que debe gobernar a la máquina.</p>
  <br>
  <img src="imagenes/Logic.JPG" ALIGN=center >
  <h3>Comparaciones</h3>
  <p class="flow-text"> Hay seis operadores de comparación. Cada uno toma dos entradas (normalmente números) y devuelve verdadero o falso dependiendo de cómo las entradas se comparan entre sí. Los seis operadores son: igual, no igual, menor que, mayor que, menor o igual, mayor o igual.</p>
  <img src="imagenes/Comparaciones.JPG" alt="" > 
  <h3> Operaciones lógicas  </h3>
  <p class="flow-text"> El bloque y devolverá verdadero solo si sus dos entradas también son verdaderas.</p>
  <img src="imagenes/Operaciones lógicas 1.JPG" alt="" > 
  <p class="flow-text">El bloque o devolverá verdadero si alguna de sus dos entradas es verdadera.</p>
  <img src="imagenes/Operaciones lógicas 2.JPG" alt="" > 
  <h3> No  </h3>
  <p class="flow-text"> El bloque no convierte su entrada booleana en su opuesto. Por ejemplo, el resultado de:</p>
  <img src="imagenes/No 1.JPG" alt="" > 
  <p class="flow-text">es falso. Como se mencionó anteriormente, si no se proporciona ninguna entrada, se supone un valor verdadero , por lo que el siguiente bloque produce el valor falso :</p>
  <img src="imagenes/No 2.JPG" alt="" >
  <div class="divider"></div>
  <div class="section" >
    <h2 id="Loops">Loops</h2>
    <p class="flow-text">La estructura de repetición o bucle hace posible la ejecución repetida de una o más instrucciones.</p>
    <p class="flow-text">Las estructuras de repetición nos permiten ejecutar varias veces unas mismas líneas de código</p>
    <p class="flow-text">Estas estructuras describen procesos que se repiten varias veces en la solución del problema. </p>
    <p class="flow-text">El conjunto de acciones que se repiten conforman el cuerpo del bucle y cada ejecución del cuerpo del bucle se denomina iteración</p>
    <img src="imagenes/Loops.JPG" alt="" >
    <h3>Modificación de bloque </h3>
    <p class="flow-text">Solo el bloque simple si aparece en la caja de herramientas.Para agregar más cláusulas "Si" y "Sino", haga clic en el ícono de ajustes, que abre una nueva ventana luego arrastre las cláusulas así como aparece en el video. Cuando termine, haga clic en el ícono de ajustes, que cierra la ventana</p>
    <div class="video-container">
      <iframe width="853" height="480" src="videos/Modificar bloque.mp4" frameborder="0" allowfullscreen></iframe>
    </div>
    <h3>Repita</h3>
    <p class="flow-text">Se utiliza para repetir una sentencia o grupo de sentencias un número fijo de veces.Puede visualizar un breve ejemplo en el siguiente video:</p>
    <div class="video-container">
      <iframe width="853" height="480" src="videos/Repita.mp4" frameborder="0" allowfullscreen></iframe>
    </div>
    <h3> Repita mientras</h3>
    <p class="flow-text">Se utiliza para repetir una sentencia o grupo de sentencias mientras una condición especificada sea verdadera.</p>
    <img src="imagenes/repetirmientras.JPG" alt="" >
    <h3>Repetir hasta</h3>
    <p class="flow-text">Se utiliza para repetir una sentencia o grupo de sentencias hasta que una condición especificada sea verdadera.</p>
    <img src="imagenes/repetirhasta.JPG" alt="" >
  </div>
  <div class="divider"></div>
  <div class="section" id="">
    <h2 id="Math">Math</h2>
    <p class="flow-text">Estas podrán ser utilizadas para poder seleccionar cualquier operador que necesario para la ejecución del código a ejecutar</p>
    <p class="flow-text">Entre las operaciones contenidas se encuentran:</p>
    <p class="flow-text">Operaciones básicas:la ejecución de estos operadores devuelve el resultado de realizar estas operaciones, dichos resultados pueden ser almacenados en variables numéricas para mostrarlos o utilizarlos en otra parte del programa.</p>
    <li class="flow-text" >Suma , resta , multiplicación, división, exponciales</li>
    <li class="flow-text">Raíz cuadrada, aproximaciones</li>
    <p class="flow-text">Estadística:</p>
    <li class="flow-text">Máximo, mínimo, promedio, media, moda, desviación</li>
    <p class="flow-text">Funciones trigonométricas:</p>
    <li class="flow-text">Seno, coseno cotangente, etc</li>
    <img src="imagenes/Math1.JPG" alt="" >    <img src="imagenes/Math2.JPG" alt="" >
    <div class="divider"></div>
    <div class="section" id="">
      <h2 id="Text">Text</h2>
      <p class="flow-text">Son elementos que se inserta en el documento y que varía de acuerdo con el contexto.El texto puede contener letras (que pueden ser minúsculas o mayúsculas), números, signos de puntuación, otros símbolos y espacios en blanco entre las palabras.</p>
      <img src="imagenes/Text1.JPG" alt="" >  <br> <br> <br>  <img src="imagenes/Text2.JPG" alt="" >
      <h3>Creación de texto</h3>
      <p class="flow-text">El siguiente bloque crea el fragmento de texto "hola" y lo almacena en la variable denominada greeting .</p>
      <img src="imagenes/Creacion de texto 1.JPG" class="materialboxed" > 
      <p class="flow-text"> El texto de creación con bloque combina (concatena) el valor de la variable de Saludando y el nuevo texto "Bienvenido a PHPBlock" para crear el texto "Bienvenido a PHPBlock". Tenga en cuenta que no hay espacio entre ellos, ya que ninguno estaba en ninguno de los textos originales.</p>
      <img src="imagenes/Creacion de texto 2.JPG" alt="" > 
      <h3> Modificación de texto</h3>
      <p class="flow-text"> El bloque de texto para ... agregar agrega el texto dado a la variable especificada. En este caso, cambia el valor del Saludando variable de "Bienvenido a PHPBlock" a ".Estamos para ayudarte"</p>
      <img src="imagenes/Modificacion de texto.JPG" class="materialboxed" > 
      <h3> Longitud de texto</h3>
      <p class="flow-text"> La longitud de los bloques cuenta el número de letras, números, etc., en cada texto. La longitud de "Lograras lo que te propongas" es 28. Mientras que la longitud del bloque vacio es 0 </p>
      <img src="imagenes/Longitud de texto.JPG" alt="" > 
      <h3> Comprobación de texto vacio</h3>
      <p class="flow-text">El bloque está vacío comprueba si el texto dado está vacío (tiene una longitud de 0). El resultado es verdadero en el primer caso y falso en el segundo.</p>
      <img src="imagenes/Comprobación de texto vacio.JPG" alt="" > 
      <h3> Encontrar texto</h3>
      <p class="flow-text">Estos bloques se pueden usar para verificar si un fragmento de texto está en otro fragmento de texto y, de ser así, dónde aparece. Por ejemplo, esto solicita la primera aparición de "a" en "Mar". El resultado es 2.</p>
      <img src="imagenes/Encontrar texto 1.JPG" class="materialboxed" > 
      <p class="flow-text">Esto solicita la última aparición de "e" en "Resultado", que también es 2.</p>
      <img src="imagenes/Encontrar texto 2.JPG" class="materialboxed" > 
      <p class="flow-text">Ya sea que se seleccione el primero o el último , este bloque dará el resultado 0, ya que "Resultado" no contiene "S".</p>
      <img src="imagenes/Encontrar texto 3.JPG" class="materialboxed" > 
      <h3>Imprimir texto</h3>
      <p class="flow-text">El bloque de impresión hace que el valor de entrada se imprima el tecto ingresado.</p>
      <img src="imagenes/Imprimir texto.JPG" alt="" > 
      <h3> Ajuste de mayúsculas y minúsculas</h3>
      <p class="flow-text"> Este bloque crea una versión del texto de entrada que es:</p>
      <li class="flow-text" >"Mayúsculas", todo el texto queda en mayúsculas </li>
      <li class="flow-text">"Minúsculas", todo el texto queda en minúsculas </li>
      <li class="flow-text" >"Mayúsculas cada palabra",  primeras letras mayúsculas, otras letras minúsculas</li>s
      <img src="imagenes/Ajuste de mayúsculas y minúsculas.JPG" class="materialboxed" > 
      <div class="divider"></div>
      <div class="section" id="">
        <h2 id="Colour">Colour</h2>
        <p class="flow-text">Los colores se usan en muchos programas gráficos.Los colores en bloque se representan como texto de la forma "#rrggbb" donde "rr", "gg" y "bb" representan los componentes rojo, verde y azul, respectivamente, en el rango hexadecimal 00 a ff. </p>
        <img src="imagenes/Colour.JPG" alt="" > 
        <br><br><br><br>
        <h3> Elegir un color de una paleta</h3>
        <p class="flow-text"> La forma más sencilla de obtener un color es con el selector de color . Aparece como un rectángulo redondeado rojo. Al hacer clic, se abre una paleta de colores, desde la cual se puede elegir un color.</p>
        <div class="video-container">
          <iframe width="853" height="480" src="videos/Elegir un color de una paleta.mp4" frameborder="0" allowfullscreen></iframe>
        </div>
        <br><br><br><br>
        <h3> Crear un color a partir de componentes rojo, verde y azul</h3>
        <p class="flow-text">El color con bloque le permite a uno especificar el porcentaje deseado de rojo, verde y azul. El siguiente ejemplo crea un color con las cantidades máximas de rojo y azul y no verde (haciendo púrpura).</p>
        <div class="video-container">
          <iframe width="853" height="480" src="videos/Crear un color a partir de componentes rojo, verde y azul.mp4" frameborder="0" allowfullscreen></iframe>
        </div>
        <br><br><br><br>
        <h3> Generando un color aleatorio</h3>
        <p class="flow-text"> El bloque de color aleatorio genera un color aleatorio cada vez que se llama.</p>
        <img src="imagenes/Colour2.JPG" class="materialboxed" > 
        <p class="flow-text">Específicamente, cada uno de los componentes rojo, verde y azul es un número de 0 a 255 (inclusive), con la misma probabilidad.</p>
        <h3> Mezcla de colores</h3>
        <p class="flow-text">Este bloque combina dos colores, como si uno estuviera mezclando pintura (en realidad ligera, no pintura). El siguiente ejemplo produce el color que se obtendría mezclando cantidades iguales de rojo y amarillo (el resultado sería naranja).</p>
        <div class="video-container">
          <iframe width="853" height="480" src="videos/Mezcla de colores.mp4" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="divider"></div>
        <div class="section" id="">
          <h2 id="Lists">Lists</h2>
          <p class="flow-text">Es una colección ordenada de elementos, como una lista de "cosas por hacer" o una lista de compras. Los elementos en una lista pueden ser de cualquier tipo, y el mismo valor puede aparecer más de una vez en una lista</p>
          <img src="imagenes/Lists.JPG" alt="" >  
          <h3>Crear lista con elemento</h3>
          <p class="flow-text">La lista de creación con el bloque de elementos le permite crear una lista que tiene el número especificado de copias de un elemento. Por ejemplo, los siguientes bloques establecen las "Frase" variables en la lista que contiene "Bienvenido"</p>
          <img src="imagenes/Crear lista con elemento.JPG" class="materialboxed">
          <div class="divider"></div>
          <div class="section">
            <h2 id="Variables">Variables</h2>
            <p class="flow-text">Son pequeños espacios reservados en la memoria principal del equipo, los cuales pueden cambiar su contenido a lo largo de la ejecución de un programa, el contenido de la variable se define por su tipo, como el tipo de variable numérico, tipo string que almacena cadenas de texto, de tipo boolean que almacenan una decisión, falso o verdadero. </p>
            <img src="imagenes/Variables.JPG" alt="" >
            <h3> Menú desplegable</h3>
            <p class="flow-text">Al hacer clic en el símbolo desplegable de una variable (elemento) aparece el siguiente menú: </p>
            <img src="imagenes/Variables Menú desplegable.JPG" alt="" >
            <p class="flow-text">El menú ofrece las siguientes opciones. </p>
            <li class="flow-text" >"Duplicar", duplica esta variable </li>
            <li class="flow-text">"Añadir comentario", esta opción permite agregar un comentario </li>
            <li class="flow-text" >"Contraer", hace el bloque más pequeño</li>
            <li class="flow-text">"Desactivar bloque", inhabilita el bloque </li>
            <li class="flow-text">"Elimina bloque", elimina el bloque </li>
            <li class="flow-text">"Ayuda", translada al usuario a la ayuda </li>
            <li class="flow-text">"Crear obtener elemento ", inhabilita el bloque </li>
          </div>
          <div class="divider"></div>
          <div class="section">
            <h2 id="Funtions">Funtions</h2>
            <p class="flow-text">Permiten dividir el trabajo que hace un programa, en tareas más pequeñas separadas de la parte principal.Dicho de otra forma es una sección de código que raliza una tarea específica </p>
            <img src="imagenes/Funciones.JPG" alt="" >
          </div>

  @endsection
  