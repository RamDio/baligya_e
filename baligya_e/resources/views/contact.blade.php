<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="contacts" method="get">
            {{-- @csrf --}}
           Name: <input type="text" name="name"><br>
            Email: <input type="text" name="email"><br>
            <input type="submit" value="submit">
        </form>
</body>
</html>
