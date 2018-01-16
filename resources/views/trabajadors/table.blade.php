<table class="table table-responsive" id="trabajadors-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Cargo</th>
            <th>Email</th>
            <th>Activo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($trabajadors as $trabajador)
        <tr>
            <td>{!! $trabajador->nombre !!}</td>
            <td>{!! $trabajador->apellido !!}</td>
            <td>{!! $trabajador->cedula !!}</td>
            <td>{!! $trabajador->cargo !!}</td>
            <td>{!! $trabajador->email !!}</td>
            <td>{!! $trabajador->activo !!}</td>
            <td>
                {!! Form::open(['route' => ['trabajadors.destroy', $trabajador->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('trabajadors.show', [$trabajador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('trabajadors.edit', [$trabajador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>