<x-filament-panels::page>
    <h1>Subject: {{ $exam->subject->name }}</h1>
    <form method="POST" action="{{ route('filament.pages.exam-writing.submit', ['exam' => $exam->id]) }}">
        @csrf
        @foreach ($exam->questionSets as $questionSet)
            <h2>{{ $questionSet->title }}</h2>
    
            @foreach ($questionSet->questions as $question)
                <p style="margin-top: 10px; margin-bottom:10px;">{{ $loop->iteration }}: {{ $question->question_text }}</p>
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
    
        <button type="submit"
            style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600); margin-top:20px; width:200px; height:50px"
            class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action">Submit
            Exam</button>
    </form>
    
</x-filament-panels::page>
