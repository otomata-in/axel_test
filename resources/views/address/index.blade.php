<!DOCTYPE html>
<html>
<head>
    <title>View address</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Your Addresses</h1>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($address as $ad)
                <tr>
                    <td>address of user with id: {{ $ad->username }}</td>
                    <td>{{ $ad->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
