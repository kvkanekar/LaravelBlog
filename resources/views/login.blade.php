<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login Page</title>

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
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class=" position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Admin Login Panel
                </div>
                
				<form action="{{url('login/')}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				  <div class="form-title">
					<label for="username">Username:</label>
					<input type="text" class="form-control" name= "username" id="username">
				  </div>
				  <div class="form-title">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" id="pwd">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
            </div>
        </div>
    </body>
</html>
