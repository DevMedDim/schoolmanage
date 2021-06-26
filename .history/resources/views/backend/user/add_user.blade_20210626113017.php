@extends('admin.admin_master')
@section('admin_content')
    <div class="content-wrapper">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
                <div class="row">


                    <div class="col-12">

                        <div class="box">
                            <div class="   box-header with-border">
                                <h3 class="box-title">All Users</h3>
                                <a href="{{route('user.add')}}" style="float: right; color:white; background-color:green; font-weight:bold;" class=" ml-100 btn  btn-outline"> Add User</a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                            
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
    </div>
@endsection
