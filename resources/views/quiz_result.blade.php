<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
</head>
<body>
    <h1>Quiz Result</h1>
    <p>Your quiz score is: {{ auth()->user()->quiz_score }}</p>
    <p>Thank you for taking the quiz!</p>
</body>
</html>
