@extends('layouts.member')
@section('content')

<div class="p-5">
    <a href="{{route('member.rule.index')}}">
        <button class="btn btn-primary mb-4"><i class="fa fa-arrow-left" aria-hidden="true"></i> Quay lại</button>
    </a>

    @csrf
    <div class="form-group">
        <h5 id="name">{{$rule->name}}</h5>
    </div>
    <div class="form-group">
        <label for="rule_content">Nội dung</label>
        <div id="rule_content">{!! $rule->content !!}</div>
    </div>
</div>


@endsection