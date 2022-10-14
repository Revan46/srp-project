<style>
  .nav-header{
    border-bottom: 1px solid #dbdbdb;
    margin: 10px 5px 0;
    padding: 10px 10px;
  }
</style>
<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('Repository Informatika') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      {{-- Dashboard Site --}}
      <li class="nav-header"> Dashboard Site</li>
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Poster Day') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse
        {{ $activePage == 'documents_pd' ? ' show' : '' }}
        {{ $activePage == 'persyaratan_pd' ? ' show' : '' }}
        " id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'documents_pd' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('documents_pd') }}">
                <span class="sidebar-mini">
                  <i class='bx bxl-firebase'></i>
                </span>
                <span class="sidebar-normal">{{ __('Document PD') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'persyaratan_pd' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('persyaratan_pd') }}">
                <span class="sidebar-mini">
                  <i class='bx bxl-firebase'></i>
                </span>
                <span class="sidebar-normal"> {{ __('Persyaratan PD') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExam" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Skripsi dan TA') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse 
        {{ $activePage == 'documents_sta' ? ' show' : '' }}
        {{ $activePage == 'persyaratan_sta' ? ' show' : '' }}
        " id="laravelExam">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'documents_sta' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('documents_sta') }}">
                <span class="sidebar-mini">
                  <i class='bx bxl-firebase'></i>
                </span>
                <span class="sidebar-normal">{{ __('Document STA') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'persyaratan_sta' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('persyaratan_sta') }}">
                <span class="sidebar-mini">
                  <i class='bx bxl-firebase'></i>
                </span>
                <span class="sidebar-normal"> {{ __('Persyaratan STA') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      {{-- Admin Site --}}
      <li class="nav-header"> Admin Site</li>
      <li class="nav-item {{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users') }}">
          <i class='bx bxs-user-detail'></i>
            <p>{{ __('Users') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'validasi_pd' || $activePage == 'syarat_pd') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#PDDropDown" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Kebutuhan PD') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse
        {{ $activePage == 'validasi_pd' ? ' show' : '' }}
        {{ $activePage == 'syarat_pd' ? ' show' : '' }}
        " id="PDDropDown">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'validasi_pd' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('validasi_pd') }}">
                <span class="sidebar-mini">
                  <i class='bx bxl-firebase'></i>
                </span>
                <span class="sidebar-normal">{{ __('Validasi Poster Day') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'syarat_pd' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('syarat_pd') }}">
                <span class="sidebar-mini">
                  <i class='bx bxl-firebase'></i>
                </span>
                <span class="sidebar-normal"> {{ __('Syarat Poster Day') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#STADropDown" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Kebutuhan S/TA') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse 
        {{ $activePage == 'validasi_sta' ? ' show' : '' }}
        {{ $activePage == 'syarat_sta' ? ' show' : '' }}
        " id="STADropDown">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'validasi_sta' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('validasi_sta') }}">
                <span class="sidebar-mini">
                  <i class='bx bxl-firebase'></i>
                </span>
                <span class="sidebar-normal">{{ __('Validasi Skripsi dan TA') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'syarat_sta' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('syarat_sta') }}">
                <span class="sidebar-mini">
                  <i class='bx bxl-firebase'></i>
                </span>
                <span class="sidebar-normal"> {{ __('Syarat Skripsi dan TA') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      {{-- <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li> --}}
      {{-- <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li> --}}
    </ul>
  </div>
</div>
