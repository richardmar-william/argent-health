@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
    <div class="card-header py-3 d-md-flex d-sm-block">
            <h6 class="m-0 mb-3 mb-md-0 font-weight-bold text-primary">
            </h6>
            <div class="ml-auto">
                <a href="{{ route('admin.affiliate.index') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="text">Back</span>
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>DateTime</th>
                    <th>Ammount</th>
                    <th class="text-center" style="width: 30px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($data as $datetime => $total_commission)
                    <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $datetime }}</td>
                     <td>{{ $total_commission }}</td>
                        <td>
                        <div class="btn-group btn-group-sm">
                        <a href="{{ route('admin.accept.payment', ['date'=>$datetime]) }}" class="btn btn-sm btn-primary">
                                    Pay
                                </a>
                            </div>
                        </td> 
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="8">Payment request is not found.</td>
                    </tr>
                @endforelse
                </tbody>
                <!--  -->
                </tfoot>
            </table>
        </div>
    </div>
@endsection
