<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{backpack_url('page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>

<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/place') }}"><i class="fa fa-key"></i> <span>Place</span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/parking') }}"><i class="fa fa-car"></i> <span>Parking</span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/shop') }}"><i class="fa fa-shopping-bag"></i> <span>Shop</span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/transport') }}"><i class="fa fa-car"></i> <span>Transport</span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/hotel') }}"><i class="fa fa-car"></i> <span>Hotels</span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/inspiration') }}"><i class="fa fa-user"></i> <span>Inspiration/Quotes</span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/tour') }}"><i class="fa fa-user"></i> <span>Tours</span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/embasy') }}"><i class="fa fa-user"></i> <span>Embasy</span></a></li>

<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/forexbureau') }}"><i class="fa fa-user"></i> <span>Forex Bureau</span></a></li>

<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/hospital') }}"><i class="fa fa-user"></i> <span>Hospitals</span></a></li>



<!-- Users, Roles Permissions -->
  <li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
  </li>

  <!-- Users, Roles Permissions -->
    <li class="treeview">
      <a href="#"><i class="fa fa-group"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><a href="{{  backpack_url('language') }}"><i class="fa fa-flag-o"></i> <span>Languages</span></a></li>
        <li><a href="{{ backpack_url( 'language/texts') }}"><i class="fa fa-language"></i> <span>Language Files</span></a></li>
        <li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
        <li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
        <li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>

      </ul>
    </li>
