@extends('layouts.app')

@section('template_title')
    Batchesmedication
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lotes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('batchesmedications.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Lote') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>

										<th>Nombre</th>
										<th>Tipo</th>
										<th>Fecha de fabricacion</th>
										<th>Fecha de vencimiento</th>
										<th>Precio de compra</th>
										<th>Precio de Venta</th>
										<th>Dosis</th>
										<th>Cantidad</th>
										<th>Proveedores</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($batchesmedications as $batchesmedication)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $batchesmedication->name }}</td>
											<td>{{ $batchesmedication->type }}</td>
											<td>{{ $batchesmedication->datr_fabication }}</td>
											<td>{{ $batchesmedication->date_due }}</td>
											<td>{{ $batchesmedication->purchase_price }}</td>
											<td>{{ $batchesmedication->sale_price }}</td>
											<td>{{ $batchesmedication->doses }}</td>
											<td>{{ $batchesmedication->quantity }}</td>
											<td>{{ $batchesmedication->providere->name_provider }}</td>

                                            <td>
                                                <form action="{{ route('batchesmedications.destroy',$batchesmedication->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('batchesmedications.show',$batchesmedication->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('batchesmedications.edit',$batchesmedication->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $batchesmedications->links() !!}
            </div>
        </div>
    </div>
@endsection