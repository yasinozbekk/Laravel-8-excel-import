<!DOCTYPE html>
<html lang="en">

<head>
    <title>Çıktı</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                @if (!empty($data[0]))
                @foreach ($data[0] as $header)
                <th>{{ $header }}</th>
                @endforeach
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach (array_slice($data, 1) as $row)
            <tr>
                @foreach ($row as $value)
                <td>{{ $value }}</td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>