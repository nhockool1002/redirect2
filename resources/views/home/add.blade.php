<html>
	<head>
		<title>XShare Check Location</title>
		<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700&amp;subset=vietnamese" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	</head>
	<body>
		<div class"wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						@if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    <i class="fa fa-times" aria-hidden="true"></i> {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
                        @if(session('warning_mesage'))
                            <div class="alert alert-warning">
                                <i class="fa fa-check" aria-hidden="true"></i>{{session('warning_mesage')}}
                            </div>
                        @endif
                        @if(session('success_mesage'))
                            <div class="alert alert-success">
                                <i class="fa fa-check" aria-hidden="true"></i>{{session('success_mesage')}}
                            </div>
                        @endif
					</div>
				</div>
				<form method="POST" action="">
					{{ csrf_field() }}
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label>Nhập tên</label>
							<input class="form-control" name="name" value="{{ old('name') }}" required />
						</div>
						<div class="form-group">
							<label>Nhập link</label>
							<input class="form-control" name="link" value="{{ old('link') }}" required />
						</div>
						<div class="form-group">
							<label>Link Hình</label>
							<input class="form-control" name="img" value="{{ old('img') }}" required />
						</div>
						<div class="form-group">
							<label>Sercurity Password</label>
							<input class="form-control" name="password" required />
						</div>
						<div class="form-group text-center">
							<button class="btn btn-success" type="submit">Add</button>
						</div>
					</div>
				</div>
				</form>
				<hr />
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-striped">
							<thead>
      							<tr>
        							<th>HASH</th>
        							<th>NAME</th>
        							<th>LINK</th>
      							</tr>
    						</thead>
    						<tbody>
    							@foreach($links as $link)
      							<tr>
							        <td><a href="{{ route('home', $link->hash) }}" target="_blank">{{ $link->hash }}</a></td>
							        <td>{{ $link->name }}</td>
							        <td>{{ $link->link }}</td>
      							</tr>
      							@endforeach
    						</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
					<div class="col-sm-12">
						<div class="div-paginate">
							{{ $links->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
			

		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>