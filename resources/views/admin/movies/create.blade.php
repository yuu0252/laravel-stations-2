<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MovieCreate</title>
</head>
<body>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('admin.movies.store')}}" method="POST">
        @csrf
        <label for="title">映画タイトル</label>
        <input type="text" name="title" id="title" />
        <br />
        <label for="image_url">画像URL</label>
        <input type="text" name="image_url" id="image_url">
        <br />
        <label for="published_year">公開年</label>
        <input type="number" name="published_year" id="published_year">
        <br />
        <label for="is_showing">公開中かどうか</label>
        <input type="hidden" name="is_showing" value="0">
        <input type="checkbox" name="is_showing" id="is_showing" value="1">
        <br />
        <label for="description">概要</label>
        <textarea name="description" id="description"></textarea>
        <br />
        <button type="submit">送信</button>
    </form>
</body>
</html>