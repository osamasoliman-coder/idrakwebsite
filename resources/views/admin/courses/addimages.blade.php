<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('assets/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 gutter">

                    <div class="sales report">
                      <h4 style="margin-bottom: 50px;"> Course name : {{ $course->name }}</h4>

                        <form method="post" action="{{route('store.images',['id'=> $course->id])}}" enctype="multipart/form-data">
                         @csrf
                            <div class="input-group hdtuto control-group lst increment" >
                                <input type="file" name="filenames[]" class="myfrm form-control">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                </div>
                            </div>
                            <div class="clone hide">
                                <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                    <input type="file" name="filenames[]" class="myfrm form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>

                        </form>

                    </div>
                </div>
            </div>

         </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/admin/')}}vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('assets/admin/')}}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/admin/')}}vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/admin/')}}js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{asset('assets/admin/')}}vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('assets/admin/')}}js/demo/chart-area-demo.js"></script>
    <script src="{{asset('assets/admin/')}}js/demo/chart-pie-demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".btn-success").click(function(){
            var lsthmtl = $(".clone").html();
            $(".increment").after(lsthmtl);
        });
        $("body").on("click",".btn-danger",function(){
            $(this).parents(".hdtuto control-group lst").remove();
        });
    });
</script>

</body>

</html>
