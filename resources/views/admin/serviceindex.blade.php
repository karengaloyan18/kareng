<table class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Text</td>
            <td>Icon</td>
            <td>Delete</td>
        </tr>
    @foreach($services as $s =>$service)
        <tr>
            <td><a href="{{route('editservice',['service'=>$service->id])}}">{{$service->id}}</a></td>
            <td>{{$service->name}}</td>
            <td>{{$service->text}}</td>
            <td>{{$service->icon}}</td>
            <td><form action="{{route('editservice',['service'=>$service->id])}}" method="post">
                    @csrf
                    {{method_field('DElETE')}}
                    <button type="submit" class="btn-group-justified">Delete</button>
                </form></td>
        </tr>
    @endforeach
    </thead>
</table>
<a style="font-size: 16px" href="{{route('addservice')}}">Add a new service</a><br><br>
<a style="font-size: 10px;color: black" href="{{route('admin')}}">back to AdminPanel</a>
<script>
    import Button from "../../js/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
