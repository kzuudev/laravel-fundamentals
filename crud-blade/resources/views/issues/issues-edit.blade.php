<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Issues</title>
</head>

<body>
    <div>
        <h1>Edit Issues</h1>

        <div>
            <form action="{{ route('issue.update', $issue->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ $issue->title }}">
                </div>
                <div>
                    <label for="description">Description</label>
                    <textarea name="description" id="description">{{ $issue->description }}</textarea>
                </div>
                <div>
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" value="{{ $issue->type }}">
                </div>
                <div>
                    <button type="submit">Update</button>
                </div>
                <div>
                        <a href="{{ route('issue.index') }}">Close</a>
                    </div>
            </form>
        </div>

    </div>
</body>

</html>