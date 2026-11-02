<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>

<body>

    <h2>Edit Employee</h2>

    <form action="/employees/{{ $employee->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required value="{{ $employee->name }}">
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="{{ $employee->email }}">
        <br><br>

        <label for="designation">Designation:</label>
        <input type="text" id="designation" name="designation" required value="{{ $employee->designation }}">
        <br><br>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" required value="{{ $employee->salary }}">
        <br><br>

        <button type="submit">Edit Employee</button>
        <button type="button" onclick="window.location.href='/employees'">Cancel</button>
    </form>
</body>

</html>