<div class="container">
    <form action="{{route('addfact')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="col-xs-2 control-label" for="nums">numbers</label>
            <div class="col-xs-6">
                <input id="nums" type="text" name="numbers" value="{{old('text')}}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label" for="name">name</label>
            <div class="col-xs-6">
                <input id="name" type="text" name="name" value="{{old('name')}}" class="form-control">
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
