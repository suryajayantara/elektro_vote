<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/registerUser" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="nama">
        <input type="number" name="nim" id="" placeholder="nim">
        <select name="prodi" id="">
            <option value="mi">mi</option>
            <option value="mi">to</option>
            <option value="mi">tl</option>
        </select>
        <select name="kelas" id="">
            <option value="a">a</option>
            <option value="b">b</option>
            <option value="c">c</option>
        </select>
        <input type="number" name="semester" id="" placeholder="semester">
        <input type="submit" value="submit">
    </form>
</body>
</html>