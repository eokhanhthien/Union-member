@extends('layouts.member')
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
        <h1 class="h3 mb-0 text-gray-800">Hoạt động đã đăng ký</h1>
        {{-- <a href="{{route('admin.activity.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus" aria-hidden="true"></i>
            Tạo mới</a> --}}
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
        <table class="table table-striped" id="data-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên Hoạt động</th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($activities as $activity)
              <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>
                    {{ \App\Models\Activity::find($activity->activity_id)->name }}
                </td>
                <td>
                    <a style="text-decoration: none" href="{{route('member.registered.activity.view', ['id' => $activity->activity_id ])}}">
                        <button class="btn btn-warning">Xem</button>
                    </a>
                    {{-- <a style="text-decoration: none" href="{{route('admin.activity.delete', ['id' => $activity->id ])}}">
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </a> --}}
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