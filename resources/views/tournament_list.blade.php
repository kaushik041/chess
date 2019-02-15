
<!DOCTYPE html>
<html>
	<head>
		<title>Sky Forms</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="{{asset('user_assets/css/demo.css')}}">
        <link rel="stylesheet" href="{{asset('user_assets/css/sky-forms.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	</head>
	<body class="bg-purple">
		<div class="body" style="max-width:100%;">

			<form action="" class="sky-form" style="background:url({{asset('user_assets/img/background.jpg')}});">
                <header style="text-align: center;">
                    <img src="{{asset('user_assets/img/logo.png')}}" alt="" />
                </header>
                <fieldset style="padding: 25px 30px 25px;">
                    <div class="row">
                        <table class="table table-bordered">
                            <tr>
                                <th>Tournament</th>
                                <th>Place</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Entry Fee</th>
                                <th>Prize Money</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                            @if(isset($tournaments))
                            @foreach ($tournaments as $item)
                            <tr class="success">
                            <td>{{$item->t_name}}</td>
                            <td>{{$item->t_place}}</td>
                            <td>{{$item->t_date}}</td>
                            <td>{{$item->t_time}}</td>
                            <td>{{$item->t_fees}}</td>
                            <td>{{$item->t_prize}}</td>
                            <td><a href="{{url('/user_tournament_join')}}" class="btn btn-primary" style="color:white">Apply</a></td>
                            </tr>
                            @endforeach
                            @endif
                            </tbody> 
                        </table>
                    </div>
                </fieldset>

            </form>

		</div>
	</body>
</html>
