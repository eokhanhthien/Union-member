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
        <h1 class="h3 mb-0 text-gray-800">Nội quy</h1>
   
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
        <table class="table table-striped" id="data-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên nội quy</th>
                <th scope="col">Chi tiết</th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($rules as $rule)
              <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$rule->name}}</td>
                <td>{{$rule->description}}</td>
                <td>
                    <a style="text-decoration: none" href="{{route('member.rule.view', ['id' => $rule->id ])}}">
                        <button class="btn btn-warning">Xem</button>
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