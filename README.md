# Features

- Upload syllabus, lecture notes (PDFs, PPTs, books, or teacher-provided materials)
- Automatically extract topics from the uploaded syllabus and store them in the database using [PHP/Parser](https://github.com/smalot/pdfparser)
- Add personal class notes and AI will generate smart summaries
- AI-powered exam generation – More than 20 MCQs with options A-D, based on the uploaded content
-  Practice for CA’s, Midterms, and Final Exams in an engaging way
- Average Marks Analytics
- Roles and Permissions using [Spatie](https://filamentphp.com/plugins/bezhansalleh-shield)
- Activity Logs 

# Images
![dashbord](./images/Dashboard.png "Dashboard")

# Requirements
- Mistral API [click here](https://console.mistral.ai/api-keys/)
- Gemini API [click here](https://aistudio.google.com/app/apikey)

## Platform Features Plan

- [x] User Auth
- [x] Manage Subjects
- [x] Manage Syllabus
- [x] Generate Units and Topics from Syllabus automatically
- [x] Media View
- [x] Manage Notes
- [x] Allow users to select subject, units, topics, exam. Generate MCQs exams using AI, (Input: Subject, units, topics, .)
- [x] Exam interface, Multiple choice loop
- [x] Mark answers, and generate scores
- [ ] Study Session Page, Mark Syllabus, units, topics and notes
- [ ] Generate Flashcard using AI (OpenAI or Geminni) only key points
- [ ] Summarize Notes using AI
- [ ] Use AI to show weak areas (units/topics with poor performance). And Study Recommendations
- [ ] Exams Perfomance, Subject Perfomance, Best Marks Perfomance, Next Date Exam, Topics with weaknesses
- [ ] Send Alerts

# Admin Reg
- [ ] regenerate Policies `php artisan shield:generate --all`
- [ ] reAssign Super Admin `php artisan shield:super-admin`