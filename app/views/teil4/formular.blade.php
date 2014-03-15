<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			font-size: 30px;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 20%;
			margin-left: -150px;
			margin-top: -100px;
		}
	</style>
</head>
<body>
	<div class="welcome">
		<ul>
		@foreach ($errors->all() as $message)
		    <li>{{ $message }}</li>
		@endforeach
		</ul>
	
		{{ Form::open(array('action' => 'Teil4Controller@speichern')) }}
		
			{{ Form::label('title', 'Titel'); }}<br>
			{{ Form::text('title'); }}<br>
			
			{{ Form::label('text', 'Text'); }}<br>
			{{ Form::textarea('text'); }}<br>
			
			{{ Form::submit('Speichern'); }}
		{{ Form::close() }}		
	</div>
</body>
</html>
