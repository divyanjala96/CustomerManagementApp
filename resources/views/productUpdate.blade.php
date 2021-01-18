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
     <form action="update-product-part" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      
       <input class="form-control" name="name" type="text" value="{{$products->pro_name}}">
       <input class="form-control" name="price" type="text" value="{{$products->pro_price}}">
       <input  name="id" type="hidden" value="{{$products->id}}">
       <select  name="category">
        @foreach ($categaries as $category)
       <option value="{{$category->id}}">{{$category->cat_name}}</option>
        @endforeach
       </select>
       <br>
       <div class="form-group">
                            <label for="file">Choose Picture</label>
                            <input type="file" name="file" class="form-control" onchange="PreviewPhoto(this)" />
                            <img id="previewing" style="max-width:130px;margin-top:20px;" />
                        </div>
       <input type="submit" class="btn btn-success" value="UPDATE">
       <a href="product-all" class="btn btn-warning">CANCEL</a>
     </form>
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
