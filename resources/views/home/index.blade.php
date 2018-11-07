<html>
	<head>
		<title>XShare Check Location</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="XShare - Cộng đồng chia sẻ tài nguyên miễn phí">
		<!-- Google / Search Engine Tags -->
		<meta itemprop="name" content="XShare Community">
		<meta itemprop="description" content="XShare - Cộng đồng chia sẻ tài nguyên miễn phí">
		<meta itemprop="image" content="https://tinyurl.com/y7lybw5e">

		<!-- Facebook Meta Tags -->
		<meta property="og:url" content="https://xshare-check.ga">
		<meta property="og:type" content="website">
		<meta property="og:title" content="XShare Community">
		<meta property="og:description" content="XShare - Cộng đồng chia sẻ tài nguyên miễn phí">
		<meta property="og:image" content="https://tinyurl.com/y7lybw5e">
		 
		<!-- Twitter Meta Tags -->
		<meta name="twitter:card" content="https://tinyurl.com/y7lybw5">
		<meta name="twitter:title" content="XShare Community">
		<meta name="twitter:description" content="XShare - Cộng đồng chia sẻ tài nguyên miễn phí">
		<meta name="twitter:image" content="https://tinyurl.com/y7lybw5e">

        <link rel="icon" type="image/png" href="https://tinyurl.com/y7lybw5e"/>
		<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700&amp;subset=vietnamese" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	</head>
	<body>
		<div class"wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center logo">
						<a href="https://www.facebook.com/groups/kgroupdocument/" target="_blank"><img src="https://tinyurl.com/y7lybw5e" width="10%" /></a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center title">
						{{ $link->name }}
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center imgpopst">
						<img src="{{ $link->img }}" width="60%" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center redirect">
						Bạn sẽ được chuyển đến bài viết chi tiết trong 5s nữa....
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="col-sm-12 text-center">
				XShare Community &copy 2018 - 2020 Reversed
			</div>
		</div>

		<!-- Scripts -->
		<script>
	        var timer = setTimeout(function() {
	            window.location='{{ $link->link }}'
	        }, 5000);
    	</script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>