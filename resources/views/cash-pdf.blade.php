<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style untuk tabel */
        #datatable {
            width: 100%;
            border-collapse: collapse;
        }

        #datatable th, #datatable td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        #datatable th {
            background-color: #f2f2f2;
            color: #333;
        }

        #datatable tr:nth-child(even){background-color: #f9f9f9;}

        #datatable tr:hover {background-color: #ddd;}

        #datatable th {
            padding-top: 12px;
            padding-bottom: 12px;
        }
    </style>
</head>
<body>
    <table id="datatable" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Tipe</th>
                <th>Nominal</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $no => $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->tipe }}</td>
                    <td>Rp{{ number_format($item->nominal, 2, ',', '.') }}</td>
                    <td>{{ $item->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>