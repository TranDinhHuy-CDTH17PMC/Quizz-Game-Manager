@extends('layout')
@section('css')
  <!-- App css -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/app.min.css')}}" rel="stylesheet" type="text/css" />
         <!-- third party css -->

        <!-- third party css end -->
@endsection
@section('js')
       <!-- third party js -->
       <script src="{{ asset('libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/dataTables.bootstrap4.js')}}"></script>
        <script src="{{ asset('libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/buttons.flash.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/buttons.print.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{ asset('libs/datatables/dataTables.select.min.js')}}"></script>
        <script src="{{ asset('libs/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{ asset('libs/pdfmake/vfs_fonts.js')}}"></script>
        <!-- third party js ends -->
        <script src="{{asset('js/pages/datatables.init.js')}}"></script>
@endsection
@section('main-content')
<div class="row">
    <div class="col-lg-12 ">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
            </ul>
        </div>
        @endif
        <div class="card row">
            <h2>Cập nhật lĩnh vực</h2>
        </div>
        <div class="card-box row justify-content-center">

            <form action="{{ route('linh-vuc.cap-nhat',['id'=>$id])}}" method="POST" class="parsley-examples col-xl-6 ">
                @csrf

                <div class="form-group ">
                    <label for="ten_linh_vuc">Tên lĩnh vực<span class="text-danger">*</span></label>
                    <input type="text" value="{{ $lv->ten_linh_vuc }}" name="ten_linh_vuc"  parsley-trigger="change"
                           placeholder="Nhập tên lĩnh vực" class="form-control" id="ten_linh_vuc">
                </div>
                <div class="form-group text-right mb-0">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                       Cập nhật
                    </button>
                    <button type="reset" class="btn btn-secondary waves-effect">
                        Trở về
                    </button>
                </div>

            </form>
        </div> <!-- end card-box -->

    </div>
    <!-- end col -->


</div>
@endsection
