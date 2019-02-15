
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
			@if(session('status'))
				<p>{{session('status')}}</p>
			@endif
			<form action="{{url('/join_user')}}" method="POST" class="sky-form" style="background:url({{asset('user_assets/img/background.jpg')}});">
				@csrf
				<header style="text-align: center;">
                    <img src="{{asset('user_assets/img/logo.png')}}" alt="" />
                    <p>User Details</p>
                </header>

				<fieldset>

					<section>
						<label class="input">
							<i class="icon-prepend icon-user"></i>
							<input type="text" name="join_id" placeholder="Enter ID">
						</label>
					</section>
                    <section>
                        <label class="input">
                            <i class="icon-prepend icon-calendar"></i>
                            <input type="date" name="user_dob" placeholder="Enter DOB">
                        </label>
                    </section>
				</fieldset>
				<footer>
					<button type="submit" class="button" style="color:white; background:#204d74">Join</button>
				</footer>
			</form>

		</div>
	</body>
</html>
