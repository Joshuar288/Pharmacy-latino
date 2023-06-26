@extends('layouts.app')

@section('template_title')
    Entrance
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Entrance') }}
                            </span>


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

										<th>Nombre</th>
										<th>Tipo</th>
										<th>Fecha de fabricacion</th>
										<th>Fecha de vencimiento</th>
										<th>Precio de compra</th>
										<th>Precio de venta</th>
										<th>Dosis</th>
										<th>Cantidad</th>
										<th>Proveedor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($entrances as $entrance)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $entrance->name }}</td>
											<td>{{ $entrance->type }}</td>
											<td>{{ $entrance->datr_fabication }}</td>
											<td>{{ $entrance->date_due }}</td>
											<td>{{ $entrance->purchase_price }}</td>
											<td>{{ $entrance->sale_price }}</td>
											<td>{{ $entrance->doses }}</td>
											<td>{{ $entrance->quantity }}</td>
											<td>{{ $entrance->providere->name_provider }}</td>

                                            <td>
                                                <form action="{{ route('entrances.destroy',$entrance->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('entrances.show',$entrance->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    @csrf

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $entrances->links() !!}
            </div>
        </div>
    </div>
@endsection
