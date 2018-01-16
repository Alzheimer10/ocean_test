@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1> Trabajador </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('trabajadors.show_fields')
                    <a href="{!! route('trabajadors.index') !!}" class="btn btn-default">REGRESAR</a>
                </div>
            </div>
        </div>
    </div>
@endsection
