<x-filament-panels::page>
    <h1>Subject: {{ $exam->subject->name }}</h1>
    <p>
        You Scored: <span
            @if ($exam->marks >= 50) style="color: #46cd5b; font-size: 25px; font-weight:bold" 
    @else
        style="color: red; font-size: 25px; font-weight:bold" @endif>{{ $exam->marks }}%</span>
    </p>


    @foreach ($exam->questionSets as $questionSet)
        <h2>{{ $questionSet->title }}</h2> <!-- Assuming each question set has a 'title' attribute -->

        @foreach ($questionSet->questions as $question)
            <p> {{ $loop->iteration }}: {{ $question->question_text }}</p>
            <!-- Assuming each question has a 'question_text' -->

            <ul>
                @foreach ($question->options as $option)
                    <li @if ($option->is_correct) style="color:#46cd5b; font-weight: bold" @endif>
                        @if ($option->is_correct)
                            {{ chr(64 + $loop->iteration) }}. {{ $option->option_text }}
                        @else
                            {{ chr(64 + $loop->iteration) }}. {{ $option->option_text }}
                        @endif


                        <!-- Get user's selected answer -->
                        @php
                            $userAnswer = $this->getUserAnswers()->where('question_id', $question->id)->first();
                        @endphp

                        @if ($userAnswer)
                            <!-- Display if the option is the user's selected answer -->
                            @if ($userAnswer->option_id == $option->id)
                                <strong>(Your Answer)</strong>
                            @endif
                        @endif

                        <!-- Display if the option is the correct one -->
                        @if ($option->is_correct)
                            <strong>(Correct Answer)</strong>
                        @endif

                        <!-- Optionally, indicate if the user's answer was wrong -->
                        @if ($userAnswer && $userAnswer->option_id != $option->id && $option->is_correct)
                            <strong style="color: red;">(You Selected a Wrong Answer)</strong>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endforeach
    @endforeach

</x-filament-panels::page>
