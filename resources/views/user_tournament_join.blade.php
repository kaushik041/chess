
<!DOCTYPE html>
<html>
	<head>
		<title>Chess</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="{{asset('user_assets/css/demo.css')}}">
		<link rel="stylesheet" href="{{asset('user_assets/css/sky-forms.css')}}">
	</head>
	<body class="bg-purple">
		<div class="body">

			<form action="" class="sky-form" style="background:url({{asset('user_assets/img/background.jpg')}});">
				<header style="text-align: center;">
                    <img src="{{asset('user_assets/img/logo.png')}}" alt="" />
                    <p>User Details</p>
                </header>

				<fieldset>

					<section>
						<label class="input">
							<i class="icon-prepend icon-user"></i>
							<input type="text" placeholder="Enter ID">
						</label>
					</section>
                    <section>
                        <label class="input">
                            <i class="icon-prepend icon-calendar"></i>
                            <input type="date" placeholder="Enter DOB">
                        </label>
                    </section>
				</fieldset>

				<footer>
					<button type="submit" class="button">Join</button>
				</footer>
			</form>

		</div>
	</body>
</html>
