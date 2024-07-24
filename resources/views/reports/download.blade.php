<!DOCTYPE html>
<html>
<head>
    <title>Reports</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Data Laporan</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Bahan</th>
                <th>Stock</th>
                <th>Report Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $report)
                <tr>
                    <td>{{ $report->id }}</td>
                    <td>{{ $report->stock->product_name }}</td>
                    <td>{{ $report->stock->quantity }}</td>
                    <td>{{ $report->report_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
