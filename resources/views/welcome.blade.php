<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF to Text Generation</title>
</head>

<body>
    @foreach ($subjects as $subject)
        {{ $subject->name }} <br>
    @endforeach
    <h1>PDF to Text</h1>

    <form action="{{ url('convert-pdf') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="pdf" accept="application/pdf" required>
        <button type="submit">Upload PDF</button>
    </form>


    @if (session('generated_text'))
        <div>
            <h2>Generated Text:</h2>
            <p>{{ session('generated_text') }}</p>
        </div>
    @endif

    @if (session('error'))
        <div style="color: red;">
            <strong>Error: </strong>{{ session('error') }}
        </div>
    @endif
</body>

</html>
