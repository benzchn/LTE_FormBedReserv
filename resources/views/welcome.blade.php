@extends('layouts.main_template')
@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      {{-- <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>แบบฟอร์มจองเตียงผู้ป่วยออนไลน์</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div> --}}
    </section>

    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">แบบฟอร์มจองเตียงผู้ป่วยออนไลน์ <small>โรงพยาบาลศรีนครินทร์</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" action="{{ url('/') }}">
                <div class="card-body">

                  {{-- <div class="col-md-6"> --}}
                  <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i><strong>เงื่อนไขการจองเตียง!</strong></h5>
                                    <span style="padding-left: 20px;">1.ระบบสามารถจองได้เฉพาะวอร์ดที่มีให้เลือกเท่านั้น</span><br>
                                    <span style="padding-left: 20px;">2. จองได้เฉพาะหัตถการของวอร์ดนั้น</span>
                  </div>
                  {{-- </div> --}}

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="ward">วอร์ด</label>
                        <select class="form-control select2bs4" style="width: 100%;" id="ward" name="ward">
                          <option></option>
                          <option value="ward1">Alabama</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>หัตถการ</label>
                        <select class="form-control" style="width: 100%;" id="operative" name="operative">
                          <option></option>
                          <option>Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  <div class="row" >
                    <div class="col-md-6">
                      <div class="form-group">
                        {{-- <label for="date">วันที่ต้องการจองเตียง</label>
                        <input type="text" name="date" class="form-control" id="date" placeholder=""> --}}
                        <label>วันที่ต้องการจองเตียง</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" id="date" name="date"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>

                        </div>

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">ชื่อผู้จอง</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="">
                      </div>
                    </div>
                  </div>
                  {{-- <div class="row"style="border-top: 1px solid rgba(0,0,0,.12);margin-top:10px;margin-bottom:10px;">
                  </div> --}}
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>อาจารย์แพทย์</label>
                        <select class="form-control select2bs4" style="width: 100%;" id="professor" name="professor">
                          <option></option>
                          <option>Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>แพทย์เจ้าของผู้ป่วย</label>
                        <input type="text" name="doctor" class="form-control" id="doctor" placeholder="">
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                  </div>




                  <div class="row" >
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="hn">รหัส HN ผู้ป่วย</label>
                        <input type="text" name="hn" class="form-control" id="hn" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="pa_name">ชื่อผู้ป่วย</label>
                        <input type="text" name="pa_name" class="form-control" id="pa_name" placeholder="">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="pa_age">อายุผู้ป่วย</label>
                        <input type="text" name="pa_age" class="form-control" id="pa_age" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label for="pa_name">เพศ</label>
                        <div class="col-md-6">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="sex" value="male" checked>
                          <label class="form-check-label">ชาย</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="sex" value="female">
                          <label class="form-check-label">หญิง</label>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="pa_tel">เบอร์โทรศัพผู้ป่วย</label>
                        <input type="text" name="pa_tel" class="form-control" id="pa_tel" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>สิทธิ์การรักษา</label>
                        <select class="form-control select2bs4" style="width: 100%;" id="payment" name="payment">
                          <option></option>
                          <option>Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <div class="divider"></div>
                  <div class="row">
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>โรคผู้ป่วย</label>
                        <select class="form-control select2bs4" style="width: 100%;" id="disease" name="disease">
                          <option></option>
                          <option>Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    
                  </div>




                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection