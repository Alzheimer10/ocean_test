@extends('layouts.app')

@section('css')
@endsection

@section('content')
    <h1>PARTE 2: DESTREZA LÓGICA.</h1>
    <div class="row">
        <div class="col-xs-6">
            <h4>CATEGORIAS</h4>
            <div class="table-responsive">
                <table class="table" id="categorias">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>ID PADRE</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>0</td> <td>Carros</td>              <td></td>
                      </tr>
                      <tr>
                        <td>1</td> <td>Computadoras</td>        <td></td>
                      </tr>
                      <tr>
                        <td>2</td> <td>Rines</td>               <td>0</td>
                      </tr>
                      <tr>
                        <td>3</td> <td>Perfil Bajo</td>         <td>2</td>
                      </tr>
                      <tr>
                        <td>4</td> <td>Lujo</td>                <td>3</td>
                      </tr>
                      <tr>
                        <td>5</td> <td>Repuestos</td>           <td>0</td>
                      </tr>
                      <tr>
                        <td>6</td> <td>momo</td>                <td>4</td>
                      </tr>
                      <tr>
                        <td>7</td> <td>Software</td>            <td>1</td>
                      </tr>
                      <tr>
                        <td>8</td> <td>Motores</td>             <td>5</td>
                      </tr>
                      <tr>
                        <td>9</td> <td>Juegos</td>              <td>7</td>
                      </tr>
                      <tr>
                        <td>10</td> <td>Administrativos</td>    <td>7</td>
                      </tr>
                      <tr>
                        <td>11</td> <td>Animales</td>           <td></td>
                      </tr>
                      <tr>
                        <td>12</td> <td>Hardware</td>           <td>1</td>
                      </tr>
                      <tr>
                        <td>13</td> <td>Perros </td>            <td>11</td>
                      </tr>
                      <tr>
                        <td>14</td> <td>Gatos </td>             <td>11</td>
                      </tr>
                      <tr>
                        <td>15</td> <td>Hogar</td>              <td></td>
                      </tr>
                      <tr>
                        <td>16</td> <td>Estrategia</td>         <td>9</td>
                      </tr>
                      <tr>
                        <td>17</td> <td>Rol</td>                <td>9</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-xs-6">
            <h4>LISTADO</h4>
            <ul class="ul">
            </ul>

            <div class="row">
                <div class="col-xs-12">
                    <p>Se debe colocar el nombre y despues un valor numerico que representara el id_padre. <b>Deje el campo id_padre vacio si desea que no tenga padre.</b></p>
                </div>
                <form class="form" id="form">
                    <div class="col-xs-6">
                        <div class="form-group">
                          <label for="nombre">nombre</label>
                          <input type="text" class="form-control" id="nombre" required="false">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                          <label for="id_padre">id_padre</label>
                          <input type="number" class="form-control" id="id_padre" min="0" max="">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <button class="btn btn-primary" type="submit">añadir</button>
                    </div>
                </form>
            </div>
        </div>

    </div>


    <div class="row" style="margin-top: 20px">
        <div class="pull-left">
            <a href="{{ route('/') }}" class="btn btn-danger">MENU</a>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            var categorias = function(){
                var categorias=[];
                $("table tbody tr").each(function(i,e){
                
                    var tr = [];
                    $(this).find("td").each(function(index){
                        var td = {};
                        td[index] = $(this).html();
                        tr.push(td);
                    });
                    categorias.push(tr);    
                });
                
                // console.log(categorias);
                var auxCategorias=[];

                $('#id_padre').attr('max',categorias.length);

                var ul = $('ul').html({});
                $.each(categorias, function( index, value ) {
                    var categoria = {};
                    if(value[2][2]==''){
                        ul.append('<li>'+value[1][1]+' <ul id="'+value[0][0]+'"> </ul></li>');
                    }else{
                        var li = $('#' + value[2][2]);
                        // console.log(li);
                        li.append('<li>'+value[1][1]+' <ul id="'+value[0][0]+'"> </ul></li>');
                    }
                });
            };

            categorias();

            $( "#form" ).submit(function( event ) {
                event.preventDefault();
                nombre = $( "#nombre").val();
                id_padre = $( "#id_padre").val();
                var max = $('#id_padre').attr('max');
                $("table tbody").append('<tr> <td>'+max+'</td> <td>'+nombre+'</td> <td>'+id_padre+'</td> </tr>');
                categorias();
            });
        })
    </script>
@endsection
