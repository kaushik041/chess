
<!DOCTYPE html>
<html>
	<head>
		<title>Sky Forms</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="{{asset('user_assets/css/demo.css')}}">
		<link rel="stylesheet" href="{{asset('user_assets/css/sky-forms.css')}}">
	</head>
	<body class="bg-purple">
		<div class="body">

		<form action="{{url('/register')}}" class="sky-form" method="POST" style="background:url({{asset('user_assets/img/background.jpg')}});">
			@csrf
				<header style="text-align: center;">
                    <img src="{{asset('user_assets/img/logo.png')}}" alt="" />
                    <p>Registration Details</p>
                </header>

				<fieldset>

					<section>
						<label class="input">
							<i class="icon-prepend icon-user"></i>
							<input type="text" name="full_name" placeholder="Full Name">
						</label>
					</section>
					<section>
						<label class="input">
							<i class="icon-prepend icon-user"></i>
							<input type="text" name="guardian_name" placeholder="Gurdian Name">
						</label>
					</section>

					<div class="row">
						<section class="col col-6">
							<label class="input">
								<i class="icon-prepend icon-calendar"></i>
								<input type="text" name="dob" placeholder="DOB">
							</label>
						</section>

						<section class="col col-6">
							<label class="input">
								<i class="icon-prepend icon-phone"></i>
								<input type="tel" name="phone" placeholder="Phone">
							</label>
						</section>
					</div>

					<div class="row">
						<section class="col col-6">
							<label class="input">
								<i class="icon-prepend icon-envelope-alt"></i>
								<input type="email" name="email" placeholder="E-mail">
							</label>
						</section>

						<section class="col col-6">
							<div class="inline-group">
							<label class="radio"><input type="radio" name="gender" value="male" checked><i></i>Male</label>
							<label class="radio"><input type="radio" name="gender" value="female"><i></i>Female</label>
						</div>
						</section>
					</div>
					<section>
						<label class="textarea">
							<i class="icon-prepend icon-map-marker"></i>
							<textarea rows="3" name="address" placeholder="Address"></textarea>
						</label>
					</section>
					<section>
						<label class="select">
							<select name="dist">
								<option value="0">select district</option>
								<option value="north_24">South 24 Pgs.</option>
								<option value="south_24">North 24 Pgs.</option>
							<select>
							<i></i>
						</label>
					</section>

				</fieldset>

				<footer>
					<button type="submit" class="button">Register</button>
				</footer>
			</form>

		</div>
	</body>
</html>
