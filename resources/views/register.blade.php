<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<h2> Buat Account Baru! </h2>
<h3> Sign Up Form </h3>

    <form action="/welcome" method="POST">
        @csrf
		<label for="firstname"> First Name: </label><br>
		<input type="text" id="firstname" name="firstname" required=""> <br> <br>

		<label for="lastname"> Last Name: </label> <br>
		<input type="text" id="lastname" name="lastname" required="">

		
		<p style="margin-bottom:0;"> Gender: </p>
		<input type="radio" name="Gender" value="Male" required="">
		<label for="Male"> Male </label> <br>
		<input type="radio" name="Gender" value="Female" required="">
		<label for="Female"> Female </label> <br>
		<input type="radio" name="Gender" value="Other" required="">
		<label for="Other"> Other </label>
		
		
		<p style="margin-bottom:0;"> Nationality: </p>
		<select name = "Nationality" id="nationality" >
			<option value="Indonesian"> Indonesian </option>
			<option value="Singaporean"> Singaporean </option>
			<option value="Malaysian"> Malaysian </option>
			<option value="Australian"> Australian </option>
		</select>

		
		<p style="margin-bottom:0;"> Language </p>
		<input type="checkbox" name="Language1" id="Language1">
		<label for="Language1"> Bahasa Indonesia </label><br>
		<input type="checkbox" name="Language2" id="Language2">
		<label for="Language2"> English </label> <br>
		<input type="checkbox" name="Language3" id="Language3">
		<label for="Language3"> Other </label>


		<p style="margin-bottom:0;"> Bio </p>
		<textarea name="biodata" id="bio" cols="30" rows="20" ></textarea> 

		<br>

 		<button type="submit"> Sign Up </button>
	</form>
	<br>

    
</body>
</html>