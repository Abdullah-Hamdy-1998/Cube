<ul class="navbar-right d-flex list-inline float-right mb-0">

    <li class="dropdown notification-list">
        <div class="dropdown notification-list nav-pro-img">
            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown"
                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('images/avatars/' . auth()->user()->avatar) }}" alt="user" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                <a class="dropdown-item d-block" href="#"><i class="mdi mdi-settings m-r-5"></i>
                    Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-power text-danger"></i>Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </li>

</ul>

<ul class="list-inline menu-left mb-0">
    <li class="float-left">
        <button class="button-menu-mobile open-left waves-effect waves-light">
            <i class="mdi mdi-menu"></i>
        </button>
    </li>
</ul>
