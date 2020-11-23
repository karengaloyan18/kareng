<table class="table table-hover table-striped table-bordered">
    <thead>
    <tr>
        <td>Id</td>
        <td>Numbers</td>
        <td>Name</td>
        <td>Delete</td>
    </tr>
    @foreach($facts as $f => $fact)
        <tr>
            <td><a href="{{route('editfact',['fact'=>$fact->id])}}">{{$fact->id}}</a></td>
            <td>{{$fact->numbers}}</td>
            <td>{{$fact->name}}</td>
            <td><form action="{{route('editfact',['fact'=>$fact->id])}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn-group-justified">Delete</button>
                </form></td>
        </tr>
    @endforeach
    </thead>
</table>
<a style="font-size: 16px" href="{{route('addfact')}}">Add a new text into Facts</a><br><br>
<a style="font-size: 10px;color: black" href="{{route('admin')}}">back to AdminPanel</a>
