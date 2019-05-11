<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Add Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
				font-weight: bold;
            }
			
			.form-title {
				font-size: 15px;
				font-weight: bold;
				padding: 10px 0 10px 0;
			}

            .links > a {
                color: #636b6f;
                padding: 0 5%;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			
			.para1 {
				font-size: 15px;
				margin-left: 5%;
				margin-right: 5%;
				position: inherit;
				color: black;
			}
			
			.content .table-1 {
				display: table;
				border-collapse: separate;
				border-spacing: 2px;
				border-color: grey;
			}
        </style>
    </head>
    <body>
        <div class=" position-ref full-height">
		<div class="links">
				<a href="/adminlist/{{ $userid }}">Home</a>
			</div>
			
            <div class="content">
			
			<div class="title m-b-md">
			   Add Blog Post
			</div>
				
			<form action="/newpost/<?php echo $userid;?>" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="user_id" value="{{ $userid }}">
				
				  <div class="form-title">
					<label for="title">title:</label>
					<input type="text" class="form-control" name="title" id="title" >
				  </div>
				  <div class="form-title">
					<label for="post">Post:</label>
					<input type="text" class="form-control" name="post" id="post">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
				
            </div>
        </div>
    </body>
</html>
