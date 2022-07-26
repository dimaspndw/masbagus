<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan data pengunjung</h4>
            <h6><a target="_blank" href="">{{$indonesianformat}}</a>
        </h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Gender</th>
                <th>Usia</th>
                <th>Disabilitas</th>
                <th>Pesan</th>
                <th>Status Vaksin</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengunjung as $p)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$p->gender}}</td>
                <td>{{$p->usia}}</td>
                <td>{{$p->disabilitas}}</td>
                <td>{{$p->pesan}}</td>
                <td>{{$p->status_vaksin}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>