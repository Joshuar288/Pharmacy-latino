@extends('layouts.app')

@section('template_title')
    Entrancessale
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Entrancessale') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('entrancessales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Entrance</th>
										<th>Id Sale</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($entrancessales as $entrancessale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $entrancessale->id_entrance }}</td>
											<td>{{ $entrancessale->id_sale }}</td>

                                            <td>
                                                <form action="{{ route('entrancessales.destroy',$entrancessale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('entrancessales.show',$entrancessale->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('entrancessales.edit',$entrancessale->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $entrancessales->links() !!}
            </div>
        </div>
    </div>
@endsection
