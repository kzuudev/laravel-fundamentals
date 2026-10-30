<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Issues</title>
</head>
<body>
    <div>
        <h1>View Issues</h1>
        <div>
            <p>{{ $issue->title }}</p>
            <p>{{ $issue->description }}</p>
            <p>{{ $issue->status }}</p>
            <p>{{ $issue->priority }}</p>
            <p>{{ $issue->type }}</p>
            <p>{{ $issue->assigned_to }}</p>
        </div>
        <div>
            <a href="{{ route('issue.index') }}">Back</a>
        </div>
    </div>
</body>
</html>