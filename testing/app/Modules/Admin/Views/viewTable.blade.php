<html>
<head>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    {{--<link href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">--}}
    <style>

        .pagination > li {
            display: inline;
        }
        .pagination li a{
            padding: 1%;
            background: lightgray;
        }
        .pagination li.active span{
            padding: 1%;
            background: lightgreen;
        }
    </style>
</head>

<body>
{{csrf_field()}}
<h1 style="color: #685d20"><b>View All Questions</b><br>******************************************</h1>
<p> <a href="/admin/home"><button>GoBack</button></a>
    <a href="/admin/addQuestion"><button class="btn btn-success">AddQuestion</button></a>
</p>
<hr/>
<h2 style="color: Green">{{ Session::has('errorMsg') ? Session::get("errorMsg") : '' }}</h2>
{{--<table  border = "1" cellpadding = "5" cellspacing = "5">--}}
<table  border = "1" cellpadding = "5" cellspacing = "5">
    <thead>
    <tr>
        <th>SI.no</th>
        <th>Question</th>
        <th>Option_A</th>
        <th>Option_B</th>
        <th>Option_C</th>
        <th>Option_D</th>
        <th>Answer</th>
        <th>Level</th>
    </tr>
    </thead>
    @foreach($userData as $key => $value)
        <tr>
            <td>{{$value->Q_no}}</td>
            <td>{{$value->question}}</td>
            <td>{{$value->optn_A}}</td>
            <td>{{$value->optn_B}}</td>
            <td>{{$value->optn_C}}</td>
            <td>{{$value->optn_D}}</td>
            <td>{{$value->answer}}</td>
            <td>{{$value->diff_level}}</td>

    @endforeach
{{--    {{$userData->links()}}--}}
</table>
{{$userData->links()}}
</body>
</html>