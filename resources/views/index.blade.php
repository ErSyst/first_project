<!-- resources/views/examples/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examples</title>
</head>
<body>
<h1>Examples</h1>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Location</th>
        <th>People Count</th>
        <th>Date</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    </thead>
    <tbody>
    @foreach($examples as $example)
        <tr>
            <td>{{ $example->name }}</td>
            <td>{{ $example->location }}</td>
            <td>{{ $example->people_count }}</td>
            <td>{{ $example->date }}</td>
            <td>{{ $example->created_at }}</td>
            <td>{{ $example->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
