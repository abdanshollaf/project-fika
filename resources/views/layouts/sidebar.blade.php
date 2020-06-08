@if(Auth::check())
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="{{ route('home') }}"
                            class="{{ Request::is('home') ? 'active' : '' }}"><i
                                class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                    <li><a href="{{ route('datajurnal') }}"
                            class="{{ Request::is('datajurnal') ? 'active' : '' }}"><i
                                class="lnr lnr-database"></i> <span>Data
                                jurnal</span></a></li>
                    <li><a href="{{ route('hasil') }}"
                            class="{{ Request::is('hasil_pengujian') ? 'active' : '' }}"><i
                                class="lnr lnr-screen"></i> <span>Hasil
                                Pengujian</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
@endif
