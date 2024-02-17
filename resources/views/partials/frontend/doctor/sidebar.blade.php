<div class="user-sidebar card border-0 rounded-0 p-lg-4 bg-light">
    <div class="side-bar">
        <i class="fa-solid fa-bars"></i>
    </div> 
    <div class="card-body">
        <!-- <div class="side-bar-box {{ Route::currentRouteName() == 'doctor.dashboard' ? 'bg-dark' : 'bg-light' }}">
            <a class="text-decoration-none"  href="{{ route('doctor.dashboard') }}">
                <strong class="{{ Route::currentRouteName() == 'doctor.dashboard' ? 'text-white' : '' }} text-uppercase font-weight-bold">Dashboard</strong>
            </a>
        </div> -->

        <div class="side-bar-box {{ Route::currentRouteName() == 'doctor.profile' ? 'bg-dark' : 'bg-light' }}">
            <a class="text-decoration-none" href="{{ route('doctor.profile') }}">
                <strong class="{{ Route::currentRouteName() == 'doctor.profile' ? 'text-white' : '' }} text-uppercase font-weight-bold">Profile</strong>
            </a>
        </div>

        <div class="side-bar-box {{ Route::currentRouteName() == 'doctor.new_patient_history' ? 'bg-dark' : 'bg-light' }}">
            <a class="text-decoration-none" href="{{ route('doctor.new_patient_history') }}">
                <strong class="{{ Route::currentRouteName() == 'doctor.new_patient_history' ? 'text-white' : '' }} text-uppercase font-weight-bold">New Patient History</strong>
            </a>
        </div>

        <div class="side-bar-box {{ Route::currentRouteName() == 'doctor.patient_history' ? 'bg-dark' : 'bg-light' }}">
            <a class="text-decoration-none" href="{{ route('doctor.patient_history') }}">
                <strong class="{{ Route::currentRouteName() == 'doctor.patient_history' ? 'text-white' : '' }} text-uppercase font-weight-bold">Patient History</strong>
            </a>
        </div>
        
        <!-- <div class="{{ Route::currentRouteName() == 'doctor.addresses' ? 'bg-dark' : 'bg-light' }}">
            <a class="text-decoration-none"  href="{{ ('doctor.addresses') }}">
                <strong class="{{ Route::currentRouteName() == 'doctor.addresses' ? 'text-white' : '' }} text-uppercase font-weight-bold">Addresses</strong>
            </a>
        </div> -->

        <!-- <div class="{{ Route::currentRouteName() == 'doctor.orders' ? 'bg-dark' : 'bg-light' }}">
            <a class="text-decoration-none"  href="{{ ('doctor.orders') }}">
                <strong class="{{ Route::currentRouteName() == 'doctor.orders' ? 'text-white' : '' }} text-uppercase font-weight-bold">Orders</strong>
            </a>
        </div> -->

        <div class="bg-light side-bar-box">
            <a class="text-decoration-none"  href="javascript:void(0);" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <strong class="text-uppercase font-weight-bold">Logout</strong>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

    </div>
</div>



<script>
$(".side-bar").click(function(){
     $(this).toggleClass("open");
    $(".user-sidebar").toggleClass("open");
});
</script>
