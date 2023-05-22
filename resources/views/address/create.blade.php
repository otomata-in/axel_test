<!DOCTYPE html>
<html>
<head>
    <title>Add address</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Add new Address</h1>

    @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('address.store') }}">
        @csrf



        <div class="form-group">
            <label for="description">Address</label>
            <textarea name="description" id="description" required>{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
