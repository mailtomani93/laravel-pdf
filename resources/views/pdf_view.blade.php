<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O Clock Software Employee List</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3" style="text-align: center">
                <img src="data:image/png;base64,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" width="200">
            </div>
            <div class="col-md-9" style="text-align: center">
            <h2 class="text-center mb-3">O Clock Software Employee List</h2>
            </div>
        </div>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">DOB</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employee ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data['id'] }}</th>
                    <td>{{ $data['name'] }}</td>
                    <td>{{ $data['email'] }}</td>
                    <td>{{ $data['phone_number'] }}</td>
                    <td>{{ $data['dob'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>