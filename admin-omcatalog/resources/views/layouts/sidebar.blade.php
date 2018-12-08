<div class="user-panel">
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
      
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Materials</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('materials') }}"><i class="fa fa-circle-o"></i>List of Materials</a>
                </li>
                <li><a href="{{ url('materials/habis') }}"><i class="fa fa-circle-o"></i>Sold Out Materials</a>
                </li>
                <li><a href="{{ url('materials/create') }}"><i class="fa fa-circle-o"></i>Add Materials</a>
                </li>
                </li>
              </ul>
            </li>

            <li>
              <a href="{{ url('categories') }}">
                <i class="fa fa-amazon"></i> <span>Categories</span>
              </a>
            </li>

            <li>
              <a href="{{ url('confirmations') }}">
                <i class="fa fa-opera"></i> <span>Confirmation of Payment</span>
              </a>
            </li>

            <li>
              <a href="{{ url('orders') }}">
                <i class="fa fa-adjust"></i> <span>List of Orders</span>
              </a>
            </li>

            <li>
              <a href="{{ url('keluar') }}">
                <i class="fa fa-adjust"></i> <span>Logout</span>
              </a>
            </li>
            
          </ul>