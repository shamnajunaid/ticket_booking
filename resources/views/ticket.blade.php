<!DOCTYPE html>
<html>
<head>
    <title>Movie Ticket</title>
    <style type="text/css">
    	table{
    		 width: 100%;
    	}
    	table, th, td {
			  border: 1px solid black;
			}
	</style>
</head>
<body style="text-align: center;">
    <table>
    	<tr>
    		<td>Name</td>
    		<td>{{$name}}</td>
    	</tr>
    	<tr>
    		<td>email</td>
    		<td>{{$email}}</td>
    	</tr>
    	<tr>
    		<td>Theater Name</td>
    		<td>{{$theater_name}}</td>
    	</tr>
    	<tr>
    		<td>Movie Name</td>
    		<td>{{$movie_name}}</td>
    	</tr>
    	<tr>
    		<td>Time</td>
    		<td>{{$time}}</td>
    	</tr>
    </table>
</body>
</html>