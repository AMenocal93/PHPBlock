@extends('layouts.app')

@section('content_app')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique su correo') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                        </div>
                    @endif

                    {{ __('
                    Antes de continuar, por favor revise su correo electrónico para un enlace de verificación.') }}
                    {{ __('Si no ha recibido el correo electrónico.') }}, <a href="{{ route('verification.resend') }}">{{ __('haga clic aquí para solicitar nuevamente') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
