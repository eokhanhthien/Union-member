@extends('layouts.admin')
@section('content')

<div class="p-5">
    <a href="{{route('admin.fund.index')}}">
        <button class="btn btn-primary mb-4"><i class="fa fa-arrow-left" aria-hidden="true"></i> Quay lại</button>
    </a>

<h5>Đóng quỹ</h5>
<form action="{{route('admin.fund.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="member_id">Đoàn viên</label>
        <select name="member_id" id="member_id" class="form-control" required>
            <option value="">Chọn đoàn viên</option>
            @foreach ($members as $member)
                <option value="{{$member->id}}">{{$member->full_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="amount">Số tiền</label>
        <input type="text" name="amount" id="amount" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="note">Ghi chú</label>
        <textarea name="note" id="note" class="form-control" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Tạo phiếu thu</button>
</form>

</div>

@endsection