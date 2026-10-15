
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .thankyou-container {
            max-width: 650px;
            margin: 50px auto;
            padding: 40px 35px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #4295ff;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .lead {
            color: #777;
            font-size: 16px;
            margin-bottom: 20px;
        }

        blockquote {
            background-color: #f8f9fa;
            border-left: 4px solid #4295ff;
            border-radius: 5px;
            padding: 16px;
            margin: 20px 0;
        }

        .email-info {
            color: #777;
            font-style: italic;
            line-height: 1.8;
            margin-top: 22px;
        }
    </style>
</head>
<body>

    <div class="thankyou-container">
        <h2>Terima Kasih {{ $nama }}!</h2>

        <p class="lead">
            Pertanyaan Anda telah berhasil dikirim.
        </p>

        <blockquote>
            <strong>Pertanyaan Anda:</strong><br>
            "{{ $pertanyaan }}"
        </blockquote>

        <p class="email-info">
            Pertanyaan Anda akan segera kami tanggapi dan balas melalui email
            <strong>{{ $email }}</strong>.<br><br>
            Mohon cek kotak masuk atau folder spam Anda secara berkala.
        </p>

        <a href="{{ url('/') }}" class="btn btn-primary mt-3">
            Kembali ke Beranda
        </a>
    </div>

</body>
</html>
