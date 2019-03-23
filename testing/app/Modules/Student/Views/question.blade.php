<html>
<head>
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    <link rel="icon" href="/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .que1 {
            display: block !important;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            position: relative;
            background: none;
        }

        html {
            background: url("/images/3402.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .home {
            height: 100%;
            margin-bottom: 25px;
            margin-top: 7%;

        }
    </style>
    <title>Students | Test page</title>

</head>
<body id="hhh">

<div style="width:100%; text-align: center; background: #000000; padding-top: 1%; padding-bottom: 1%;position: fixed;top:0;z-index: 999;">
    <p style="color: white"><strong>TIME:-</strong>&emsp;<span id="demo"></span>&nbsp;seconds left.</p>
</div>
<div class="home col-lg-10 col-lg-offset-1">

    <?php $p = 1; ?>

    @foreach($user as $value)
        <div class="que{{$p}}" style="display: none;">

            <p><strong>LEVEL:-</strong>{{$value['diff_level']}}</p>
            <p class="question">Q-{{$p}}. {{$value['question']}}?</p>

            <div class="option" style="margin-bottom: 0;">
                <input type="radio" id="q1{{$p}}" class="q{{$p}}" name="q{{$p}}" value="{{$value['optn_A']}}"
                       onclick="getVal('{{$value['optn_A']}}','{{$value['answer']}}','{{$p}}')"><label for="q1{{$p}}">&emsp;A-&emsp;{{$value['optn_A']}}</label><br/>
                <input type="radio" id="q2{{$p}}" class="q{{$p}}" name="q{{$p}}" value="{{$value['optn_B']}}"
                       onclick="getVal('{{$value['optn_B']}}','{{$value['answer']}}','{{$p}}')"><label for="q2{{$p}}">&emsp;B-&emsp;{{$value['optn_B']}}</label><br/>
                <input type="radio" id="q3{{$p}}" class="q{{$p}}" name="q{{$p}}" value="{{$value['optn_C']}}"
                       onclick="getVal('{{$value['optn_C']}}','{{$value['answer']}}','{{$p}}')"><label for="q3{{$p}}">&emsp;C-&emsp;{{$value['optn_C']}}</label><br/>
                <input type="radio" id="q4{{$p}}" class="q{{$p}}" name="q{{$p}}" value="{{$value['optn_D']}}"
                       onclick="getVal('{{$value['optn_D']}}','{{$value['answer']}}','{{$p}}')"><label for="q4{{$p}}">&emsp;D-&emsp;{{$value['optn_D']}}</label><br/>
            </div>
            <br>
            <p id="cpanel{{$p}}"
               style="display: none; padding: 15px;text-align: center;background-color: lightgreen;border: solid 1px black;width: 20%;">
                Correct Answer..!!</p>
            <p id="wpanel{{$p}}"
               style="display: none; padding: 15px;text-align: center;background-color: lightsalmon;border: solid 1px black;width: 20%;">
                Wrong Answer..!!</p>
            <input id="ans{{$p}}" value="{{$value['answer']}}" hidden>
            <div id="answer{{$p}}" style="display: none;"><p><span>Correct Answer : {{$value['answer']}}</span></p>
            </div>
            <button class="btn btn-success" id="showbtn{{$p}}" onclick="showAnswer('answer{{$p}}','q{{$p}}')">Show
                Answer
            </button>&emsp;&emsp;&emsp;
            <button class="btn btn-success" id="nextbtn{{$p}}"
                    onclick="nextFun('que{{$p+1}}','{{$p}}','q{{$p}}','answer{{$p}}','q{{$p+1}}','ans{{$p+1}}','ans{{$p}}')">
                Next
            </button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <button style="background-color: lightcoral" class="btn btn-success" id="submit{{$p}}"
                    onclick="nextFun(null,null,'q{{$p}}',null,null,null,'ans{{$p}}')">Submit Exam
            </button>
            <br><br><br><br>

        </div>
        <?php $p++ ?>

    @endforeach
</div>


<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>--}}
<script type="text/javascript">


    //********To show respectrive Answer*************

    function showAnswer(id, nextDisable) {
        $("#" + id).css('display', 'block');
        $('input.' + nextDisable).attr("disabled", true);
    }

    var correct = 0;
    var wrong = 0;
    var count = 0;
    var flux = true;

    //********************Get clicked radio selected value function**********************

    function getVal(choice, answer, id) {
        if (choice == answer) {
            // correct+=1;
            $("#cpanel" + id).slideDown(400);
            setTimeout(function () {
                $("#cpanel" + id).css('display', 'none');
            }, 2000);

        } else {
            // wrong+=1;
            $("#wpanel" + id).slideDown(400);
            setTimeout(function () {
                $("#wpanel" + id).css('display', 'none');
            }, 2000);
        }
    }


    //*****************Time out function For first Question ***************

    var time1 = 10;
    var check1 = setInterval(function () {
        myTimer1()
    }, 1000);

    function myTimer1() {
        var t1 = time1--;
        if (t1 >= 0) {
            if (t1 < 10) {
                t1 = "0" + t1;
                document.getElementById("demo").innerHTML = t1;
            } else {
                document.getElementById("demo").innerHTML = t1;
            }

        } else {
            clearInterval(check1);
            $("#answer1").css('display', 'block');
            $('input.q1').attr("disabled", true);
            var selectedVal = "";
            var selected = $('input[name=q1]:checked');
            if (selected.length > 0) {
                flux = false;
                selectedVal = selected.val();
                var ans = $('#ans1').val();
                if (ans == selectedVal) {
                    correct += 1;
                } else {
                    wrong += 1;
                }
            }
        }
    }


    var intrvl = {};


    //*******************To show next quesion and its related functionalities***********

    function nextFun(id, ids, q, dispQstn, nextDisable, increaseCount, previousAns) {

        $('#hhh').animate({
            scrollTop: $('#hhh').get(0).scrollHeight
        }, 10);

        $('input.' + q).attr("disabled", true);
        $("#" + dispQstn).css('display', 'block');
        count += 1;
        clearInterval(check1);

        // for showing correct and wrong count after click on next button,24-02-18

        if (flux == true) {
            var selectedVal2 = "";
            var selected2 = $('input[name="' + q + '"]:checked');
            if (selected2.length > 0) {
                selectedVal2 = selected2.val();
                var ans2 = $('#' + previousAns).val();
                if (ans2 == selectedVal2) {
                    correct += 1;
                } else {
                    wrong += 1;

                }
            }
        }
        flux = true;

        // end

        var time = 10;
        intrvl['check' + ids] = setInterval(function () {
            myTimer()
        }, 1000);
        var i = ids - 1;
        clearInterval(intrvl['check' + i]);
        $("." + id).css('display', 'block');
        $("#showbtn" + ids).css('display', 'none');
        $("#nextbtn" + ids).css('display', 'none');
        $("#submit" + ids).css('display', 'none');

        function myTimer() {
            var t = time--;
            if (t >= 0) {
                if (t < 10) {
                    t = "0" + t;
                    document.getElementById("demo").innerHTML = t;
                } else {
                    document.getElementById("demo").innerHTML = t;
                }
            } else {
                clearInterval(intrvl['check' + ids]);
                var b = parseInt(ids) + 1;
                $("#answer" + b).css('display', 'block');
                $('input.' + nextDisable).attr("disabled", true);

                var selectedVal1 = "";
                var selected1 = $('input[name="' + nextDisable + '"]:checked');
                if (selected1.length > 0) {
                    flux = false;
                    selectedVal1 = selected1.val();
                    var ans1 = $('#' + increaseCount).val();
                    if (ans1 == selectedVal1) {
                        correct += 1;
                    } else {
                        wrong += 1;

                    }
                }

            }
        }

        if (count == 9) {
            document.getElementById("nextbtn10").innerHTML = "Submit";
            $("#nextbtn10").css('display', 'none');
        }
        if (!ids) {
            var retVal = confirm("Do you want to continue..!! \n\nYour  EXAM  will be Finally\n\n SUBMITTED..!!");
            if (retVal == true) {
                count = 10;
            }
        }


        if (count == 10) {
            clearInterval(intrvl['check' + i]);
            var temp = 10 - (parseInt(correct) + parseInt(wrong));
            var per = (correct / 10) * 100;

//*******************Showing message using Sweet Alert..!!*****************

            swal({
                    title: "Result\n********************",
                    text: 'correct Answer:' + correct + '\n\nWrong Answer:' + wrong + '\n\nNot attempt:' + temp + '\n\nPercentage Scored:' + per + '%',
                    confirmButtonColor: "#DD6B55",
                    showConfirmButton: true
                },
                function (isConfirm) {
                    if (isConfirm) {
                        createCookie('Result', per, '1');
                        readCookie('Result');
                        swal("Successful Submitted!", "Successfully Complited Exam", "success");
                        window.location.href = "http://localhost.test.com/student/home";
                    }
                });
        }

    }


    function createCookie(name, value, days) {
        var expires;

        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "";
        }
        document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
    }

    function readCookie(name) {
        var nameEQ = encodeURIComponent(name) + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ')
                c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0)
                return decodeURIComponent(c.substring(nameEQ.length, c.length));
        }
        return null;
    }

    // function eraseCookie(name) {
    //     createCookie(name, "", -1);
    // }


</script>
</body>
</html>