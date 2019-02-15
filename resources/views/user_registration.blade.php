
<!DOCTYPE html>
<html>
	<head>
		<title>Sky Forms</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="{{asset('user_assets/css/demo.css')}}">
		<link rel="stylesheet" href="{{asset('user_assets/css/sky-forms.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
		<style>
			input[type="date"]:before { content: attr(placeholder) !important; color:#404040; margin-right: 0.5em; } input[type="date"]:focus:before, input[type="date"]:valid:before { content: ""; }

		</style>
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
							<input type="text" name="full_name" placeholder="Full Name *" required>
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
								<input type="date" name="dob" placeholder="DOB *" required>
							</label>
						</section>

						<section class="col col-6">
							<label class="input">
								<i class="icon-prepend icon-phone"></i>
								<input type="tel" name="phone" placeholder="Phone *" required>
							</label>
						</section>
					</div>

					<div class="row">
						<section class="col col-6">
							<label class="input">
								<i class="icon-prepend icon-envelope-alt"></i>
								<input type="email" name="email" placeholder="E-mail *" required>
							</label>
						</section>

						<section class="col col-6">
							<div class="inline-group">
							<label class="radio"><input type="radio" name="gender" value="male" checked><i></i>Male *</label>
							<label class="radio"><input type="radio" name="gender" value="female"><i></i>Female *</label>
						</div>
						</section>
					</div>
					<section>
						<label class="textarea">
							<i class="icon-prepend icon-map-marker"></i>
							<textarea rows="3" name="address" placeholder="Address *" required></textarea>
						</label>
					</section>
					<section>
						<label class="select">
							<select name="dist" required aria-required="true">
								<option value="">select district *</option>
								<option value="01">Darjiling</option>
								<option value="02">Jalpaiguri</option>
								<option value="03">Kochbihar</option>
								<option value="04">Uttardinajpur</option>
								<option value="05">DakshinDinajpur</option>
								<option value="06">Maldah</option>
								<option value="07">Murshidabad</option>
								<option value="08">Birbhum</option>
								<option value="09">Barddhaman</option>
								<option value="10">Nadia</option>
								<option value="11">NorthTwentyFourParganas</option>
								<option value="12">Hugli</option>
								<option value="13">Bankura</option>
								<option value="14">Puruliya</option>
								<option value="15">Haora</option>
								<option value="16">Kolkata</option>
								<option value="17">SouthTwentyFourParganas</option>
								<option value="18">PaschimMedinipur</option>
								<option value="19">Purbamedinipur</option>
							<select>
							<i></i>
						</label>
					</section>

				</fieldset>

				<footer>
					<button type="submit" class="button" onclick="abc()">Register</button>
				</footer>
			</form>

		</div>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.js"></script>
</html>
<script>
 function abc(){
	Swal.fire('Any fool can use a computer');
 }
</script>