<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

</head>

<body>

    <div class="container">

        <h1 class="text-center">Tabel</h1>
        <br>


        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="tabel-excel">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Suhu Udara</th>
                        <th>Curah Hujan</th>
                        <th>DC</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($collection[0] as $key => $value)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value[1] }}</td>
                            <td>{{ $value[2] }}</td>
                            <td>{{ $value[3] }}</td>
                            <td>{{ $value[4] }}</td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabel-excel').DataTable();
        });
    </script>

</body>

</html>
