<!DOCTYPE html>
<html>
<head>
    <style>
        html, body {
            margin: 0 !important;
            padding: 0 !important;
            width: 40mm;
            height: 30mm;
            background-color: white;
            overflow: hidden;
        }

        .page-break {
            page-break-after: always;
        }

        .qr-container {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(90deg);
            text-align: center;
        }

        .qr-image {
            width: 25mm;
            height: 25mm;
        }
    </style>
</head>
<body>
    @foreach($copies as $copy)
        <div class="page-break">
            <div class="qr-container">
                <img class="qr-image" src="data:image/png;base64,{{ $copy['qr'] }}">
            </div>
        </div>
    @endforeach
</body>
</html>
