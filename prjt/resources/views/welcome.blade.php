<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('ajout')}}" method="post">
            <input type="text" name='nom'>
            <input type="text" name='email'>
            <select name="role" id="">
                <option value=""></option>
            </select>
            <input type="text" name='password'>
            <button type='submit'>submit</button>
    </form>
</body>
</html>
