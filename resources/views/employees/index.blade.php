<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>

<body>
    <h1>Employee List</h1>
    <button><a href="/employees/create">create</a></button>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->designation }}</td>
                    <td>{{ $employee->salary }}</td>
                    <td>
                        <a href="/employees/{{ $employee->id }}/edit">Edit</a>

                        <form action="/employees/{{ $employee->id }}/delete" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this employee?')">
                            @csrf

                            @method('DELETE')

                            <button onsubmit="return confirm('Are you sure you want to delete this employee?')"
                                type="submit">Delete</button>
                        </form>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</body>

</html>