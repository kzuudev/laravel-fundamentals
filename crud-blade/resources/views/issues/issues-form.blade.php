<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Issue</title>
</head>

<body>
    <div>
        <h1>Create Issues</h1>

        <div>
            <form action="{{ route('issue.store') }}" method="POST">
                @csrf
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Enter title">
                </div>
                <div>
                    <label for="description">Description</label>
                    <textarea name="description" id="description" placeholder="Enter description"></textarea>
                </div>

                <div>
                    <label for="type">Type</label>
                    <select name="type" id="type">
                        <option value="bug">Bug</option>
                        <option value="feature">Feature</option>
                        <option value="task">Task</option>
                    </select>
                </div>

                <div>
                    <div>
                        <button type="submit">Create</button>
                    </div>

                    <div>
                        <a href="{{ route('issue.index') }}">Back</a>
                    </div>
                </div>

            </form>
        </div>
    </div>

</body>

</html>