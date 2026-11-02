<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>

<body>

    <h2>Add New Employee</h2>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="/employees" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="designation">Designation:</label>
        <input type="text" id="designation" name="designation" required>
        <br><br>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" required>
        <br><br>

        <button type="submit">Save Employee</button>
    </form>
</body>

</html>