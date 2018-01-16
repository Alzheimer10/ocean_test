@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Trabajadores</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('trabajadors.create') !!}">NUEVO TRABAJADOR</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('trabajadors.table')
            </div>
        </div>
        <div class="row">
            <div class="pull-left">
                <a href="{{ route('/') }}" class="btn btn-danger">MENU</a>
            </div>
        </div>      
    </div>
@endsection

