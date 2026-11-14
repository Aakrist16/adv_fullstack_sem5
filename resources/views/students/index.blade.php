
<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

    <h1>Students List</h1>

    <a href="{{ route('students.create') }}">Add New Student</a>

    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Date of Birth</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->date_of_birth }}</td>

                    <td>
                        <a href="{{ route('students.edit', $student->id) }}">
                            Edit
                        </a>

                        <form
                            action="{{ route('students.destroy', $student->id) }}"
                            method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this student?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
