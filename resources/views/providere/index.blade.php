@extends('layouts.app')

@section('template_title')
    Providere
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proveedor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('provideres.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar') }}
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

										<th>Nombre de proveedor</th>
										<th>Direccion</th>
										<th>Correo electronico</th>
										<th>Numero telefonico</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($provideres as $providere)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $providere->name_provider }}</td>
											<td>{{ $providere->address }}</td>
											<td>{{ $providere->address_mail }}</td>
											<td>{{ $providere->number_phone }}</td>

                                            <td>
                                                <form action="{{ route('provideres.destroy',$providere->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('provideres.show',$providere->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('provideres.edit',$providere->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $provideres->links() !!}
            </div>
        </div>
    </div>
@endsection
