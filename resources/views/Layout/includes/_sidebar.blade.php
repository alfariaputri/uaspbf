<div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <br>
            <li><a href="{{ route('dashboard.index') }}" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <li><a href="{{ route('user.index') }}" class=""><i class="lnr lnr-users"></i> <span>Manage Penyewa</span></a></li>
            <li><a href="{{ route('mobil.index') }}" class=""><i class="lnr lnr-car"></i> <span>Manage Mobil</span></a></li>
            <li>
              <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-briefcase"></i> <span>Manage Penyewaan</span> <i class="icon-submenu lnr lnr-chevron-right"></i></a>
              <div id="subPages" class="collapse ">
                <ul class="nav">
                  <li><a href="{{ route('sewa.index') }}" class="">Data Sewa</a></li>
                  <li><a href="{{ route('kembali.index') }}" class="">Data Kembali</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
