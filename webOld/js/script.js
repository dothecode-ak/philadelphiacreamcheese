var _url = "https://newsfeedsmartapp.com/philadelphiacreamcheese/webservices/webservices.php";
var user_id;
$.ajax({
    url: _url,
    type: "POST",
    data: {
        "action": "create_user",
        "source": source
    },
    success: (function (data) {
        user_id = data;
        console.log(user_id);

    })
});
var quizDataList = [{
    ques: "What are you <br> craving?",
    options: ["Snack", "Meal"]

},
{
    ques: "How much time do <br> you have?",
    options: ["Not so much", "A bit more"]
}];

var instructionText = [{
    headText: "Philadelphia  Feta & Cucumber bagel",
    vdo_Link: "https://newsfeedsmartapp.com/philadelphiacreamcheese/videos/Veggie_bagel.mp4",
    subtext: ["Slice bagel in half.", "Spread Philadelphia Feta & Cucumber on bagel.", "Top with cherry tomatoes, basil and olives."]
},
{
    headText: "Philadelphia Feta & Cucumber Veggie Wrap",
    vdo_Link: "https://newsfeedsmartapp.com/philadelphiacreamcheese/videos/Veggie_wrap.mp4",
    subtext: ["Spread Philadelphia Feta & Cucumber evenly on wrap.", "Top with chopped veggies", "Roll, slice and serve."]
},
{
    headText: "Philadelphia Feta & Cucumber Turkey Toast",
    vdo_Link: "https://newsfeedsmartapp.com/philadelphiacreamcheese/videos/Turkey_toast.mp4",
    subtext: ["Spread Philadelphia Feta & Cucumber on toast.", "Top with turkey, basil and roasted tomatoes."]
},
{
    headText: "Philadelphia Feta & Cucumber with eggs",
    vdo_Link: "https://newsfeedsmartapp.com/philadelphiacreamcheese/videos/Egg.mp4",
    subtext: ["Spread Philadelphia Feta & Cucumber on Arabic bread.", "Top with fried eggs, herbs & olives."]

}
]
var checkAnserList = [];
var vdo1 = document.getElementById("cuurent_vdo_link1");
var vdo2 = document.getElementById("cuurent_vdo_link2");
var vdo3 = document.getElementById("cuurent_vdo_link3");
var vdo4 = document.getElementById("cuurent_vdo_link4");
var ques_len = quizDataList.length;
var pos = 0;
$('#letsGoBtn').click(function () {
    $.ajax({
        url: _url,
        type: "POST",
        data: {
            "user_id": user_id,
            "action": "letsGo",
        },
        success: (function (data) {
            console.log(data);

        })
    });
    $('#letsGoDiv').hide();
    $('#quizDiv').show();
});
var question = document.getElementById("quizList");
function quizList() {
    var currentQuestion = quizDataList[pos].ques;
    question.innerHTML = currentQuestion;
}


function listAnswerData() {
    for (var i = 0; i < 2; i++) {
        var choice = document.getElementsByTagName("button")[i];
        var option = quizDataList[pos].options[i];
        choice.innerHTML = option + "<input hidden id='ans_" + i + "'  type='radio' name='choice' value='" + option + "'>";
        choice.value = option;
    }

}
function updateNextData() {
    $('.error').html('');
    pos++;
    if (pos < ques_len) {
        quizList();
        listAnswerData();

    }
    else if (ques_len == pos) {
        console.log("SSSSSSSSSSSSSSSsss");
        $('#quizDiv').hide();
        $('#letsGoDiv').hide();
        $('#instructionDiv').show();
        $.ajax({
            url: _url,
            type: "POST",
            data: {
                "user_id": user_id,
                "action": "selectedAnsData",
                "ans1": checkAnserList[0],
                "ans": checkAnserList[1],
                "qn": 2
            },
            success: (function (data) {
                console.log(data);

            })

        });
        let snack = checkAnserList.includes('Snack');
        let meal = checkAnserList.includes('Meal');
        let not_two_much = checkAnserList.includes('Not so much');
        let a_bit_more = checkAnserList.includes('A bit more');
        console.log(snack + 'SSSSSSSSSSSSSSSSSSSSSSS');
        console.log(meal + 'MMMMMMMMMMMMMMMMMMMMMMMMMMMM');
        console.log(not_two_much + 'NTTTTTTTTTTTTTTTTTT');
        console.log(a_bit_more + 'ABBBBBBBBBBBBBBBBBBBBBBBbb');
        if (snack == true && not_two_much == true) {
            console.log('Baggle');
            $('#steptext3').show();
            $('#changeHeadText').html(instructionText[0].headText);
            $('#spanText1').html(instructionText[0].subtext[0]);
            $('#spanText2').html(instructionText[0].subtext[1]);
            $('#spanText3').html(instructionText[0].subtext[2]);
            setTimeout(() => {
                $('#cuurent_vdo_link1').show();
                $('#cuurent_vdo_link2').hide();
                $('#cuurent_vdo_link3').hide();
                $('#cuurent_vdo_link4').hide();
                vdo1.play();
            }, 1000)

        }
        else if (snack == true && a_bit_more == true) {
            $('#steptext3').show();
            $('#changeHeadText').html(instructionText[1].headText);
            $('#spanText1').html(instructionText[1].subtext[0]);
            $('#spanText2').html(instructionText[1].subtext[1]);
            $('#spanText3').html(instructionText[1].subtext[2]);

            console.log("Wrap");
            setTimeout(() => {
                $('#cuurent_vdo_link1').hide();
                $('#cuurent_vdo_link2').show();
                $('#cuurent_vdo_link3').hide();
                $('#cuurent_vdo_link4').hide();

                // vdo2.play();
            }, 1000);

            // $("#cuurent_vdo_link2").attr('autoplay loop')
        }
        else if (meal == true && not_two_much == true) {
            $('#changeHeadText').html(instructionText[2].headText);
            $('#spanText1').html(instructionText[2].subtext[0]);
            $('#spanText2').html(instructionText[2].subtext[1]);
            $('#steptext3').hide();

            console.log('Turkey');
            setTimeout(() => {
                $('#cuurent_vdo_link1').hide();
                $('#cuurent_vdo_link2').hide();
                $('#cuurent_vdo_link3').show();
                $('#cuurent_vdo_link4').hide();

                vdo3.play();
            }, 1000)

        }
        else if (meal == true && a_bit_more == true) {
            $('#steptext3').hide();
            $('#changeHeadText').html(instructionText[3].headText);
            $('#spanText1').html(instructionText[3].subtext[0]);
            $('#spanText2').html(instructionText[3].subtext[1]);
            $('#spanText3').html(instructionText[3].subtext[2]);

            setTimeout(() => {
                $('#cuurent_vdo_link1').hide();
                $('#cuurent_vdo_link2').hide();
                $('#cuurent_vdo_link3').hide();
                $('#cuurent_vdo_link4').show();

                vdo4.play();
            }, 1000)

            console.log("Eggs");
        }

    }
}

function updateBackData() {
    $('.error').html('');
    console.log("CCCCCCCCCC" + pos)
    if (pos > 0) {
        pos--;
        quizList();
        listAnswerData();

    }
    else if (pos == 0) {
        $('#quizDiv').hide();
        $('#letsGoDiv').show();
    }

}

$('#nextClick').click(function () {
    console.log('YYYYY' + checkAnserList);
    var radios = document.getElementsByTagName("input");

    if (!radios[0].checked && !radios[1].checked) {
        console.log('Not checked');
        $('.error').html('Please select an option.');
    }
    else if (radios[0].checked || radios[1].checked) {
        $.ajax({
            url: _url,
            type: "POST",
            data: {
                "user_id": user_id,
                "action": "next",
            },
            success: (function (data) {
                console.log(data);

            })
        });



        if (radios[0].checked == true) {
            checkAnserList.push(radios[0].value);
        }
        else if (radios[1].checked == true) {
            checkAnserList.push(radios[1].value);
        }
        $('.progressImg').attr('src', 'assets/screen2/Progress_02.png');
        $('button').css('color', '#fff');
        updateNextData();
    }
    $.ajax({
        url: _url,
        type: "POST",
        data: {
            "user_id": user_id,
            "action": "selectedAnsData",
            "ans": checkAnserList[0],
            "qn": 1
        },
        success: (function (data) {
            console.log(data);

        })

    });
    // $.ajax({
    //     url: _url,
    //     type: "POST",
    //     data: {
    //         "user_id": user_id,
    //         "action": "selectedAnsData",
    //         "ans": checkAnserList[1],
    //         "qn": 2
    //     },
    //     success: (function (data) {
    //         console.log(data);

    //     })

    // });
    console.log(checkAnserList);
});
$('#backClick').click(() => {
    // vdo1.pause();
    // vdo2.pause();
    // vdo3.pause();
    // vdo4.pause();
    $('.error').html('');
    updateBackData();
    $.ajax({
        url: _url,
        type: "POST",
        data: {
            "user_id": user_id,
            "action": "back",
        },
        success: (function (data) {
            console.log(data);

        })
    });
    $('#ans_1').prop('checked', false);
    $('#ans_0').prop('checked', false);
    $('button').css('color', '#fff');
    checkAnserList.pop();
    $('.progressImg').attr('src', 'assets/screen2/Progress_01.png')
});
$('#backButtonIns').click(() => {
    vdo1.pause();
    vdo3.pause();
    vdo4.pause();
    $.ajax({
        url: _url,
        type: "POST",
        data: {
            "user_id": user_id,
            "action": "back_instructions",
        },
        success: (function (data) {
            console.log(data);

        })
    });
    $('#ans_1').prop('checked', false);
    $('#ans_0').prop('checked', false);
    pos = 1;
    $('#quizDiv').show();
    $('#instructionDiv').hide();

    checkAnserList.pop();
})
listAnswerData();



$('#a0').click(function () {
    $('#ans_1').prop('checked', false);
    $('#ans_0').prop('checked', true);
    $('#ans_0').parent().css('color', '#dedc00');
    $('#ans_1').parent().css('color', '#fff');
    console.log(checkAnserList);
});
$('#a1').click(function () {
    $('#ans_1').prop('checked', true);
    $('#ans_0').prop('checked', false);
    $('#ans_1').parent().css('color', '#dedc00');
    $('#ans_0').parent().css('color', '#fff');
});


//final screen download event
$('#finalScreenButton').click(function () {
    vdo1.pause();
    vdo3.pause();
    vdo4.pause();
    $.ajax({
        url: _url,
        type: "POST",
        data: {
            "user_id": user_id,
            "action": "discover_booklet",
        },
        success: (function (data) {
            console.log(data);

        })
    });
    $('#quizDiv').hide();
    $('#instructionDiv').hide();
    $('#finalScreen').show();


});

$('#fetaRecipesButton').click(function () {
    $.ajax({
        url: _url,
        type: "POST",
        data: {
            "user_id": user_id,
            "action": "booklet_recepie",
        },
        success: (function (data) {
            console.log(data);

        })
    });
    window.open("https://newsfeedsmartapp.com/philadelphiacreamcheese/download/DigitalRecipeBook_FetaCucumber.php");
});
$('#originalRecipeButton').click(function () {
    $.ajax({
        url: _url,
        type: "POST",
        data: {
            "user_id": user_id,
            "action": "original_recipie",
        },
        success: (function (data) {
            console.log(data);

        })
    });
    window.open("https://newsfeedsmartapp.com/philadelphiacreamcheese/download/DigitalRecipeBook_Original.php");
});


