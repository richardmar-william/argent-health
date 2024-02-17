<div class="user-sidebar card border-0 rounded-0 p-lg-4 bg-light">
    <div class="side-bar">
        <i class="fa-solid fa-bars"></i>
    </div> 
    <div class="card-body">
        <!-- <div class="{{ Route::currentRouteName() == 'user.dashboard' ? 'bg-dark' : 'bg-light' }}">
            <a class="text-decoration-none"  href="{{ route('user.dashboard') }}">
                <strong class="{{ Route::currentRouteName() == 'user.dashboard' ? 'text-white' : '' }} text-uppercase font-weight-bold">Dashboard</strong>
            </a>
        </div> -->

        <div class="{{ Route::currentRouteName() == 'user.profile' ? 'bg-dark' : 'bg-light' }}">
            <a class="text-decoration-none" href="{{ route('user.profile') }}">
                <strong class="{{ Route::currentRouteName() == 'user.profile' ? 'text-white' : '' }} text-uppercase font-weight-bold">Profile</strong>
            </a>
        </div>

        <div class="{{ Route::currentRouteName() == 'user.addresses' ? 'bg-dark' : 'bg-light' }}">
            <a class="text-decoration-none"  href="{{ route('user.addresses') }}">
                <strong class="{{ Route::currentRouteName() == 'user.addresses' ? 'text-white' : '' }} text-uppercase font-weight-bold">Addresses</strong>
            </a>
        </div>

        <div class="{{ Route::currentRouteName() == 'user.orders' ? 'bg-dark' : 'bg-light' }}">
            <a class="text-decoration-none"  href="{{ route('user.orders') }}">
                <strong class="{{ Route::currentRouteName() == 'user.orders' ? 'text-white' : '' }} text-uppercase font-weight-bold">Orders</strong>
            </a>
        </div>

        <div class="bg-light">
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