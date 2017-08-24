<!DOCTYPE html>
<html>
<head>
	<title>City Management/View City Records</title>
</head>
<body>
	<a href="city/create">New City</a>
	<table border="2">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Action</th>
			<th>Action</th>
		</tr>
		@foreach($users as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			<td><a href="city/edit/{{$user->id}}">Edit</a></td>
			<td><a href="city/delete/{{$user->id}}">Delete</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>