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
                                     <h4 class="box-title">Form Validation</h4>
                                   </div>
                                   <!-- /.box-header -->
                                   <div class="box-body">
                                     <div class="row">
                                       <div class="col">
                                           <form novalidate="">
                                             <div class="row">
                                               <div class="col-12">						
                                                   <div class="form-group">
                                                       <h5>Name <span class="text-danger">*</span></h5>
                                                       <div class="controls">
                                                           <input type="text" name="text" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                                       <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                                                   </div>
                                                   <div class="form-group">
                                                       <h5>Email <span class="text-danger">*</span></h5>
                                                       <div class="controls">
                                                           <input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                                   </div>
                                                   <div class="form-group">
                                                       <h5>Password <span class="text-danger">*</span></h5>
                                                       <div class="controls">
                                                           <input type="password" name="password" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                                   </div>
                                                  
                                                   <div class="form-group">
                                                       <h5>User Role <span class="text-danger">*</span></h5>
                                                       <div class="controls">
                                                           <select name="select" id="select" required="" class="form-control" aria-invalid="false">
                                                               <option value="" disabled>Select Your City</option>
                                                               <option value="1">India</option>
                                                               <option value="2">USA</option>
                                                               <option value="3">UK</option>
                                                               <option value="4">Canada</option>
                                                               <option value="5">Dubai</option>
                                                           </select>
                                                       <div class="help-block"></div></div>
                                                   </div>
                                                  
                                               <div class="text-xs-right">
                                                   <button type="submit" class="btn btn-rounded btn-info">Submit</button>
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
