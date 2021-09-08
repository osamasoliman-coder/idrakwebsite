@extends('admin.layouts.app')

@section('content')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="{{ route('show.add.course.page') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">new Course</a>
            </div>

            <!-- Content Row -->
            <div class="row">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Course name</th>
                        <th scope="col">level</th>
                        <th scope="col">date</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <th scope="row">{{ $course->id }}</th>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->level }}</td>
                            <td>{{ $course->date }}</td>
                            <td>
                                <a href="{{ route('show.images',['id'=> $course->id]) }}"
                                   class="btn btn-warning">add images</a>
                                <a href="" class="btn btn-danger">delete course</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
@endsection
