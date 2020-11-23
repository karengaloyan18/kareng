<div class="container">
    <form action="{{route('addwork')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
    <label class="col-xs-2 control-label" for="image">image</label>
    <div class="col-xs-8">
        <input class="filestyle" name="image" type="file" id="image" value="{{old('image')}}">
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
