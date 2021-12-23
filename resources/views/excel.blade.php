<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import Excel</title>
</head>

<body>

    <form action="{{ route('excel-db') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="excel">Input Excel To DB</label><br>
        <input type="file" name="excel" id="excel" accept=".xlsx"><br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <br>
    <br>
    <br>
    <br>

    <form action="{{ route('excel-table') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="excel">Input Excel To View</label><br>
        <input type="file" name="excel" id="excel" accept=".xlsx"><br>

        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>
