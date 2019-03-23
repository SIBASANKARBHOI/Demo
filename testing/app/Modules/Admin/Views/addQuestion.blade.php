<html>
<head>
    <title>Students | EditQuestionPaper</title>
</head>
<body>
<h1 style="color: #2b542c">Add Question Paper..!!</h1>
<p>**********************************************************************</p>


<h2>{{ Session::has('msg') ? Session::get("msg") : '' }}</h2>

<div>
    <form method="post" action="/admin/addQuestion">

        {{csrf_field()}}

        <p>Type your Question:<br><p><textarea rows="5" cols="50" name="question" >{{old('question')}}</textarea>

        <P>Option_A:<input type="text" name="Option_A" value="{{old('Option_A')}}" >

        <P>Option_B:<input type="text" name="Option_B" value="{{old('Option_B')}}" >

        <P>Option_C:<input type="text" name="Option_C" value="{{old('Option_C')}}" >

        <P>Option_D:<input type="text" name="Option_D" value="{{old('Option_D')}}" >

        <P>Answer:<input type="text" name="answer" value="{{old('answer')}}">

        <P>Level:<select name="level">
                <option value="{{old('level')}}" selected >{{old('level')}}</option>
                <option value="Hard">Hard</option>
                <option value="Medium">Medium</option>
                <option value="Eassy">Eassy</option>
                <option value="VeryEassy">VeryEassy</option>
            </select>
        </P>
        <p><input type="submit" value="Submit"></p>

    </form>
    <p><a href="/admin/editQuestion"><button>GoBack</button></a></p>
</div>


</body>
</html>