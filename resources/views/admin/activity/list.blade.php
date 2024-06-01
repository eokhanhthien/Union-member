@extends('layouts.admin')
@section('content')

@if(session('success'))
    <script>
        toastr.success('{!! html_entity_decode(session('success')) !!}');
    </script>
@endif

@if(session('error'))
    <script>
        toastr.error('{!! html_entity_decode(session('error')) !!}');
    </script>
@endif

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Danh sách tham gia "{{$activitie->name}}"</h1>

    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
        <table class="table table-striped" id="data-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên đoàn viên</th>
                <th scope="col">Mã số sinh viên</th>
                <th scope="col">Trạng thái tham gia</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($joins as $join)
              <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$join->member?->full_name}}</td>
                <td>{{$join->member?->background?->mssv}}</td>
                <td>
                @if($activitie->status == null)
                    <a style="text-decoration: none" href="{{route('admin.activity.change.status', ['id' => $join->id ])}}">
                        @if($join->status == 1)
                            <button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>

                            </button>
                        @else
                            <button class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                        @endif
                    </a>
                @else
                    @if($join->status == 1)
                        <button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>

                        </button>
                    @else
                        <button class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    @endif
                @endif
                </td> 
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>

    @if($activitie->status == null)
    <a style="text-decoration: none" href="{{route('admin.activity.mark', ['id' => $activitie->id ])}}">
        <button class="btn btn-success">
            Xác nhận
        </button>
    </a>
        <span class="text-danger" >(Xác nhận kết thúc hoạt động và tính điểm)</span>
    @else
        <span class="text-success" >Hoạt động đã được chấm điểm</span>
    @endif

    <!-- Content Row -->

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready( function () {
        $('#data-table').DataTable({
        dom: 'Blfrtip',
        });
    } );
</script>
@endsection