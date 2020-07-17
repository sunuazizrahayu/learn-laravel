<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li>
        <a href="{{ url('home') }}">
            <i class="fa fa-home"></i> <span>Home</span>
        </a>
    </li>
    <li>
        <a href="{{ url('students') }}">
            <i class="fa fa-users"></i> <span>Students</span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i> <span>Students</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ url('students_builder') }}"><i class="fa fa-circle-o"></i> Query Builder</a></li>
            <li><a href="{{ url('students_eloquent') }}"><i class="fa fa-circle-o"></i> Eloquent</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i> <span>Mahasiswa</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ url('mahasiswa_builder') }}"><i class="fa fa-circle-o"></i> Query Builder</a></li>
            <li><a href="{{ url('mahasiswa_eloquent') }}"><i class="fa fa-circle-o"></i> Eloquent</a></li>
        </ul>
    </li>
    <li>
        <a href="{{ url('blank') }}">
            <i class="fa fa-info"></i> <span>Blank Page</span>
        </a>
    </li>
</ul>