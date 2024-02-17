@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                orders
            </h6>
            <div class="ml-auto">

            </div>
        </div>

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif

        <!-- @if (\Session::has('error'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('error') !!}</li>
                </ul>
            </div>
        @endif

        @if (\Session::has('error1'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('error1') !!}</li>
                </ul>
            </div>
        @endif -->

       {{-- @include('backend.orders.filter') --}}

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Ref ID</th>
                    <th>Trans Ref ID</th>
                    <th>User</th>
                    <!-- <th>Payment method</th> -->
                    <th>Amount</th>
                    <th>PDF Status</th>
                    <th>Status</th>
                    <th>Create date</th>
                    <th>Action</th>
                    <th>Delivery Status</th>
                    <th>Payment Status</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if(($orders ?? null) !== null && $orders->isNotEmpty())      
                    @forelse($orders as $order)
                        @php
                        $pdf = DB::table('temp')->where('session_id',$order->session_id)->first(); 
                        @endphp
                    <tr>
                            <td>
                                <a href="{{ route('admin.orders.show', $order) }}">
                                    {{ $order->ref_id }}
                                </a>
                            </td>
                            <td class="text-danger">{{ $order->trans_ref_id }}</td>
                            <td class="text-danger">{{ $order->user->full_name }}</td>
                            <!-- <td>{{ isset($order->paymentMethod->name) ? $order->paymentMethod->name : '' }}</td> -->
                            <td>{{ $order->currency() . $order->total }} </td>
                            <td>
                            @if(isset($pdf))
                                @if($pdf->epdf == NULL)
                                <p>PDF Not Generated</p>
                                @else
                                <a href="{{ asset('pdf/'.$pdf->epdf) }}" target="_blank"><i class="fas fa-file"></i></a>
                                @endif
                            @endif    
                            </td>
                            <td>{!! $order->statusWithBadge() !!}</td>
                            <td>{{ $order->created_at->format('Y-m-d h:i a') }}</td>
                        @if($order->status == 1)
                        <td class="proceed-btn">Proceeded</td>
                        @else
                            <td class="proceed-btn"><a href="javascript:void(0);" data-bs-toggle="modal" data-id="{{$order->id}}" data-bs-target="#proceedModal">Proceed</a></td>
                        @endif
                        <td>
                            @if($order->delivery_status == 0)
                                <a href="{{ route('admin.orders.delivery', $order->id) }}"
                                class="btn btn-sm ">
                                Delivery Confirm?
                                </a>
                                @else
                                <a class="btn btn-sm ">
                                Delivered
                                </a>
                                @endif

                            </td>

                            <td>
                            @if(isset($order->trans_ref_id))
                                
                                <p>Paid</p>
                                 
                            @endif
                             

                            </td>
                            <td>
                                <a href="javascript:void(0);"
                                onclick="if (confirm('Are you sure to delete this record?'))
                                    {document.getElementById('delete-order-{{ $order->id }}').submit();} else {return false;}"
                                class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <form action="{{ route('admin.orders.destroy', $order) }}"
                                    method="POST"
                                    id="delete-order-{{ $order->id }}" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="6">No orders found.</td>
                        </tr>
                    @endforelse
                @else
                    <tr>
                        <td class="text-center" colspan="6">No orders found.</td>
                    </tr>
                @endif
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="6">
                        <div class="float-right">
                            {!! $orders->appends(request()->all())->links() !!}
                        </div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- popup section -->
   @if(isset($order->id)) 
    <div class="modal fade admin-proceed-modal" id="proceedModal" tabindex="-1" aria-labelledby="proceedModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="proceedModalLabel">Package Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">

                <form id="package_form" method="POST" action="{{ route('admin.orders.order_shipment') }}">
                    @csrf
                    <input type="hidden" class="form-control" name="order_id" id="OrderId" value="{{ $order->id }}">

                    <div class="form-group">
                        <label for="weightInGrams">weight In Grams:</label>
                        <input type="number" class="form-control" id="weightInGrams" name="weightInGrams">
                    </div>
                    <div class="form-group">
                        <label for="packageFormatIdentifierssword">Package Format:</label>
                        <input type="text" class="form-control" id="packageFormatIdentifier" name="packageFormatIdentifier">
                    </div>
                    <div class="form-group">
                        <label for="heightInMms">Height In mm:</label>
                        <input type="number" class="form-control" id="heightInMms" name="heightInMms">
                    </div>
                    <div class="form-group">
                        <label for="widthInMms">Width In mm:</label>
                        <input type="number" class="form-control" id="widthInMms" name="widthInMms">
                    </div>
                    <div class="form-group">
                        <label for="depthInMms">Depth In mm:</label>
                        <input type="number" class="form-control" id="depthInMms" name="depthInMms">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div> -->
            </div>
        </div>
    </div>
   @endif
    
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="/js/jquery3.6.4.min.js"></script>
<script src="/js/jquery.validate1.16.0.min.js" defer></script>

<script>
    $(document).ready(function(){
        $('#proceedModal').on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).data('id');
            $("#OrderId").val(id);
        });
    });
</script>

<script>
     $(document).ready(function() {
      $("#package_form").validate({
    // Specify validation rules
        rules: {
            weightInGrams: {
              required: true,
          },
          packageFormatIdentifier: {
              required: true,
          },
          heightInMms: {
              required: true,
          },
          widthInMms: {
              required: true,
          },
          depthInMms: {
              required: true,
          },
        },
    // Specify validation error messages
        messages: {
            weightInGrams: {
           required: "Please fill this field",
           
          },
          packageFormatIdentifier: {
           required: "Please fill this field",
          },
          heightInMms: {
           required: "Please fill this field",
          },
          widthInMms: {
           required: "Please fill this field",
          },
          depthInMms: {
           required: "Please fill this field",
          },
        }
    });
      });

</script>    