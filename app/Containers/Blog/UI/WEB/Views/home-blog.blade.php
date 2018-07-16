<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Apiato</title>
    <style scoped>
        body{
            font-family: "Proxima Nova";
        }
    </style>

</head>
<body>
    <h1>myBlog.me</h1>
<hr>
<form action="/addForm" method="post">
    {{ csrf_field() }}
    <label>Title</label>
    <input type="text" placeholder="Title"/>
    <br/><br/>
    <label>Body</label>
    <textarea placeholder="Blog body...." name="blog"></textarea>
    <br><br><br>
    <input type="submit" name="Submit"/>
</form>
</body>
</html>
