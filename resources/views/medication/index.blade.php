@extends('layouts.app')

@section('template_title')
    Medication
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Medication') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('medications.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name</th>
										<th>Type</th>
										<th>Datr Fabication</th>
										<th>Date Due</th>
										<th>Purchase Price</th>
										<th>Sale Price</th>
										<th>Doses</th>
										<th>Quantity</th>
										<th>Id Provider</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($medications as $medication)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $medication->name }}</td>
											<td>{{ $medication->type }}</td>
											<td>{{ $medication->datr_fabication }}</td>
											<td>{{ $medication->date_due }}</td>
											<td>{{ $medication->purchase_price }}</td>
											<td>{{ $medication->sale_price }}</td>
											<td>{{ $medication->doses }}</td>
											<td>{{ $medication->quantity }}</td>
											<td>{{ $medication->id_provider }}</td>

                                            <td>
                                                <form action="{{ route('medications.destroy',$medication->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('medications.show',$medication->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('medications.edit',$medication->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $medications->links() !!}
            </div>
        </div>
    </div>
@endsection
