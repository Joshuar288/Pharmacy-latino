@extends('layouts.app')

@section('template_title')
    Pharmasproduct
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Productos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pharmasproducts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>

										<th>Nombre</th>
										<th>Tipo</th>
										<th>Fecha de fabricacion</th>
										<th>Fecha de Vencimiento</th>
										<th>Precio de compra</th>
										<th>Precio de venta</th>
										<th>Dosis</th>
										<th>Cantidad</th>
										<th>Proveedor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pharmasproducts as $pharmasproduct)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $pharmasproduct->name }}</td>
											<td>{{ $pharmasproduct->type }}</td>
											<td>{{ $pharmasproduct->datr_fabication }}</td>
											<td>{{ $pharmasproduct->date_due }}</td>
											<td>{{ $pharmasproduct->purchase_price }}</td>
											<td>{{ $pharmasproduct->sale_price }}</td>
											<td>{{ $pharmasproduct->doses }}</td>
											<td>{{ $pharmasproduct->quantity }}</td>
											<td>{{ $pharmasproduct->providere->name_provider }}</td>

                                            <td>
                                                <form action="{{ route('pharmasproducts.destroy',$pharmasproduct->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pharmasproducts.show',$pharmasproduct->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pharmasproducts.edit',$pharmasproduct->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $pharmasproducts->links() !!}
            </div>
        </div>
    </div>
@endsection
