<div class="container">
    <form action="{{route('editabouttext')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-xs-2 control-label" for="text">text</label>
                    <div class="col-xs-6">
                        <input id="text" type="text" name="text" value="{{old('text')}}" class="form-control">
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
