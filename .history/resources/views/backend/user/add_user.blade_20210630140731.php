@extends('admin.admin_master')
@section('admin_content')
    <div class="content-wrapper">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
                <div class="row">


                    <div class="col-12">

                        <div class="box-body">
                            <section class="content">

                                <!-- Basic Forms -->
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">Add User</h4>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col">
                                                <form method="post" action="{{ route('user.store') }}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <h5>Name <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="text" name="name" class="form-control"
                                                                        required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Email <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="email" name="email" class="form-control"
                                                                        required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5>Password <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="password" name="password"
                                                                        class="form-control" required="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <h5>User Role <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <select name="usertype" id="usertype" required=""
                                                                        class="form-control" aria-invalid="false">
                                                                        <option value="" disabled="" selected="">Select Your
                                                                            City
                                                                        </option>
                                                                        <option value="Admin">Admin</option>
                                                                        <option value="User">User</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="text-xs-right">
                                                                <input value="Submit" type="submit"
                                                                    class="btn btn-rounded btn-info">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->

                            </section>
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
