<!DOCTYPE html>
<html>
<head>
<title>
</title>
</head>
<body>
    <table border="3px solid black">
        <tr>
            <td>Nama Kategori</td>
        </tr>    
        @foreach($data as $li)
        <tr>
            <td>{{ $li->category_name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
