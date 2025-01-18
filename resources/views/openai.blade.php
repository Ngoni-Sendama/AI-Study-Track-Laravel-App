<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenAI Text Generator</title>
</head>
<body>
    <h1>OpenAI Text Generator</h1>

    <form action="{{ route('generate-text-openai') }}" method="POST">
        @csrf
        <label for="prompt">Enter your request:</label>
        <textarea id="prompt" name="prompt" placeholder="Type your prompt here..." required></textarea>

        <button type="submit">Generate Text</button>
    </form>

    @if(session('generated_text'))
        <div>
            <h2>Generated Text:</h2>
            <p>{{ session('generated_text') }}</p>
        </div>
    @endif

    @if(session('error'))
        <div style="color: red;">
            <strong>Error: </strong>{{ session('error') }}
        </div>
    @endif
</body>
</html>
