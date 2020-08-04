<!DOCTYPE html>
<html>
<head>
	<title>Create a Project</title>
</head>
<body>
	<form method="POST" action="/projects">
		@csrf
		
		<div>
			<input type="text" placeholder="Project Title" name="title">
		</div>
		<div>
			<textarea name="description" placeholder="Describe your Project"></textarea>
		</div>
		<div>
			<button type="submit">Create Project</button>
		</div>
	</form>
</body>
</html>