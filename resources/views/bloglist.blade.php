<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Listing Page</title>

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
            <div class="content">
                <div class="title m-b-md">
                   Blog List
                </div>
                
				<table width="80%" align="center" border="1px grey solid">
				  <thead>
					<tr>
					  <th width="5%">#</th>
					  <th width="20%">Title</th>
					  <th width="40%">Author</th>
					  <th width="10%">Created On</th>
					</tr>
				  </thead>
				  <tbody>
				  @foreach($blog_list as $key => $blog)
					<tr>
					  <th>{{ ++$key }}</th>
					  <td><a href="/view/{{ $blog->id}}">{{ $blog->title }}</a></td>
					  <td>{{str_limit( $blog->post, 20)}}</td>
					  <td>{{ $blog->created_on }}</td>
					</tr>
					@endforeach
				  </tbody>
				</table>
            </div>
        </div>
    </body>
</html>
