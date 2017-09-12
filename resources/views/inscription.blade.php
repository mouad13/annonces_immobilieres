<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="row">
		<div class="col-md-4">

		</div>

		<div class="col-md-4">
			<form method='post' id="form" enctype="multipart/form-data" action='http://127.0.0.1:8000/admin/users/add-save'>
				{{csrf_field()}}

				<div class="form-group">
				<label for="InputName">Name: </label>
					<input name="name" type="text" class="form-control" id="InputName" placeholder="name">
				</div>
				<div class="form-group">
					<label for="InputEmail1">Email: </label>
					<input name="email" type="email" class="form-control" id="InputEmail1" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="InputPassword1">Password: </label>
					<input name="password" type="password" class="form-control" id="InputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="InputFile">Photo: </label>
					<input name="photo" type="file" id="InputFile">
				</div>
					
				<div class="form-group">
					<input name="id_cms_privileges" type="hidden" id="" value="2">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>

			</form>
		</div>


		<div class="col-md-4">

		</div>

	</div>

</body>
</html>