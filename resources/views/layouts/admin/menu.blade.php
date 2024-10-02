<!-- Sidebar Menu -->
@if (auth()->user()->roles_id == 1)
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link text-white {{(Request::routeIs('admin.dashboard') ? 'active':'')}}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.siswa.index')}}" class="nav-link text-white {{(Request::routeIs('admin.siswa.index') ? 'active':'')}}">
                    <i class="nav-icon fs-5 fa fa-user-circle"></i>
                    <p>
                        Data Siswa
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.guru.index')}}" class="nav-link text-white {{(Request::routeIs('admin.guru.index') ? 'active':'')}}">
                    <i class="nav-icon fs-5 fa fa-user-circle"></i>
                    <p>
                        Data guru
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.jadwal.index')}}" class="nav-link text-white  {{(Request::routeIs('admin.jadwal.index') ? 'active':'')}}">
                    <i class="nav-icon fs-5 fa fa-calendar-alt"></i>
                    <p>
                        Jadwal Pelajaran
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.pengumuman.index')}}" class="nav-link text-white {{(Request::routeIs('admin.pengumuman.index') ? 'active':'')}}">
                    <i class="nav-icon fs-5 fa fa-bullhorn"></i>
                    <p>
                        Pengumuman
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.semester.index')}}" class="nav-link text-white  {{(Request::routeIs('admin.semester.index') ? 'active':'')}}">
                    <i class="nav-icon fas fa-graduation-cap"></i>
                    <p>
                        Semester
                    </p>
                </a>
            </li>            
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
                <a href="#" class="nav-link text-white @yield('')"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </nav>
@elseif (auth()->user()->roles_id == 2)
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('guru.dashboard')}}" class="nav-link text-white {{(Request::routeIs('guru.dashboard') ? 'active':'')}}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('guru.profil.edit', auth()->user()->id)}}" class="nav-link text-white {{(Request::routeIs('guru.profil.edit') ? 'active':'')}}">
                    <i class="nav-icon fs-5 fa fa-user-circle"></i>
                    <p>
                        Profil
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('guru.presensi.index')}}" class="nav-link text-white {{(Request::routeIs('guru.presensi.index') ? 'active':'')}}">
                    <i class="nav-icon fs-5 fa fa-check-circle"></i>
                    <p>
                        Presensi Siswa
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('guru.jadwal.jadwal')}}" class="nav-link text-white {{(Request::routeIs('guru.jadwal.jadwal') ? 'active':'')}}">
                    <i class="nav-icon fs-5 fa fa-calendar-alt"></i>
                    <p>
                        Jadwal Pelajaran
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('guru.nilai.index')}}" class="nav-link text-white {{(Request::routeIs('guru.nilai.index') ? 'active':'')}}">
                    <i class="nav-icon fs-5 fa fa-graduation-cap"></i>
                    <p>
                        Nilai Siswa
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('guru.arsip.index')}}" class="nav-link text-white {{(Request::routeIs('guru.arsip.index') ? 'active':'')}}">
                    <i class="nav-icon fs-5 fa fa-archive"></i>
                    <p>
                        Arsip Digital
                    </p>
                </a>
            </li>
            
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
                <a href="#" class="nav-link text-white @yield('')"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </nav>
@elseif (auth()->user()->roles_id == 3)
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link text-white {{(Request::routeIs('dashboard') ? 'active':'')}}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('siswa.profil.edit', auth()->user()->id)}}" class="nav-link text-white {{(Request::routeIs('siswa.profil.edit') ? 'active':'')}}">
                    <i class="nav-icon fs-5 fa fa-user-circle"></i>
                    <p>
                        Profil
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('siswa.jadwal.jadwal')}}" class="nav-link text-white {{(Request::routeIs('siswa.jadwal.jadwal') ? 'active':'')}}">
                    <i class="nav-icon fs-5 fa fa-calendar-alt"></i>
                    <p>
                        Jadwal Pelajaran
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('siswa.semester.semester')}}" class="nav-link text-white  {{(Request::routeIs('siswa.semester.semester') ? 'active':'')}}">
                    <i class="nav-icon fs-5 fa fa-graduation-cap"></i>
                    <p>
                        Nilai
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('siswa.arsip.arsip')}}" class="nav-link text-white {{(Request::routeIs('siswa.arsip.arsip') ? 'active':'')}}">
                    <i class="nav-icon fs-5 fa fa-archive"></i>
                    <p>
                        Arsip Digital
                    </p>
                </a>
            </li>
            
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
                <a href="#" class="nav-link text-white @yield('')"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </nav>
@endif
