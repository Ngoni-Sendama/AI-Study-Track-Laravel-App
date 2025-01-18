<!DOCTYPE html>
<html>
<head>
    <title>Laravel - Gemini Integration - Code Shotcut</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- CSRF token for secure AJAX requests -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <!-- Main container to center the form and chat window -->
    <div class="container mx-auto px-4 h-screen flex flex-col items-center justify-start pt-6">
        <!-- Form to ask questions -->
        <form id="ask" class="bg-gray-800 rounded-lg p-8 w-full max-w-3xl mb-6">
            <h1 class="text-2xl font-bold text-white mb-4 text-center">Laravel - Gemini</h1>
            <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="question">
                    Have a question? Ask Gemini
                </label>
                <!-- Input field for entering the question -->
                <input class="border border-gray-600 appearance-none rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:shadow-outline" id="question" name="question" type="text" placeholder="Ask Gemini">
                <div class="text-red-500 text-sm mt-2" id="question_help"></div>
            </div>
            <div class="flex items-center justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Ask
                </button>
            </div>
        </form>
        <!-- Chat area to display questions and answers -->
        <div class="container mx-auto px-4 mt-6 w-full max-w-3xl" id="chat"></div>
    </div>
    <!-- jQuery for handling AJAX requests -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    // Setup CSRF token for AJAX
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        // Clear the chat div when the page loads
        $('#chat').html('');
    });
    // Base URL for API requests
    let baseUrl = {!! json_encode(url('/')) !!};
    // Form submission handling
    $('#ask').submit(function(event) {
        // Prevent default form submission
        event.preventDefault();
        // Get form element
        let form = $('#ask')[0];
        // Collect form data
        let formData = new FormData(form);
        // AJAX request to submit the question
        $.ajax({
            url: baseUrl + '/question', // Endpoint to send the question
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                // Clear error messages
                refresh();
                // Create question and answer divs
                let divQuestion = `<div class="bg-gray-800 text-white rounded p-4 mb-4"><h4 class="font-bold">Question: ${data.question}</h4></div>`;
                let divAnswer = `<div class="bg-gray-800 text-white rounded p-4 mb-4"><h5 class="font-bold">Answer</h5><textarea class="w-full h-32 p-2 border border-gray-600 rounded bg-gray-900 text-white" readonly>${data.answer}</textarea></div>`;
                // Append the question and answer to the chat div
                $('#chat').append(divQuestion);
                $('#chat').append(divAnswer);
            },
            error: function(reject) {
                refresh(); // Clear error messages
                if (reject.status === 422) {
                // Validation error handling
                let errors = $.parseJSON(reject.responseText);
                    // Display the validation errors
                    $.each(errors.errors, function(key, value) {
                        $('#' + key + '_help').text(value[0]);
                    });
                }
            }
        });
    });
    // Function to clear error messages
    function refresh() {
        $('#question_help').text('');
    }
</script>
</body>
</html>