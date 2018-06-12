
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height: auto;">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">

              <img src="{{url('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{Auth::user()->name}} </p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu tree" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-globe"></i> <span> Countries </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li class="active"><a href="{{url('/adminpanel/countries')}}"><i class="fa fa-flag-o"></i> Countries </a></li>

              </ul>
            </li>

            <li class="active treeview">
              <a href="#">
                <i class="fa fa-globe"></i> <span> Cities </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li class="active"><a href="{{url('/adminpanel/cities')}}"><i class="fa fa-flag-o"></i> Cities </a></li>

              </ul>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-plane"></i> <span> Airlines </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li class="active"><a href="{{url('/adminpanel/airlines')}}"><i class="fa fa-plane"></i> Airlines </a></li>

              </ul>
            </li>

            <li class="active treeview">
              <a href="#">
                <i class="fa fa-plane"></i> <span> Flights </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li class="active"><a href="{{url('/adminpanel/flights')}}"><i class="fa fa-plane"></i> Flights </a></li>
                <li class="active"><a href="{{url('/adminpanel/flights/add')}}"><i class="fa fa-plus"></i> add  Flights </a></li>

              </ul>
            </li>

            <li class="active treeview">
              <a href="#">
                <i class="fa fa-user"></i> <span> Traveller </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li class="active"><a href="{{url('/adminpanel/travellers')}}"><i class="fa fa-user"></i> Travellers </a></li>



              </ul>
            </li>



          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
