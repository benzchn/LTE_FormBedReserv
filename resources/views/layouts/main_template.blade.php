<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ระบบจองเตียงผู้ป่วยออนไลน์ โรงพยาบาลศรีนครินทร์</title>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet"/>
  <!-- Favicon icon -->
  <link rel="icon" href="{{ asset('image/Emblem.png') }}" sizes="32x32" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">


<style>
  * {
    font-family: "Sarabun", sans-serif;
  }
 .box
 {
  width:100%;
  max-width:600px;
  background-color:#f9f9f9;
  border:1px solid #ccc;
  border-radius:5px;
  padding:16px;
  margin:0 auto;
 }
 input.parsley-success,
 select.parsley-success,
 textarea.parsley-success {
   color: #468847;
   background-color: #DFF0D8;
   border: 1px solid #D6E9C6;
 }

 input.parsley-error,
 select.parsley-error,
 textarea.parsley-error {
   color: #B94A48;
   background-color: #F2DEDE;
   border: 1px solid #EED3D7;
 }

 .parsley-errors-list {
   margin: 2px 0 3px;
   padding: 0;
   list-style-type: none;
   font-size: 0.9em;
   line-height: 0.9em;
   opacity: 0;

   transition: all .3s ease-in;
   -o-transition: all .3s ease-in;
   -moz-transition: all .3s ease-in;
   -webkit-transition: all .3s ease-in;
 }

 .parsley-errors-list.filled {
   opacity: 1;
 }
 
 .parsley-type, .parsley-required, .parsley-equalto{
  color:#ff0000;
 }
 
 </style>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Header -->
    @include('layouts.header')

    <!-- Sidebar -->
    @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  
            @yield('content')        
	

  <!-- Control Sidebar -->
  {{-- <aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside> --}}
  <!-- /.control-sidebar -->

    <!-- Footer -->
    @include('layouts.footer')
	
</div>
<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
<!-- jquery-validation -->
<script src="{{ asset('adminlte/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/jquery-validation/additional-methods.min.js') }}"></script>


<script type="text/javascript">
  $(document).ready(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#quickForm').validate({
      rules: {
        ward: {
          required: true
        },
        operative: {
          required: true
        },
        date: {
          required: true
        },
        professor: {
          required: true
        },
        doctor: {
          required: true
        },
        name: {
          required: true
        },
        hn: {
          required: true,
          minlength: 10
        },
        pa_name: {
          required: true
        },
        pa_age: {
          required: true
        },
        sex: {
          required: true
        },
        pa_tel: {
          required: true
        },
        payment: {
          required: true
        },
        disease: {
          required: true
        },
        terms: {
          required: true
        }
        
      },
      messages: {
        ward: {
          required: "กรุณาเลือกวอร์ด"
        },
        operative: {
          required: "กรุณาเลือกหัตถการ"
        },
        date: {
          required: "กรุณาเลือกวันที่จองเตียง"
        },
        professor: {
          required: "กรุณาเลือกอาจารย์แพทย์"
        },
        doctor: {
          required: "กรุณาเลือกแพทย์เจ้าของผู้ป่วย"
        },
        name: {
          required: "กรุณากรอกชื่อผู้จอง"
        },
        hn: {
          required: "กรุณากรอกรหัส HN ผู้ป่วย",
          minlength: "รหัส HN ต้อง 10 หลัก"
        },
        pa_name: {
          required: "กรุณากรอกชื่อผู้ป่วย"
        },
        pa_age: {
          required: "กรุณากรอกอายุผู้ป่วย"
        },
        sex: {
          required: "กรุณาเลือกเพศ"
        },
        pa_tel: {
          required: "กรุณากรอกเบอร์ผู้ป่วย"
        },
        payment: {
          required: "กรุณาเลือกสิทธิ์การรักษา"
        },
        disease: {
          required: "กรุณาเลือกโรค"
        },
        terms: "Please accept our terms"
      }
      ,
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
  </script>

      <script>
        $(".btn").click(function () {
          $(this).find("i").toggleClass("fas fa-minus fas fa-plus");
        });
  
        $("#collapseOne").collapse({
          toggle: true,
        });
      </script>

      <script>
        $(function () {
          //Initialize Select2 Elements
          $('.select2').select2()



          //Initialize Select2 Elements
          $('#ward').select2({
            placeholder: "เลือกวอร์ด",
          // allowClear: true,
            theme: 'bootstrap4'
          })

          $('#operative').select2({
            placeholder: "เลือกหัตถการ",
          // allowClear: true,
            theme: 'bootstrap4'
          })

          $('#payment').select2({
            placeholder: "เลือกสิทธิ์การรักษา",
          // allowClear: true,
            theme: 'bootstrap4'
          })

          $('#disease').select2({
            placeholder: "เลือกโรค",
          // allowClear: true,
            theme: 'bootstrap4'
          })

          $('#professor').select2({
            placeholder: "เลือกอาจารย์แพทย์",
          // allowClear: true,
            theme: 'bootstrap4'
          })



          //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
      format: 'DD/MMMM/YYYY',
      
    });
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
<script>
  $(".btn").click(function () {
    $(this).find("i").toggleClass("fas fa-minus fas fa-plus");
  });

  $("#collapseOne").collapse({
    toggle: true,
  });
</script>
</body>
</html>