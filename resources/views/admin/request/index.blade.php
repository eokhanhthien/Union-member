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
        <h1 class="h3 mb-0 text-gray-800">Yêu cầu rút sổ đoàn</h1>
        {{-- <a href="{{route('member.request.add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus" aria-hidden="true"></i>
            Yêu cầu</a> --}}
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
        <table class="table table-striped" id="data-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Người rút</th>
                <th scope="col">Ngày yêu cầu</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Hành động</th>
              </tr>

            </thead>
            <tbody>
                @foreach ($requests as $rule)
              <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$rule->member->full_name}}</td>
                <td>{{$rule->date}}</td>
                <td>
                    @if($rule->status == 1)
                        <p class="text-success">Đã duyệt</p>
                    @else
                        <p class="text-danger">Chưa được duyệt</p>
                    @endif
                </td>
                <td>
                    @if(!$rule->status)
                    <a href="{{route('admin.request.accept', ['id' => $rule->id])}}">
                        <button class="btn btn-success">Duyệt</button>
                    </a>
                    @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
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