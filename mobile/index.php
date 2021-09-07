<?php
$d = strtotime("now");
$source = "Facebook";
if (isset($_GET["source"]) && $_GET["source"] != "") {
    $source = $_GET["source"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Discover your Favourite Philadelphia Feta & Cucumber</title>
    <link rel="shortcut icon" href="https://newsfeedsmartapp.com/philadelphiacreamcheese/common_assets/Fav-Icon.png">
    <link rel="stylesheet" href="css/style.css?v=<?php echo $d ?>">
    <script src="lib/jquery-3.6.0.min.js"></script>

    <style>
        .iframe-loading {
            background: url(https://newsfeedsmartapp.com/philadelphiacreamcheese/common_assets/Loader.gif) center center no-repeat;
            width: 310px;
            height: 205px;
            text-align: center;
            margin: -24px auto;
        }

        /* #cuurent_vdo_link1, */
        #cuurent_vdo_link2,
        #cuurent_vdo_link3,
        #cuurent_vdo_link4 {
            display: none;

        }

        #cuurent_vdo_link1 {
            display: block;
        }

        video {
            outline: none;
            border: none;
            width: 100%;
            z-index: 9999;
        }



        .newStepDiv {
            display: -webkit-box;
            margin: -24px auto;
            /* width: 83%; */
            /* padding: 0px; */
            width: 87%;
        }

        .stepTextNew {
            font-family: 'stepFont';
            color: #22af8a;
            font-size: 4vw;
        }

        .stepSubText {
            font-family: 'stepFont';
            color: #095598;
            font-size: 3.5vw;
            text-align: left;
            padding-left: 2px;
            line-height: 1.1;
            padding-top: 2px;
            width: 90%;

        }
    </style>
    <script src="lib/mobile-detect.min.js"></script>
    <script>
        var md = new MobileDetect(window.navigator.userAgent);
        if (md.mobile() || md.tablet()) {

        } else {
            window.location = 'https://www.newsfeedsmartapp.com/philadelphiacreamcheese/web/index.php';
        }
    </script>
</head>

<body>
    <p style='position: absolute; left: 20000px; font-family: "quesFont";'>Hello</p>
    <p style='position: absolute; left: 20000px; font-family: "ansFont";'>dummy</p>
    <p style='position: absolute; left: 20000px; font-family: "stepFont";'>dummy</p>
    <p style='position: absolute; left: 20000px; font-family: "mediumFont";'>dummy</p>
    <div class="philadelphiaMain">
        <div id="letsGoDiv">
            <div class="discoverImg">
                <img src="assets/screen1/Discover.png" alt="" srcset="">
            </div>
            <div class="letsGoButton">
                <img src="assets/screen1/Let's-go.png" alt="" id="letsGoBtn">
            </div>
        </div>

        <div id="quizDiv">
            <!-- <p sty>sndcensincedxdxewded</p> -->
            <div class="rightLogo">
                <img src="assets/screen2/Logo.png" alt="" srcset="">
            </div>
            <div id="quizList" style="font-family: 'quesFont';">
                What are you <br> craving?
            </div>

            <div id="answerList">
                <button id="a0">Snack</button>
                <p id="or">OR</p>
                <!-- <img id="or" src="assets/screen2/OR.png" alt="" srcset=""> -->
                <button id="a1">Meal</button>
            </div>
            <div class="error">

            </div>
            <div class="progressImg">
                <img src="assets/screen2/Progress_01.png" alt="" srcset="">
            </div>
            <div class="buttonNextPre">
                <img src="assets/screen2/Back.png" alt="" srcset="" id="backClick">
                <img src="assets/screen2/Next.png" alt="" srcset="" id="nextClick">
            </div>

        </div>

        <div id="instructionDiv">
            <div id="changeHeadText">
                Philadelphia Feta & Cucumber bagel
            </div>
            <div id="vdoLink" class="iframe-loading">
                <video src="https://newsfeedsmartapp.com/philadelphiacreamcheese/videos/Veggie_bagel.mp4" id="cuurent_vdo_link1" controls playsinline></video>
                <div id="cuurent_vdo_link2">
                    <img src="https://newsfeedsmartapp.com/philadelphiacreamcheese/videos/wrapImg.png" alt="" width="100%">
                </div>
                <video src="https://newsfeedsmartapp.com/philadelphiacreamcheese/videos/Turkey_toast.mp4" id="cuurent_vdo_link3" controls playsinline></video>

                <video src="https://newsfeedsmartapp.com/philadelphiacreamcheese/videos/Egg.mp4" id="cuurent_vdo_link4" controls playsinline></video>
            </div>
            <div id="changeSubText">
                <p class="changesSubHeadText">Instructions</p>
                <!-- <div class="spanText">
                    <p class="stepText">Step 1: <span id="spanText1"> dbwuwadwndiwjdojew diwhidweidd </span></p>
                    <p class="stepText">Step 2: <span id="spanText2">judhwuqhdw judwudhnw dwdewkdn udwhwhdu</span></p>
                    <p class="stepText" id="steptext3">Step 3: <span id="spanText3"> jduhwudhwueu dwud judbwuhdu</span></p>
                </div> -->

                <!-- <div class="" style="display: inline-flex;align-items: center;height: 24px;width: 100%;">
                    <p style="width: 16%;padding-left: 5px;" class="newStepText"> Step 1:</p>
                    <p id="spanText1" class="newSpanText">dbwuwadwndiwjdojew diwhidweidd juendfenj djsbfcj fdsfuhd ufshdfuche</p>
                </div>
                <div class="" style='display: inline-flex;align-items: center;height: 56px;width:100%'>
                    <p class="newStepText"> Step 2:</p>
                    <p id="spanText2" class="newSpanText" id="mngttext2">dbwuwadwndiwjdojew diwhidweidd juendfenj djsbfcj fdsfuhd ufshdfuche</p>
                </div>
                <div class="" style="display: inline-flex;align-items: center;height: 24px;width: 100%;" id="steptext3">
                    <p class="newStepText" style="width: 16%;"> Step 3:</p>
                    <p id="spanText3" class="newSpanText">dbwuwadwndiwjdojew diwhidweidd juendfenj djsbfcj fdsfuhd ufshdfuche</p>
                </div> -->

                <!-- <div>
                    Spread Philadelphia Feta & Cucumber evenly on wrap.
                    Top with chopped veggies.
                    Roll, slice and serve.
                </div> -->
                <div style="margin-top: 18px;">

                    <div style="display: -webkit-box;" class="newStepDiv" style="margin: -17px auto;">
                        <p class="stepTextNew">Step 1:</p>
                        <p class="stepSubText" id="spanText1">Spread Philadelphia Feta & Cucumber evenly on wrap. rerjenufe</p>
                    </div>
                    <div style="display: -webkit-box;" class="newStepDiv" style="margin:-38px auto;">
                        <p class="stepTextNew">Step 2:</p>
                        <p class="stepSubText" id="spanText2">Spread Philadelphia Feta & Cucumber evenly on wrap. rerjenufe</p>
                    </div>
                    <div style="display: -webkit-box;" class="newStepDiv" style="margin:-38px auto;" id="steptext3">
                        <p class="stepTextNew">Step 3:</p>
                        <p class="stepSubText" id="spanText3">Spread Philadelphia Feta & Cucumber evenly on wrap. rerjenufe</p>
                    </div>
                </div>
            </div>

            <div class="instBackButton">
                <img src="assets/screen3/Back'.png" alt="" srcset="" id="backButtonIns">
                <img src="assets/screen3/Discover.png" alt="" srcset="" id="finalScreenButton">
            </div>
        </div>


        <div id="finalScreen">
            <div class="Booklet-recipe">
                <img src="assets/screen4/Booklet-recipe.png" alt="" srcset="">
            </div>
            <div class="greenLogo">
                <img src="assets/screen4/Feta-pack.png" alt="" srcset="" style="width: 40%;">
                <img src="assets/screen4/Feta-&-Cucumber-recipes.png" alt="" class="lastbutton" srcset="" id="fetaRecipesButton" style="width: 80%;">
            </div>
            <div class="blueLogo">
                <img src="assets/screen4/Original-pack.png" alt="" srcset="" style="width: 40%;">
                <img src="assets/screen4/Original-Recipe.png" alt="" srcset="" class="lastbutton" id="originalRecipeButton" style="width: 80%;">
            </div>

            <div>

            </div>
        </div>
    </div>
    <script>
        var source = '<?php echo $source ?>';
    </script>
    <script src="js/script.js?v=<?php echo $d ?>"></script>

</body>

</html>