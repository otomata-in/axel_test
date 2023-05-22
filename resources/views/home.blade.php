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

        .container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .container form {
            margin-right: 10px;
            display: inline-block;
        }

        .container button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
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

        tr:hover {
            background-color: #f5f5f5;
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

    <div class="container">
        <form method="GET" action="{{ route('address.create') }}">
            <button type="submit">Add Address</button>
        </form>
        <form method="GET" action="{{ route('address.index') }}">
            <button type="submit">Show Addresses</button>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Addresses</th>
            </tr>
        </thead>
        <tbody>
            {{-- Loop through addresses and display them --}}
        </tbody>
    </table>
</body>
</html>
