@extends('layouts.app')
@section('title', 'User Address')
@section('content')
<body class="dashboard-open">
    <!-- <section class="breadcrumb-area comon-padding" style="background-color: #09c6a2">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Addresses</h2>
                <ul>
                    <li><a href="{{route('home')}}">home</a></li>
                    <li> My addresses</li>
                </ul>
            </div>
        </div>
    </section> -->
    @php
       $id = auth()->user()->id;
       $address = DB::table('delivery_address')->where('user_id',$id)->first();
       $b_address = DB::table('billing_address')->where('user_id',$id)->first();
    @endphp
    <section class="user-dashboard py-5">
    @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
        <div class="container">
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-dash-info">
                        <div class="dashboard-left-inr">
                            <div class="d-md-flex d-user-title">
                                <h2 class="h5 text-uppercase mb-4">Delivery Addresses</h2>
                                
                                <!-- <div class="ml-auto">
                                    <button type="button" wire:click.prevent="createAddress" class="btn btn-dark rounded shadow">
                                        Add new address
                                    </button>
                                </div> -->
                            </div>
                            <!-- <form action="{{ route('delivery_address') }}" method="post" id="d_address"> -->
                            <form action="{{ route('update.address') }}" method="post" id="d_address">
                                @csrf
                                <input type="hidden" name="id" value="{{ $address->id??'' }}">
                                {{-- <input type="hidden" name="user_id" value="{{ $address->user_id??'' }}"> --}}

                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <label class="text-small text-uppercase" for="address_title">City</label>
                                        <input class="form-control" name="city" wire:model="address_title" type="text" value="{{ $address->city??'' }}">
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label class="text-small text-uppercase" for="address_title">Address</label>
                                        <input class="form-control" id="autocomplete" name="address" wire:model="address_title" type="text" value="{{ $address->address??'' }}">
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label class="text-small text-uppercase" for="address_title">Zip Code</label>
                                        <input class="form-control" name="zip_code" wire:model="address_title" type="text" value="{{ $address->zip_code??'' }}">
                                    </div>
                                    <div class="col-lg-12 form-group pt-3">
                                        <button class="btn btn-dark" type="submit"> Update </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
          
            <!-- other delivery address -->
                <div class="d-flex">
                    <h2 class="h5 text-uppercase mb-4">Other Address</h2>
                </div>
                <div class="my-4">
                        <div class="table-responsive" x-show="showOrderList" x-on:click.away="showOrderList = true">
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Address Number</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Zip Code</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $user_id = Auth::user()->id;
                                            $delivery_address = DB::table('delivery_address')->where('user_id', $user_id)->whereNotIn('id', [1])->get();
                                            @endphp
                                            @foreach($delivery_address as $addresses)
                                            <tr >
                                                <td>{{ $addresses->id }}</td>
                                                <td>{{ $addresses->address }}</td>
                                                <td>{{ $addresses->city }}</td>
                                                <td>{{ $addresses->zip_code }}</td>
                                                <td>
                                                    <a href="{{ route('address.delete', ['id' => $addresses->id ]) }}"><button type="button" class="btn btn-link text-info">Delete</button></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @if($delivery_address == '')
                                                    <tr>
                                                        <td colspan="5">
                                                            <p class="text-center">No orders found.</p>
                                                        </td>
                                                    </tr>
                                            @endif
                                        </tbody>
                                    </table>
                        </div>
                </div>
                <!-- other delivery address -->



             <!-- billing address -->
            <!-- @if(isset($b_address))
                <div class="col-lg-12">
                    <div class="user-dash-info">
                        <div class="dashboard-left-inr">
                            <div class="d-md-flex d-user-title">
                                <h2 class="h5 text-uppercase mb-4">Billing Addresses</h2>
                            </div>
                            <form action="{{ route('update.bill.address') }}" method="post" id="b_address">
                                @csrf
                                <input type="hidden" name="id" value="{{ $b_address->id }}">
                                <input type="hidden" name="user_id" value="{{ $address->user_id }}">

                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <label class="text-small text-uppercase" for="address_title">City</label>
                                        <input class="form-control" name="city" wire:model="address_title" type="text" value="{{ $b_address->city }}">
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label class="text-small text-uppercase" for="address_title">Address</label>
                                        <input class="form-control" name="address" wire:model="address_title" type="text" value="{{ $b_address->address }}">
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label class="text-small text-uppercase" for="address_title">Zip Code</label>
                                        <input class="form-control" name="zip_code" wire:model="address_title" type="text" value="{{ $b_address->zip_code }}">
                                    </div>
                                    <div class="col-lg-12 form-group pt-3">
                                        <button class="btn btn-dark" type="submit">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               @endif  -->
                <!-- billing address -->

                <div class="col-lg-4">
                    @include('partials.frontend.user.sidebar')
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6w6K6XGM-FfYNTKiSNmgcWFzwOqXqWaw&libraries=places">
</script>
<script>
const apiKey = "AIzaSyB6w6K6XGM-FfYNTKiSNmgcWFzwOqXqWaw";
let autocomplete;
let address1Field;
let address2Field;
let postalField;

function initAutocomplete() {
  address1Field = document.querySelector("[name='address']");
  address2Field = document.querySelector("[name='city']");
  postalField = document.querySelector("[name='zip_code']");
  // Create the autocomplete object, restricting the search predictions to
  // addresses in the US and Canada.
    autocomplete = new google.maps.places.Autocomplete(address1Field, {
    componentRestrictions: { country: ["uk"] },
    fields: ["address_components", "geometry"],
    types: ["address"],
  });
  address1Field.focus();
  // When the user selects an address from the drop-down, populate the
  // address fields in the form.
  autocomplete.addListener("place_changed", fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  const place = autocomplete.getPlace();
  let address1 = "";
  let postcode = "";

  // Get each component of the address from the place details,
  // and then fill-in the corresponding field on the form.
  // place.address_components are google.maps.GeocoderAddressComponent objects
  // which are documented at http://goo.gle/3l5i5Mr
  for (const component of place.address_components) {
    // @ts-ignore remove once typings fixed
    const componentType = component.types[0];
        switch (componentType) {
      case "street_number": {
        address1 = `${component.long_name} ${address1}`;
        break;
      }

      case "route": {
        address1 += component.short_name;
        break;
      }

      case "postal_code": 
      case "postal_code_suffix": 
    {
        postcode = component.long_name;
        break;
      }

      case "locality":
      case "postal_town":
        document.querySelector("[name='city']").value = component.long_name;
        break;
    //   case "administrative_area_level_1": {
    //     document.querySelector("#state").value = component.short_name;
    //     break;
    //   }
    //   case "country":
    //     document.querySelector("#country").value = component.long_name;
    //     break;
    }
  }
  address1Field.value = address1;
  postalField.value = postcode;
  // After filling the form with address components from the Autocomplete
  // prediction, set cursor focus on the second address line to encourage
  // entry of subpremise information such as apartment, unit, or floor number.
  address2Field.focus();
}

window.initAutocomplete = initAutocomplete;
window.initAutocomplete();

</script>

    <!-- <script type="text/javascript"  src="https://maps.google.com/maps/api/js?key={{env('GOOGLE_MAP_KEY')}}&libraries=places" ></script>
<script>
    //  getLocationDetails( '221B Baker Street, London, UK', "{{env('GOOGLE_MAP_KEY')}}");
const apiKey = "{{env('GOOGLE_MAP_KEY')}}";
google.maps.event.addDomListener(window, 'load', initialize);   
function initialize() { 
var input = document.getElementById('autocomplete');     
var autocomplete = new google.maps.places.Autocomplete(input, {      
    types: ['geocode'], // Restrict to addresses      
     componentRestrictions: { country: 'UK' }, // Restrict to Algeria     
    });         
    autocomplete.addListener('place_changed', function () {    
       
        var place = autocomplete.getPlace();   
        console.log(place.adr_address);
        getLocationDetails(place.adr_address, apiKey)
  .then(({ city, country, pincode }) => {
    $('input[name="zip_code"]').val(pincode);
    $('input[name="city"]').val(city);
   
  });


        $('#latitude').val(place.geometry['location'].lat()); 
        
        $('#longitude').val(place.geometry['location'].lng());    
        
        $("#latitudeArea").removeClass("d-none");    
        
        $("#longtitudeArea").removeClass("d-none");         
       });
    }



    function getLocationDetails(address, apiKey) {
  const apiUrl = `https://maps.googleapis.com/maps/api/geocode/json?address=${encodeURIComponent(address)}&key=${apiKey}`;

  return fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
      if (data.status === "OK") {
        const result = data.results[0];
        const city = result.address_components.find(comp => comp.types.includes("locality"))?.long_name || null;
        const country = result.address_components.find(comp => comp.types.includes("country"))?.long_name || null;
        const pincode = result.address_components.find(comp => comp.types.includes("postal_code"))?.long_name || null;

        return { city, country, pincode };
      } else {
        throw new Error("Geocoding API request failed");
      }
    })
    .catch(error => {
      console.error("Error fetching location details:", error);
      return { city: null, country: null, pincode: null };
    });
}




</script>
</body>
@endsection



 <!-- <div class="my-2">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>City</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                     $address = DB::table('delivery_address')->get();
                                    @endphp
                                     @foreach($address as $addr)
                                        <tr>
                                            <td>{{ $addr->city }}</td>
                                            <td>{{ $addr->address }}</td>
                                            <td width="10%"></td>
                                        </tr>
                                     @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> --> -->