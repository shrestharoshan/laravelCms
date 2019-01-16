<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Admin Controls</li>

    <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Manage Jobs</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('job.index') }}">List Jobs</a></li>
            <li><a href="{{ route('job.create') }}">Add New Job</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Manage Blogs</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('blog.index') }}">List Posts</a></li>
            <li><a href="{{ route('blog.create') }}">Add New Posts</a></li>
        </ul>
    </li>
</ul>
