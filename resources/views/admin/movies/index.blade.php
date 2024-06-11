<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
    <table>
        @foreach ($movies as $movie)
        <tr>
            <th>{{$movie->title}}</th>
            <td><img src={{$movie->image_url}} alt="image"></td>
            <td>{{$movie->published_year}}</td>
            <td>{{$movie->is_showing ? "上映中" : "上映予定"}}</td>
            <td>{{$movie->description}}</td>
            <td><a href="{{ route('admin.movies.edit', $movie) }}">編集</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>