<!DOCTYPE html>
<html>
<head>
    <style>
        @page {
            margin: 0cm;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .page {
            page-break-after: always;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .page:last-child {
            page-break-after: avoid;
        }

        .qr-wrapper {
            padding-top: 2%;
        }
    </style>
</head>
<body>
    @foreach($data as $path)
        <div class="page">
            <div class="qr-wrapper">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents($path)) }}" width="690">
            </div>
        </div>
    @endforeach
</body>
</html>
