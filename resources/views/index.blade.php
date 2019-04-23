<!doctype html>
<html>
<head>

    <title>Cars application</title>
</head>

<body>


<form action="{{route('cars.create')}}" method="post" >

Make: <input type="text" name="make"><br>
    Model: <input type="text" name="model"><br>
    Produced on: <input type="date" name="produced_on"><br>

    {{--(1) DR: the csrf here, see routes/web.php--}}
    {{ csrf_field() }}

<input type="submit" >
</form>

<br>
<div>
<table border="1">
    <tr>
        <th>Make</th>
        <th>Model</th>
        <th>Produced On</th>
    </tr>
@foreach($cars as $car)
    <tr>
        <td>{{$car->make}}</td>
        <td>{{$car->model}}</td>
        <td>{{$car->produced_on}}</td>
    </tr>
    @endforeach


</table>
</div>





</body>
</html>
