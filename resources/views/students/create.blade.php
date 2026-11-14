<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

    <h1>Add New Student</h1>

    <form action="{{ route('students.store') }}" method="POST">

        @csrf

        <label>Name:</label><br>
        <input type="text" name="name" required>
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required>
        <br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" required>
        <br><br>

        <label>Address:</label><br>
        <textarea name="address"></textarea>
        <br><br>

        <label>Date of Birth:</label><br>
        <input type="date" name="date_of_birth">
        <br><br>

        <button type="submit">Save Student</button>

    </form>

    <br>

    <a href="{{ route('students.index') }}">Back to Students List</a>

</body>
</html>