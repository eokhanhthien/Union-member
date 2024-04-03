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
        <h1 class="h3 mb-0 text-gray-800">Chức vụ</h1>
        <a href="{{route('admin.position.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus" aria-hidden="true"></i>
            Tạo mới</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
        <table class="table table-striped" id="data-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên Chức vụ</th>
                <th scope="col">Chi tiết</th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($positions as $position)
              <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$position->name}}</td>
                <td>{{$position->description}}</td>
                <td>
                    <a style="text-decoration: none" href="{{route('admin.position.edit', ['id' => $position->id ])}}">
                        <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                    </a>
                    <a style="text-decoration: none" href="{{route('admin.position.delete', ['id' => $position->id ])}}">
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </a>
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
        $('#data-table').DataTable();
    } );
</script>
@endsection