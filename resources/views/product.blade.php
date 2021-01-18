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

                <div class="col-6">
                    <h1>product</h1>
                    <form method="post" action="save-product" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" name="pro_name" placeholder="Enter product name"><br>
                        <input type="text" class="form-control" name="pro_price" placeholder="Enter product price"><br>

                        <select name="category">
                            @foreach ($categaries as $category)
                                <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <div class="form-group">
                            <label for="file">Choose Picture</label>
                            <input type="file" name="file" class="form-control" onchange="PreviewPhoto(this)" />
                            <img id="previewing" style="max-width:130px;margin-top:20px;" />
                        </div>

                        <br>
                        <input type="submit" class="btn btn-primary" value="SAVE">
                    </form>
                    <br>

                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Category</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Delete</th>
                        <th>Update</th>

                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->CategoryDetails->cat_name }}</td>
                                <td>{{ $product->pro_name }}</td>
                                <td>{{ $product->pro_price }}</td>
                                <td><img src="{{asset('images')}}/{{$product->image}}" style="max-width:60px;"></td>
                                <td>
                                    <a href="delete-product/{{ $product->id }}" class="btn btn-danger">DELETE</a>
                                </td>
                                <td>
                                    <a href="update-product/{{ $product->id }}" class="btn btn-warning">UPDATE</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function PreviewPhoto(input) {
            var file = $("input[type=file]").get(0).files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    $('#previewing').attr("src", reader.result);
                }
                reader.readAsDataURL(file);
            }
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>

</body>

</html>
