<table class="table table-hover table-striped table-bordered">
    <thead>
    <tr>
        <td>Id</td>
        <td>Image</td>
        <td>Delete</td>
    </tr>
    @foreach($works as $w => $work)
        <tr>
            <td><a href="{{route('editwork',['work'=>$work->id])}}">{{$work->id}}</a></td>
            <td>{{$work->image}}</td>
            <td><form action="{{route('editwork',['work'=>$work->id])}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn-group-justified">Delete</button>
                </form></td>
        </tr>
    @endforeach
    </thead>
</table>
<a style="font-size: 16px" href="{{route('addwork')}}">Add a new sec into Work</a><br><br>
<a style="font-size: 10px;color: black" href="{{route('admin')}}">back to AdminPanel</a>
