<!-- Estructura de la ventana modal -->
<script src="{{ asset('js/datavue.js') }}"></script>
<div>
    <div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Ventana de Ejecucion PHPBlock</h4>
        <p>Resultado de la ejecucion</p>
        <div>
            @verbatim
                {{codigos}}
            @endverbatim
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
    </div>
</div>
<script src="{{ asset('js/datavue.js') }}"></script>
