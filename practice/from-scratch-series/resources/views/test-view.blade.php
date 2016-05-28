<!DOCTYPE html>
<html>
<head>
	<title>test-view</title>
</head>
<body>
@if(empty($people))
	<pre>no one comes</pre>
@else
	@foreach($people as $person)
		<li>{{$person}}</li>
	@endforeach
@endif

</body>
</html>