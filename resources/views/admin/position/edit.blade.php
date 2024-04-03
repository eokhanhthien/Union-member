@extends('layouts.admin')
@section('content')


<div class="p-5">
    <a href="{{route('admin.position.index')}}">
        <button class="btn btn-primary mb-4"><i class="fa fa-arrow-left" aria-hidden="true"></i> Quay lại</button>
    </a>
<h5>Sửa chức vụ</h5>
<form action="{{route('admin.position.update', ['id' => $position->id ])}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Tên chức vụ</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$position->name}}" required>
    </div>
    <div class="form-group">
        <label for="description">Mô tả</label>
        <textarea name="description" id="description" class="form-control" rows="3" value="" required>{{$position->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Cập nhật</button>
</form>

</div>

@endsection