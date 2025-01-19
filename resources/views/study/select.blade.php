<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http://equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <form action="">
        <select name="subject" id="subject-select">
            <option value="}">Select The Subject</option>

            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
        </select>

        <div id="topic-checkboxes"></div>
        <div id="notes"></div>
        <button>Submit</button>
    </form>
    <script>
        $(document).ready(function() {
            $('#subject-select').on('change', function() {
                var subjectId = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: '/get-topics-and-notes-by-subject',
                    data: {
                        subject_id: subjectId
                    },
                    success: function(data) {
                        $('#topic-checkboxes').empty();
                        $.each(data.topics, function(index, topic) {
                            $('#topic-checkboxes').append(
                                '<input type="checkbox" name="topics[]" value="' +
                                topic.id + '">' + topic.topics + '<br>');
                        });

                        $('#notes').empty();
                        $('#notes').append('<h2>Notes:</h2>');
                        $.each(data.notes, function(index, note) {
                            $('#notes').append(
                                '<input type="checkbox" name="topics[]" value="' +
                                note.id + '">' + note.note_content + '<br>'
                            );
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>

</body>

</html>