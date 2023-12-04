@extends('layouts.app')

@section('template_title')
    Calendario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Calendario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('calendarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Trabajador</th>
										<th>Id Trabajo</th>
										<th>Fecha</th>
										<th>Hora Entrada</th>
										<th>Hora Salida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($calendarios as $calendario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $calendario->ID_Trabajador }}</td>
											<td>{{ $calendario->ID_Trabajo }}</td>
											<td>{{ $calendario->fecha }}</td>
											<td>{{ $calendario->hora_Entrada }}</td>
											<td>{{ $calendario->hora_Salida }}</td>

                                            <td>
                                                <form action="{{ route('calendarios.destroy',$calendario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('calendarios.show',$calendario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('calendarios.edit',$calendario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $calendarios->links() !!}
            </div>
        </div>
    </div>
@endsection
