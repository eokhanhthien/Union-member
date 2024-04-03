@extends('layouts.admin')
@section('content')


<div class="p-5">
    <a href="{{route('admin.activity.index')}}">
        <button class="btn btn-primary mb-4"><i class="fa fa-arrow-left" aria-hidden="true"></i> Quay lại</button>
    </a>
<h5>Sửa hoạt động</h5>
<form action="{{route('admin.activity.update', ['id' => $activity->id ])}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Tên Hoạt động</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$activity->name}}" required>
    </div>
    <div class="form-group">
        <label for="description">Mô tả</label>
        <textarea name="description" id="description" class="form-control" rows="3" value="" required>{{$activity->description}}</textarea>
    </div>


    <div class="form-group">
        <label for="start_date">Ngày bắt đầu</label>
        <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $activity->start_date ? \Carbon\Carbon::parse($activity->start_date)->format('Y-m-d') : '' }}" required>
    </div>

    <div class="form-group">
        <label for="end_date">Ngày kết thúc</label>
        <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $activity->end_date ? \Carbon\Carbon::parse($activity->end_date)->format('Y-m-d') : '' }}" required>
    </div>

    <div class="form-group">
        <label for="point">Điểm rèn luyện</label>
        <input type="number" name="point" id="point" class="form-control" value="{{$activity->point}}" required>
    </div>

    <button type="submit" class="btn btn-success">Cập nhật</button>
</form>

</div>

@endsection