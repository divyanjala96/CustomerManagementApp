<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center">
            <div class="row">
                <div class="col-12">
                    <h1>Category</h1>
                    <form method="post" action="save-category">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" name="cat_name" placeholder="Enter category name">
                        <br>
                        <input type="submit" class="btn btn-primary" value="SAVE">
                    </form>

                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Delete</th>
                        <th>Update</th>

                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->cat_name }}</td>
                                <td><a href="delete-category/{{ $category->id }}" class="btn btn-danger">DELETE</a></td>
                                <td><a href="update-category/{{ $category->id }}" class="btn btn-warning">UPDATE</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <a href="/product-all">PRODUCT</a>
    </div>
</body>

</html>
