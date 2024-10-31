<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File System in Laravel</title>
</head>
<body>
    <form method="post" action="/backend" enctype="multipart/form-data">
        @csrf
        <input type="file" name="myfile"> <br><br>
        <input type="submit">
    </form>
</body>
</html>

<!--Start From CH-19 at 11.48-->