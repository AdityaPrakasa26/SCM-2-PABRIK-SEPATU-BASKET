<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Export PDF</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        h1 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table thead th {
            padding: 8px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            text-align: left;
            font-weight: bold;
            font-size: 14px;
            color: #333;
        }
        table tbody td {
            padding: 8px;
            border: 1px solid #ddd;
            font-size: 12px;
            color: #333;
        }
        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Laporan Barang</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kategori Barang</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Kategoribarang->nama_kategori_barang }}</td>
                    <td>{{ $item->nama_barang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
