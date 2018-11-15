<!doctype html>
<html lang="en">
<head>
    <title>Delete</title>
</head>
<body>
<form action="delete/id" method="post  ">
    <input type="hidden" name="token" value="{{csrf_token}}">
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="delete ">
</form>
</body>
</html>