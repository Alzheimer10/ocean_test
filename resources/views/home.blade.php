@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height text-center">
            <div class="content">
                <div class="title m-b-md">
                    PRUEBA DE OCEAN
                    <p style="font-size: 2rem; margin: auto; padding: 0;">Carlos Anselmi</p>
                </div>

                <div class="links">
                    <a href="{{ url('/trabajadors') }}">DESTREZA LÓGICA 1</a>
                    <a href="{{ url('/categorias') }}">DESTREZA LÓGICA 2</a>
                </div>
            </div>
        </div>
@endsection
