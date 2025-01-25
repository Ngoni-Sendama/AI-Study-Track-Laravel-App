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

    @foreach ($exam->questionSets as $questionSet)
        <h2>{{ $questionSet->title }}</h2> <!-- Assuming each question set has a 'title' attribute -->

        @foreach ($questionSet->questions as $question)
            <p>{{ $question->question_text }}</p> <!-- Assuming each question has a 'question_text' -->

            <ul>
                @foreach ($question->options as $option)
                    <li>{{ $option->option_text }} 
                        @if ($option->is_correct) 
                            <strong>(Correct Answer)</strong> 
                        @endif
                    </li>
                @endforeach
            </ul>
        @endforeach
    @endforeach

</body>

</html>
