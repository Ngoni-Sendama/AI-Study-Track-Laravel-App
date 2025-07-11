<x-filament-panels::page>
    <h1>Subject: {{ $exam->subject->name }}</h1>
    <p>
        You Scored: <span
            @if ($exam->marks >= 50) style="color: #46cd5b; font-size: 25px; font-weight:bold" 
    @else
        style="color: red; font-size: 25px; font-weight:bold" @endif>{{ $exam->marks }}%</span>
    </p>

    @php
        // Initialize an array to store weaknesses (areas to study more)
        $weaknesses = [];
    @endphp

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
                            <!-- Add question to weaknesses array -->
                            @php
                                $weaknesses[] = $question->question_text;
                            @endphp
                        @endif
                    </li>
                    <!-- Inside each question -->
                 
                @endforeach
                   @livewire('explain-question', ['question' => $question], key($question->id))
            </ul>
        @endforeach
    @endforeach

    <!-- Display the weaknesses (areas to study more) -->
    @if (count($weaknesses) > 0)
        <h3>Areas to Study More:</h3>
        <ul>
            @foreach ($weaknesses as $weakness)
                <li>{{ $weakness }}</li>
            @endforeach
        </ul>
    @else
        <p>Well done! You answered all questions correctly.</p>
    @endif
</x-filament-panels::page>
