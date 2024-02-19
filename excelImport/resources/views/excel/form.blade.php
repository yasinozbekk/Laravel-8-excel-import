<!DOCTYPE html>
<html lang="en">

<head>
    <title>Excel Import</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Excel Dosyası Seçin</h2>
        <form action="{{ route('excel.read') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="excel_file">Excel Dosyası Seç</label>
                <input type="file" name="excel_file" class="form-control" id="excel_file" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Test Et</button>
            </div>
        </form>


    </div>

</html>