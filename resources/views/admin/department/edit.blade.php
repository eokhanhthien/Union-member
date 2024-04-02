@extends('layouts.admin')
@section('content')


<div class="p-5">
    <a href="{{ url()->previous() }}">
        <button class="btn btn-primary mb-4"><i class="fa fa-arrow-left" aria-hidden="true"></i> Quay lại</button>
    </a>
<h5>Sửa khoa</h5>
<form action="{{route('admin.department.update', ['id' => $department->id ])}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Tên khoa</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$department->name}}" required>
    </div>
    <div class="form-group">
        <label for="description">Mô tả</label>
        <textarea name="description" id="description" class="form-control" rows="3" value="" required>{{$department->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Cập nhật</button>
</form>

</div>

@endsection