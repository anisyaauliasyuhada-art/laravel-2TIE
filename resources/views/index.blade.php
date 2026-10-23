```blade
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pertanyaan</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .question-container {
            max-width: 650px;
            margin: 60px auto;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #4295ff;
            border-color: #4295ff;
        }
    </style>
</head>

<body>

    <div class="container question-container">
        <div class="card">
            <div class="card-body p-4">

                <h5 class="card-title">Form Pertanyaan</h5>

                <!-- Pesan error dari Laravel -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form Pertanyaan -->
                <form action="{{ route('question.store') }}" method="POST">
                    @csrf

                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama') }}">
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}">
                    </div>

                    <!-- Pertanyaan -->
                    <div class="mb-3">
                        <label for="pertanyaan" class="form-label">Pertanyaan</label>

                        <textarea name="pertanyaan" id="pertanyaan" rows="4">{{ old('pertanyaan') }}</textarea>

                        @error('pertanyaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Tombol Kirim -->
                    <button type="submit" class="btn btn-primary">
                        Kirim Pertanyaan
                    </button>

                </form>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
```
