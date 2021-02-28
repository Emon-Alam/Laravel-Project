<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Pay | Customer-User Details</title>
</head>
<body>
    <h1>User Details, {{ $user['userId'] }}</h1>
    <a href="{{route('home.Cuserlist')}}"> Back</a>

			<table>
				<tr>
					<td colspan="2">
						<img src="{{asset('/upload')}}/{{$user['profile_img']}}" width="100px" height="100px"> </td>
				</tr>
				<tr>
					<td>Name: </td>
					<td>{{$user['name']}}</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>{{ $user['username']}}</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>{{ $user['password']}}</td>
				</tr>
                <tr>
					<td>CGPA</td>
					<td>{{ $user['cgpa'] }}</td>
				</tr>
				<tr>
					<td>Dept</td>
					<td>{{ $user['dept'] }}</td>
				</tr>
			</table>
</body>
</html>
