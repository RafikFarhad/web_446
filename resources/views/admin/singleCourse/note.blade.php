<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {!! $course->title !!}
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Individual Course</li>
    </ol>
    <h3>
        Course Code: {!! $course->code !!} <br>
        Session: {!!  MyFunction::GET_SESSION($course->session) !!} <br>
        Department: {!! $course->department !!}
    </h3>
    <p><strong>Created At: {!! Carbon::parse($course->created_at)->format('d M, Y') !!}</strong></p>
</section>