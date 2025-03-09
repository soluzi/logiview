<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogiView - Laravel Log Viewer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        pre {
            background: #f5f5f5;
            padding: 10px;
            border-radius: 5px;
        }

        button {
            margin-top: 10px;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h2>Laravel Logs</h2>
    <form action="{{ route('logiview.clear') }}" method="POST">
        @csrf
        <button type="submit">Clear Logs</button>
    </form>
    <a href="{{ route('logiview.download') }}"><button>Download Log</button></a>

    <h3>Log Entries:</h3>
    <pre>{{ implode("\n", array_reverse($logs)) }}</pre>
</body>

</html>
