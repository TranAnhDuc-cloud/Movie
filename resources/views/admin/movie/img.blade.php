<form action="{{route('xulyimg')}}" method="post">
    {{ csrf_field() }}
    <input type="file" name="myfile">
    <input type="submit" value="Send">
</form>