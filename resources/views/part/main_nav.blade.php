<!-- main-nav -->
<nav class="main-nav">

    <ul class="main-menu">
        <li ><a href="{{route('index')}}"><i class="fa fa-dashboard fa-fw"></i><span class="text">Dashboard</span></a></li>
        <li ><a href="#" class="js-sub-menu-toggle"><i class="fa fa-clipboard fa-fw"></i><span class="text">Pages</span>
                <i class="toggle-icon fa fa-angle-left"></i></a>
            <ul class="sub-menu ">
                <li ><a href="{{asset('page-profile')}}"><span class="text">Profile</span></a></li>
                <li ><a href="{{route('page-invoice')}}"><span class="text">Invoice</span></a></li>
                <li ><a href="{{route('page-knowledgebase')}}"><span class="text">Knowledge Base</span></a></li>
                <li ><a href="{{route('page-inbox')}}"><span class="text">Inbox</span></a></li>
                <li ><a href="{{route('page-register')}}"><span class="text">Register</span></a></li>
                <li ><a href="{{route('page-login')}}"><span class="text">Login</span></a></li>
                <li ><a href="{{route('page-404')}}"><span class="text">404</span></a></li>
                <li ><a href="{{route('page-blank')}}"><span class="text">Blank Page</span></a></li>
            </ul>
        </li>
        <li class="active"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-bar-chart-o fw"></i><span class="text">Charts &amp; Statistics</span>
                <i class="toggle-icon fa fa-angle-left"></i></a>
            <ul class="sub-menu open">
                <li ><a href="{{route('charts-statistics')}}"><span class="text">Charts</span></a></li>
                <li class="active"><a href="{{route('charts-statistics-interactive')}}"><span class="text">Interactive Charts</span></a></li>
                <li ><a href="{{route('charts-statistics-real-time')}}"><span class="text">Realtime Charts</span></a></li>
                <li ><a href="{{route('charts-d3charts')}}"><span class="text">D3 Charts</span></a></li>
            </ul>
        </li>
        <li ><a href="#" class="js-sub-menu-toggle"><i class="fa fa-edit fw"></i><span class="text">Forms</span>
                <i class="toggle-icon fa fa-angle-left"></i></a>
            <ul class="sub-menu ">
                <li ><a href="{{route('form-inplace-editing')}}"><span class="text">In-place Editing <span class="badge element-bg-color-blue">New</span></span></a></li>
                <li ><a href="{{route('form-elements')}}"><span class="text">Form Elements <span class="badge element-bg-color-blue">Updated</span></span></a></li>
                <li ><a href="{{route('form-layouts')}}"><span class="text">Form Layouts <span class="badge element-bg-color-blue">New</span></span></a></li>
                <li ><a href="{{route('form-bootstrap-elements')}}"><span class="text">Bootstrap Elements <span class="badge element-bg-color-blue">New</span></span></a></li>
                <li ><a href="{{route('form-validations')}}"><span class="text">Validation</span></a></li>
                <li ><a href="{{route('form-file-upload')}}"><span class="text">File Upload</span></a></li>
                <li ><a href="{{route('form-text-editor')}}"><span class="text">Text Editor <span class="badge element-bg-color-blue">New</span></span></a></li>
            </ul>
        </li>
        <li ><a href="#" class="js-sub-menu-toggle"><i class="fa fa-list-alt fw"></i><span class="text">UI Elements</span>
                <i class="toggle-icon fa fa-angle-left"></i></a>
            <ul class="sub-menu ">
                <li ><a href="{{route('ui-elements-general')}}"><span class="text">General Elements</span></a></li>
                <li ><a href="{{route('ui-elements-buttons')}}"><span class="text">Buttons <span class="badge element-bg-color-blue">Updated</span></span></a></li>
                <li ><a href="{{route('ui-elements-icons')}}"><span class="text">Icons</span></a></li>
                <li ><a href="{{route('ui-elements-flash-message')}}"><span class="text">Flash Message</span></a></li>
            </ul>
        </li>
        <li ><a href="{{route('widgets')}}"><i class="fa fa-puzzle-piece fa-fw"></i><span class="text">Widgets</span></a></li>
        <li ><a href="#" class="js-sub-menu-toggle"><i class="fa fa-gears fw"></i><span class="text">Components</span>
                <i class="toggle-icon fa fa-angle-left"></i></a>
            <ul class="sub-menu ">
                <li ><a href="{{route('components-wizard')}}"><span class="text">Wizard (with validation)</span></a></li>
                <li ><a href="{{route('components-calendar')}}"><span class="text">Calendar</span></a></li>
                <li ><a href="{{route('components-maps')}}"><span class="text">Maps</span></a></li>
                <li ><a href="{{route('components-gallery')}}"><span class="text">Gallery</span></a></li>
            </ul>
        </li>
        <li ><a href="#" class="js-sub-menu-toggle"><i class="fa fa-table fw"></i><span class="text">Tables</span>
                <i class="toggle-icon fa fa-angle-left"></i></a>
            <ul class="sub-menu ">
                <li ><a href="{{route('tables-static-table')}}"><span class="text">Static Table</span></a></li>
                <li ><a href="{{route('tables-dynamic-table')}}"><span class="text">Dynamic Table</span></a></li>
            </ul>
        </li>
        <li ><a href="{{route('typography')}}"><i class="fa fa-font fa-fw"></i><span class="text">Typography</span></a></li>
    </ul>
</nav><!-- /main-nav -->