@php
    // dd(\Carbon\Carbon::parse($activity->start_date))
@endphp
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


<div class="p-5">
    <a href="{{route('member.activity.index')}}">
        <button class="btn btn-primary mb-4"><i class="fa fa-arrow-left" aria-hidden="true"></i> Quay lại</button>
    </a>
<h5>Thông tin hoạt động</h5>
<form action="{{route('member.activity.register', ['id' => $activity->id ])}}" method="get">
    @csrf
    <div class="card">
        <div class="card-body">
    <div class="form-row">
        <div class="form-group col-md-6 mt-3">
            <label for="name">Tên Hoạt động: </label><div>{{$activity->name}}</div>
        </div>
        <div class="form-group col-md-6 mt-3">
            <label for="description">Mô tả: </label><div>{{$activity->description}}</div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6 mt-3">
            <label for="start_date">Ngày bắt đầu: </label><div>{{$activity->start_date ? \Carbon\Carbon::parse($activity->start_date)->format('Y-m-d') : ''}}</div>
        </div>
        <div class="form-group col-md-6 mt-3">
            <label for="end_date">Ngày kết thúc: </label><div>{{$activity->end_date ? \Carbon\Carbon::parse($activity->end_date)->format('Y-m-d') : ''}}</div>
        </div>
    </div>

    <div class="form-group mt-3">
        <label for="point">Điểm rèn luyện: </label><div>{{$activity->point}}</div>
    </div>

    <input type="hidden" name="activity_id" value="{{$activity->id}}">
    @if( now() < \Carbon\Carbon::parse($activity->start_date))
        <button type="submit" class="btn btn-success">Đăng ký</button>
    @else
        <p class="text-danger">Hoạt động này đã quá hạn đăng ký.</p>
    @endif
    </div>
</div>

</form>

</div>

@endsection