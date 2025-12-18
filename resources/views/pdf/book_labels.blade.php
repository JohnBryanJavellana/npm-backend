<!DOCTYPE html>
<html>
<head>
    <style>
        .page-break {
            page-break-after: always;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    @foreach($copiesData as $index => $copy)
        <div class="container {{ !$loop->last ? 'page-break' : '' }}">
            <div class="qr-code">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents($copy)) }}" width="200">
            </div>
        </div>
    @endforeach
</body>
</html>
