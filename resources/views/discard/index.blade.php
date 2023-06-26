@extends('layouts.app')

@section('template_title')
    Discard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Descarte') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('discards.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Razon</th>
										<th>Cantidad</th>
										<th>Producto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($discards as $discard)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $discard->reason }}</td>
											<td>{{ $discard->quantity }}</td>
											<td>{{ $discard->pharmasproduct->name}}</td>

                                            <td>
                                                <form action="{{ route('discards.destroy',$discard->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('discards.show',$discard->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('discards.edit',$discard->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $discards->links() !!}
            </div>
        </div>
    </div>
@endsection
