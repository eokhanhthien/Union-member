@extends('layouts.admin')
@section('content')


<div class="p-5">
    <a href="{{route('admin.classes.index')}}">
        <button class="btn btn-primary mb-4"><i class="fa fa-arrow-left" aria-hidden="true"></i> Quay lại</button>
    </a>
<h5>Sửa lớp</h5>
<form action="{{route('admin.classes.update', ['id' => $class->id ])}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Tên lớp</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$class->name}}" required>
    </div>
    <div class="form-group">
        <label for="description">Khoa</label>
        <select name="department_id" id="department_id" class="form-control" required>
            <option value="">Chọn khoa</option>
            @foreach ($departments as $department)
                <option value="{{$department->id}}" @if($class->department_id == $department->id) selected @endif>{{$department->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Cập nhật</button>
</form>

</div>

@endsection