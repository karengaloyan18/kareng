<div class="container">
    <form action="{{route('editservice',['service'=>$service->id])}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="col-xs-2 control-label" for="name">name</label>
            <div class="col-xs-6">
                <input id="name" type="text" name="name" value="{{old('name')}}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label" for="text">text</label>
            <div class="col-xs-6">
                <input id="text" type="text" name="text" value="{{old('text')}}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label" for="icon">icon</label>
            <div class="col-xs-6">
                <input id="icon" name="icon" type="text" value="{{old('icon')}}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-10">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </div>
    </form>
</div>
<script>
    CKEDITOR.replace('editor')
</script>
