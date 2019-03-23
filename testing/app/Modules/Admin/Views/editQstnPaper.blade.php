<html>
<head>
    {{--<link rel="shortcut icon" href="/assets/images/StudentBig2.png" type="image/x-icon">--}}
    {{--<link rel="icon" href="/assets/images/StudentBig2.png" type="image/x-icon">--}}
    <title>Students | EditQuestionPaper</title>
</head>
<body>
<h1 style="color: #2b542c">Edit Question Paper..!!</h1>
<p>**********************************************************************</p>


<div>
    <form method="post" action="/admin/editQuestion">

        {{csrf_field()}}

        <p>Question_No{{$result->Q_no}}:</p><p><textarea rows="5" cols="50" name="question">{{$result->question}}</textarea>
        <P>Option_A:<input type="text" name="Option_A" value="{{$result->optn_A}}"></P>
        <P>Option_B:<input type="text" name="Option_B" value="{{$result->optn_B}}"></P>
        <P>Option_C:<input type="text" name="Option_C" value="{{$result->optn_C}}"></P>
        <P>Option_D:<input type="text" name="Option_D" value="{{$result->optn_D}}"></P>
        <P>Answer:<input type="text" name="answer" value="{{$result->answer}}"></P>
        <P>Level:<select name="level">
                <option value="{{$result->diff_level}}" selected >{{$result->diff_level}}</option>
                <option value="Hard">Hard</option>
                <option value="Medium">Medium</option>
                <option value="Eassy">Eassy</option>
                <option value="VeryEassy">VeryEassy</option>
            </select>
        </P>
        {{\Illuminate\Support\Facades\Session::put('a',$result->Q_no)}}
        <p><input type="submit" value="Submit"></p>

    </form>
    <p><a href="/admin/editQuestion"><button>GoBack</button></a></p>
</div>


</body>
</html>