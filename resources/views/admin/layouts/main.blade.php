<!DOCTYPE html>
<html>
    @include('admin.includes.header')
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('admin.includes.navbar')
            @include('admin.includes.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @include('admin.includes.alert')
                @yield('body')
            </div>
            <!-- /.content-wrapper -->
            @include('admin.includes.footer')

            @include('admin.includes.rightSidebar')
        </div>
        <div id="line-example"></div>
        <!-- ./wrapper -->
    @include('admin.includes.script')
    </body>
</html>
