<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $student->name }}" required>
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $student->email }}" required>
        <br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" value="{{ $student->phone }}" required>
        <br><br>

        <label>Address:</label><br>
        <textarea name="address">{{ $student->address }}</textarea>
        <br><br>

        <label>Date of Birth:</label><br>
        <input type="date" name="date_of_birth" value="{{ $student->date_of_birth }}">
        <br><br>

        <button type="submit">Update Student</button>

    </form>

    <br>

    <a href="{{ route('students.index') }}">Back to Students List</a>

</body>
</html>