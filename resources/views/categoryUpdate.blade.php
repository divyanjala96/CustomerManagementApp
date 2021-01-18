<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body><br>
    <div class="container">
<form action="update-category-part" method="post">
    {{csrf_field()}}
    <input class="form-control" name="name" type="text" value="{{$update_categories_data->cat_name}}">
    <input  name="id" type="hidden" value="{{$update_categories_data->id}}">
<br>
    <input type="submit" class="btn btn-success" value="UPDATE">
    <a href="category-all" class="btn btn-warning">CANCEL</a>
</form>

    </div>
</body>
</html>
