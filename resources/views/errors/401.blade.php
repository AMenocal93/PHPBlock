@extends('errors::minimal')

@section('title', __('No autorizado'))
@section('code', '401')
@section('message', __('Usuario No autorizado. Favor contacte al administrador'))
