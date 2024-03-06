<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="{{ asset('assets') }}/images/app_logo.png"  class="logo-icon-2" alt="" />
        </div>
        <a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="{{ Route::is('admin.dashboard') ? 'mm-active' : '' }}">
            <a href="{{route('admin.dashboard')}}">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Web Apps</li>
        <li class="{{ Route::is('admin.profile') ? 'mm-active' : '' }}">
            <a href="{{route('admin.profile')}}">
                <div class="parent-icon icon-color-4"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">User Profile</div>
            </a>
        </li>




                <li>
                <a class="{{ Route::is('admin.profile') ? 'mm-active' : '' }} has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-1"> <i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Employe</div>
                </a>
                <ul>
                <li> <a href="{{route('admin.employe')}}"><i class="bx bx-right-arrow-alt"></i>Add Employe</a>
                </li>
                <li> <a href="{{route('admin.allempoye')}}"><i class="bx bx-right-arrow-alt"></i>All Employe</a>
                </li>
                </ul>
                </li>

    </ul>
    <!--end navigation-->
</div>
