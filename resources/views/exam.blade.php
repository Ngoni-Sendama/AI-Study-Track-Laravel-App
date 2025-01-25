<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam Details</title>
</head>

<body>
    <h1>{{ $exam->subject_id }}</h1> <!-- Example subject_id, change it as needed -->

    <form action="{{ route('submit.exam', $exam->id) }}" method="POST">
        @csrf

        @foreach ($exam->questionSets as $questionSet)
            <h2>{{ $questionSet->title }}</h2> <!-- Assuming each question set has a 'title' attribute -->

            @foreach ($questionSet->questions as $question)
                <p>{{ $question->question_text }}</p> <!-- Assuming each question has a 'question_text' -->

                <ul>
                    @foreach ($question->options as $option)
                        <li>
                            <input type="radio" name="question_{{ $question->id }}" value="{{ $option->id }}" id="option_{{ $option->id }}">
                            <label for="option_{{ $option->id }}">{{ $option->option_text }}</label>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        @endforeach

        <button type="submit">Submit Exam</button>
    </form>

</body>

</html>