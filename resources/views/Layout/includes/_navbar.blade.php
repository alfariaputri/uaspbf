<nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
      <h4 class="p-large">RENTAL.IN MOBIL</h4>
      </div>
      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <form class="navbar-form navbar-left">
          <div class="input-group">
            <input type="text" value="" class="form-control" placeholder="Search dashboard...">
            <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
          </div>
        </form>
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('admin/assets/img/user.png')}}" class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" ><i class="mdi mdi-power text-danger"></i>     Logout</a>     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">         @csrf     </form></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
