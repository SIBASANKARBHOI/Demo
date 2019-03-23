{{--<!doctype html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">--}}
    {{--<link rel="icon" href="/images/logo.png" type="image/x-icon">--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >--}}
    {{--<style type="text/css">--}}
        {{--body {--}}
            {{--background-image: url("/images/3402.jpg");--}}
        {{--}--}}

    {{--</style>--}}
    {{--<link rel="shortcut icon" href="/assets/images/StudentBig2.png" type="image/x-icon">--}}
    {{--<link rel="icon" href="/assets/images/StudentBig2.png" type="image/x-icon">--}}
    {{--<title>Test | Admin_Login</title>--}}

{{--</head>--}}
{{--<body>--}}
{{--<h1 style="color: black">Admin Login..!!!</h1>--}}
{{--<p>********************************************************************************</p>--}}

{{--<h2 style="color: #c7254e">{{ Session::has('errorMsg') ? Session::get("errorMsg") : '' }}</h2>--}}

{{--<span class="error"><h2 style="color:darkred">{{$errors->first('email')}}</h2></span>--}}
{{--<span class="error" style="color:darkred">{{$errors->first('password')}}</span>--}}
{{--<div>--}}
    {{--<p style="color:darkred">Required Fields *</p>--}}
    {{--<form method="post" action="/admin/login" id="1">--}}
        {{--{{csrf_field()}}--}}
        {{--Email:<input type="text" name="email" placeholder="Enter your email" value="{!! old('email') !!}" ><br><br>--}}
        {{--Password:<input type="password" name="password" placeholder="Enter your password" ><br><br>--}}
        {{--<input type="submit" value="Login" style="background-color: lightslategray">--}}
        {{--<button class="btn btn-success">Login</button>--}}
        {{--<input type="submit" value="Login" style="background-color: lightslategray">--}}
    {{--</form>--}}


    {{--<p>--}}
{{--</div>--}}

{{--<script src="/js/jquery-3.2.1.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>--}}
{{--<script type="text/javascript">--}}
    {{--$(document).ready(function () {--}}

        {{--$("#1").validate({--}}
            {{--rules:{--}}
                {{--email:{--}}
                    {{--required:true,--}}
                    {{--email:true--}}
                {{--},--}}
                {{--password:{--}}
                    {{--required:true,--}}
                    {{--minlength:5--}}
                {{--}--}}
            {{--},--}}
            {{--messages:{--}}
                {{--email:{--}}
                    {{--required:"Email address is required"--}}
                {{--},--}}
                {{--password:{--}}
                    {{--required:'Password is required',--}}
                    {{--minlength:"Minimum password length should be 5 characters.."--}}
                {{--}--}}
            {{--}--}}
        {{--});--}}

    {{--});--}}

{{--</script>--}}


{{--</body>--}}
{{--</html>--}}


<html>
<head>
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    <link rel="icon" href="/images/logo.png" type="image/x-icon">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: #2B2B2B;
        }

        *{
            font-family: 'Raleway', sans-serif;
            color : #FFF;

        }


        div h3 span{
            color : #FFF;
            font-size:14px;
        }

        div span {
            font-weight: 200;
        }

        h1{
            font-weight: 200;
        }

        .login_box{
            background: #f32d27; /* Old browsers */
            /* IE9 SVG, needs conditional override of 'filter' to 'none' */
            background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMTAwJSIgeDI9IjEwMCUiIHkyPSIwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjUlIiBzdG9wLWNvbG9yPSIjZjMyZDI3IiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iOTklIiBzdG9wLWNvbG9yPSIjZmY2YjQ1IiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==);
            background: -moz-linear-gradient(45deg,  #f32d27 5%, #ff6b45 99%); /* FF3.6+ */
            background: -webkit-gradient(linear, left bottom, right top, color-stop(5%,#f32d27), color-stop(99%,#ff6b45)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* Opera 11.10+ */
            background: -ms-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* IE10+ */
            background: linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f32d27', endColorstr='#ff6b45',GradientType=1 ); /* IE6-8 fallback on horizontal gradient */

            width:35%;
            /* height:70%; */
            position:absolute;
            top:8%;
            left:32.5%;

            -webkit-box-shadow: 0px 0px 8px 0px rgba(50, 50, 50, 0.54);
            -moz-box-shadow:    0px 0px 8px 0px rgba(50, 50, 50, 0.54);
            box-shadow:         0px 0px 8px 0px rgba(50, 50, 50, 0.54);
        }

        @media (max-width: 767px) {
            .login_box{
                background: #f32d27; /* Old browsers */
                /* IE9 SVG, needs conditional override of 'filter' to 'none' */
                background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMTAwJSIgeDI9IjEwMCUiIHkyPSIwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjUlIiBzdG9wLWNvbG9yPSIjZjMyZDI3IiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iOTklIiBzdG9wLWNvbG9yPSIjZmY2YjQ1IiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==);
                background: -moz-linear-gradient(45deg,  #f32d27 5%, #ff6b45 99%); /* FF3.6+ */
                background: -webkit-gradient(linear, left bottom, right top, color-stop(5%,#f32d27), color-stop(99%,#ff6b45)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* Opera 11.10+ */
                background: -ms-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* IE10+ */
                background: linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f32d27', endColorstr='#ff6b45',GradientType=1 ); /* IE6-8 fallback on horizontal gradient */

                width:90%;
                height:80%;
                position:absolute;
                top:10%;
                left:5%;

                -webkit-box-shadow: 0px 0px 8px 0px rgba(50, 50, 50, 0.54);
                -moz-box-shadow:    0px 0px 8px 0px rgba(50, 50, 50, 0.54);
                box-shadow:         0px 0px 8px 0px rgba(50, 50, 50, 0.54);
            }
        }

        .image-circle{
            border-radius: 50%;
            width: 175px;
            height: 175px;
            border: 4px solid #FFF;
            margin: 10px;
        }
        .login_control{
            background-color:#FFF;
            padding:10px;

        }

        .control {
            color:#000;
            margin:10px;
        }

        .label {
            color: #EB4F26;
            font-size: 18px;
            font-weight: 500;
        }

        .form-control{
            color: #000000 !important;
            font-size: 25px;
            border: none;
            padding: 25px;
            padding-left: 10px;
            border-bottom: 1px solid #CCC;
            margin-bottom: 10px;
            outline: none;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
        }

        .form-control:focus{
            border-radius: 0px;
            border-bottom: 1px solid #FC563B;
            margin-bottom: 10px;
            outline: none;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
        }
        .btn-orange{
            background-color: #FC563B;
            border-radius: 0px;
            margin: 5px;
            padding: 5px;
            width: 150px;
            font-size: 20px;
            font-weight: inherit;
        }

        .btn-orange:hover {
            background-color: #F22F26;
            border-radius: 0px;
            margin: 5px;
            padding: 5px;
            width: 150px;
            font-size: 20px;
            font-weight: inherit;
            color:#FFF !important;
        }

        .outter{
            padding: 0px;
            border: 1px solid rgba(255, 255, 255, 0.29);
            border-radius: 50%;
            width: 200px;
            height: 200px;
        }

        .error{
            color: red;
        }

    </style>
    <title>Test | Admin_Login</title>
</head>
<body>
<h2 style="color: #c7254e; text-align: center">{{ Session::has('errorMsg') ? Session::get("errorMsg") : '' }}</h2>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>

<form method="post" action="/admin/login" id="login">
    {{csrf_field()}}
<div class="container">
    <div class="row login_box">
        <div class="col-md-12 col-xs-12" align="center">
            <p><br></p>
            <div class="outter"><img src="/images/images1.jpg" class="image-circle"/></div>
            <h1> Admin Login</h1>
            <span>INDIAN</span>
        </div>
        <div class="col-md-12 col-xs-12 login_control">
            <div class="control">
                <div class="label">Email Address</div>
                <input type="text" name="email" placeholder="Enter Your Email" class="form-control" value="{{old('email')}}"/>
                <strong class="error" style="color:red">{{$errors->first('email')}}</strong>
            </div>

            <div class="control">
                <div class="label">Password</div>
                <input type="password" name="password" placeholder="Enter your password" class="form-control" />
                <strong class="error" style="color:red">{{$errors->first('password')}}</strong>
            </div>
            <div align="center">
                <input type="submit" class="btn btn-orange" value="LOGIN"/>
                {{--<button class="btn btn-orange">LOGIN</button>--}}
            </div>
        </div>
    </div>
</div>
</form>
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $("#login").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                email: {
                    required: "Email address is required",
                    email: "Please enter valid email address"
                },
                password: {
                    required: 'Password is required',
                    minlength: "Minimum password length should be 5 characters.."
                }
            }
        });

    });

</script>
</body>
</html>