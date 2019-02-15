
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
                    <p>Payment Details</p>
                </header>

				<fieldset>
                    <section>
                        <label class="input">
                            <input type="text" value="Name : Sankalpa Naskar" disabled>
                        </label>
                    </section>
                    <section>
                        <label class="input">
                            <input type="text" value="Validity : 84 Days Left" disabled>
                        </label>
                    </section>
					<section>
						<label class="input">
							<input type="text" value="Tournament : Tournament Kolkata Championship" disabled>
						</label>
					</section>
                    <section>
                        <label class="input">
                            <input type="text" value="Total Amount : Rs. 550" disabled>
                        </label>
                    </section>
				</fieldset>

				<footer>
					<button type="submit" class="button">Confirm Payment</button>
				</footer>
			</form>

		</div>
	</body>
</html>
