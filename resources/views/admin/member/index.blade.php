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
        <h1 class="h3 mb-0 text-gray-800">Đoàn viên</h1>
        <a href="{{route('admin.member.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus" aria-hidden="true"></i>
            Tạo mới</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
        <table class="table table-striped" id="data-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Tên đoàn viên</th>
                <th scope="col">Email</th>
                <th scope="col">MSSV</th>
                <th scope="col">Lớp</th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
              <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>
                    <img src="{{ asset('uploads/' . $member?->background?->image) }}" alt="Ảnh đại diện" style="max-width: 100px;">
                </td>
                <td>{{$member->full_name}}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member?->background?->mssv }}</td>
                <td>{{ $member?->background?->classes?->name }}</td>
                <td>
                    <a style="text-decoration: none" href="{{route('admin.member.edit', ['id' => $member->id ])}}">
                        <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                    </a>
                    <a style="text-decoration: none" href="{{route('admin.member.delete', ['id' => $member->id ])}}">
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
        $('#data-table').DataTable({
        dom: 'Blfrtip',
        });
    } );
</script>
@endsection