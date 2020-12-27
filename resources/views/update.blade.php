<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
</br>
</br>
</br>
</br>
<h1>Update your Task Here!</h1>
<div class="container">

<form action="/updatedata" method="post">
{{csrf_field()}}
<input type="text" class="formcontrol" name="task" value="{{$taskdata->task}}"/>
<input type="hidden" name="id" value="{{$taskdata->id}}"/>
<input type="submit" class="btn btn-warning" value="Update"/>
&nbsp; &nbsp;
<input type ="button" class="btn btn-danger" value="Cancel"/>





</form>
</div>
</body>
</html>