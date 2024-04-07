@extends('layouts.admin')
@section('content')

<div class="p-5">
    <a href="{{route('admin.rule.index')}}">
        <button class="btn btn-primary mb-4"><i class="fa fa-arrow-left" aria-hidden="true"></i> Quay lại</button>
    </a>

<h5>Thêm mới nội quy</h5>
<form action="{{route('admin.rule.update', ['id' => $rule->id])}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Tên nội quy</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$rule->name}}" required>
    </div>
    <div class="form-group">
        <label for="rule_content">Nội dung</label>
        <textarea name="rule_content" id="rule_content" class="form-control" rows="3" required>{{$rule->content}}</textarea>
    </div>

    <button onclick="handleSubmit()" type="button" class="btn btn-success">Tạo mới</button>
</form>

</div>
<script>
    CKEDITOR.replace('rule_content', {
            extraPlugins: 'colorbutton,colordialog,font,justify,colorbutton',
            toolbar: [
                { name: 'document', items: ['Source'] },
                { name: 'clipboard', items: ['Undo', 'Redo'] },
                { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll'] },
                { name: 'links', items: ['Link', 'Unlink'] },
                { name: 'insert', items: ['Image', 'Table', 'HorizontalRule'] },
                { name: 'tools', items: ['Maximize'] },
                '/',
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript'] },
                { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize', 'TextColor', 'BGColor'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
                { name: 'justify', items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] }
            ],
            colorButton_colors: '0088CC,00CC99,FF0000',
            colorButton_enableMore: true,
            colorButton_foreStyle: {
                element: 'span',
                styles: { 'color': '#(color)' }
            }
    });

    function handleSubmit() {
        let name = $('#name').val();
        let rule_content = CKEDITOR.instances.rule_content.getData();
        if (name == '' || rule_content == '') {
            toastr.error('Vui lòng điền đầy đủ thông tin');
        } else {
            $('form').submit();
        }
    }
</script>

@endsection