<table class="table table-hover table-striped table-bordered">
    <thead>
    <tr>
        <td>Id</td>
        <td>Percentofknowledge</td>
        <td>Name</td>
{{--        <td>Text</td>--}}
        <td>Delete</td>
    </tr>
    @foreach($about as $a =>$ab)
        <tr>
            <td><a href="{{route('editabout',['about'=>$ab->id])}}">{{$ab->id}}</a></td>
            <td>{{$ab->percentofknowledge}}</td>
            <td>{{$ab->name}}</td>
{{--            <td>{{$about->text}}</td>--}}
            <td><form action="{{route('editabout',['about'=>$ab->id])}}" method="post">
                    @csrf
                    {{method_field('DElETE')}}
                    <button type="submit" class="btn-group-justified">Delete</button>
                </form></td>
        </tr>
    @endforeach
    </thead>
</table>

<table class="table table-hover table-striped table-bordered">
    <thead>
    <tr>
        <td>Id</td>
        <td>Text</td>
        <td>Delete</td>
    </tr>
    @foreach($abouttext as $a => $at)
            <tr>
            <td><a href="{{route('editabouttext',['text'=>$at->id])}}">{{$at->id}}</a></td>
                        <td>{{$at->text}}</td>
                <td><form action="{{route('editabouttext',['text'=>$at->id])}}" method="post">
                        @csrf
                        {{method_field('DElETE')}}
                        <button type="submit" class="btn-group-justified">Delete</button>
                    </form></td>
            </tr>
        @endforeach
    </thead>
</table>
<a style="font-size: 16px" href="{{route('addabouttext')}}">Add a new text in About page</a><br><br>
<a style="font-size: 16px" href="{{route('addabout')}}">Add a new statistic in About page</a><br><br>
<a style="font-size: 10px;color: black" href="{{route('admin')}}">back to AdminPanel</a>
<script>
    import Button from "../../js/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
