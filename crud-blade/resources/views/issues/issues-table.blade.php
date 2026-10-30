<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issues Table</title>
</head>

<body>
    <div>
        <h1>Issues Table</h1>

        <a href="{{ route('issue.create') }}">Create Issue</a>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Priority</th>
                        <th>Type</th>
                        <th>Assigned to</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($issues as $issue)
                    <tr>
                        <td>{{ $issue->id }}</td>
                        <td>{{ $issue->title }}</td>
                        <td>{{ $issue->description }}</td>
                        <td>{{ $issue->status }}</td>
                        <td>{{ $issue->priority }}</td>
                        <td>{{ $issue->type }}</td>
                        <td>{{ $issue->assigned_to }}</td>
                        <td>
                            <div class="flex items-center gap-2">
                                <a href="{{ route('issue.show', $issue->id) }}">View</a>
                                <a href="{{ route('issue.edit', $issue->id) }}">Edit</a>
                                <form action="{{ route('issue.destroy', $issue->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Destroy</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>