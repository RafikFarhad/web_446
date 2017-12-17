<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! asset('dummy.png') !!}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{!! Auth::user()->name !!}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{!! Menu::isActiveRoute('home') !!}">
                <a href="{!! route('home') !!}">
                    <i class="fa fa-book"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview {!! Menu::areActiveRoutes(['course.create', 'course.index']) !!}">
                <a href="#">
                    <i class="fa fa-home"></i> <span>Courses</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{!! Menu::isActiveRoute('course.index') !!}">
                        <a href="{!! route('course.index') !!}"><i class="fa fa-circle-o"></i> All Courses</a>
                    </li>
                    <li class="{!! Menu::isActiveRoute('course.create') !!}">
                        <a href="{!! route('course.create') !!}"><i class="fa fa-circle-o"></i> Create Course </a>
                    </li>
                </ul>
            </li>
            @if(isset($course))
                    <li class="treeview {!! Menu::areActiveRoutes(['single.course', 'single.course.teams', 'single.course.exams']) !!}">
                        <a href="#">
                            <i class="fa fa-flash"></i> <span>{!! $course->code.'-'.str_limit($course->title, 15) !!}</span>
                                    <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{!! Menu::isActiveRoute('single.course') !!}">
                                <a href="{!! route('single.course', [$course->id]) !!}"><i class="fa fa-circle-o"></i> Update Course</a>
                            </li>
                            <li class="{!! Menu::isActiveRoute('single.course.teams') !!}">
                                <a href="{!! route('single.course.teams', [$course->id]) !!}"><i class="fa fa-circle-o"></i> Course Students </a>
                            </li>
                            <li class="{!! Menu::isActiveRoute('single.course.exams') !!}">
                                <a href="{!! route('single.course.exams', [$course->id]) !!}"><i class="fa fa-circle-o"></i> Course Exams </a>
                            </li>
                            <li class="header" style="color: #ffffff">Exams</li>
                            @foreach($course->exams as $exam)
                                <li class="{!! Menu::isActiveRoute('') !!}">
                                    <a href="{!! route('single.course.exams', [$course->id]) !!}">
                                        <i class="fa fa-code-fork"></i>
                                        {!! $exam->name !!}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
            @endif

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>