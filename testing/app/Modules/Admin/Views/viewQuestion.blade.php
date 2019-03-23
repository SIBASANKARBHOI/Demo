<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <title>Admin| View_Questions</title>
    <style>
        .dropbtn {
            background-color: mediumpurple;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropbtn:hover, .dropbtn:focus {
            background-color: lightpink;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: greenyellow;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {background-color: #ddd}

        .show {display:block;}
    </style>

    {{--<link href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet">--}}

    <meta name="csrf-token" content="{{ csrf_token()}}">
</head>
<body>
<h1 style="color: #685d20"><b>View All Questions</b><br>******************************************</h1>
<p> <a href="/admin/home"><button class="btn btn-success" style="background-color: lightcoral">GoBack</button></a>
    <a href="/admin/addQuestion"><button class="btn btn-success">AddQuestion</button></a>
</p>
<hr/>
<h2 style="color: Green">{{ Session::has('errorMsg') ? Session::get("errorMsg") : '' }}</h2>
<table id="question" border = "1" cellpadding = "5" cellspacing = "5" style="background-color: #d0e9c6">
    <thead>
    <tr>
        <th>SI.no</th>
        {{--<th width="5%">SI.no</th>--}}
        <th>Question</th>
        <th>Option_A</th>
        <th>Option_B</th>
        <th>Option_C</th>
        <th>Option_D</th>
        <th>Answer</th>
        <th>Level</th>
        <th>Action</th>
    </tr>
    </thead>
</table>
{{--<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $(function(){
        $('#question').DataTable({

            processing: true,
            serverSide: true,
            // ajax: '/admin/viewQuestionAjaxHandler',
            ajax:{
                "url": "/admin/viewQuestionAjaxHandler",
                "type": "GET",
                "dataType": "json"
            },
            columns: [
                {data: 'Q_no', name: 'Q_no'},
                {data: 'question', name: 'question'},
                {data: 'optn_A', name: 'optn_A'},
                {data: 'optn_B', name: 'optn_B'},
                {data: 'optn_C', name: 'optn_C'},
                {data: 'optn_D', name: 'optn_D'},
                {data: 'answer', name: 'answer'},
                {data: 'diff_level', name: 'diff_level'},
                {data: 'Action', name: 'Action'}
            ]
        });
    });




    function getConfirmation(id){
        var retVal = confirm("Do you want to continue..!!! \n\nIt will be permanently deleted from Database..?");
        if( retVal == true ){
            dltCmp(id);
        }
    }

    function dltCmp(id) {
        $.ajax({
            url: "/admin/deleteQuestion",
            type: "post",
            data: {
                question_No: id
            },
            dataType: "json",
            success: function (response) {
                if (response.code == 200) {
                    // alert(response.msg);
                    // location.reload();
                    $('#btn'+id).parent().parent().parent().parent().remove();
                } else {
                    alert(response.msg);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error in deletion');
                console.log(textStatus, errorThrown);
            }
        });
    }

</script>


<script>
    function myFunction(id) {
        document.getElementById('myDropdown' + id).classList.toggle("show");
    }
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>


</body>
</html>
