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
    <link rel="shortcut icon" href="https://newsfeedsmartapp.com/philadelphiacreamcheese/common_assets/Fav-Icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css?v=834yurh34rf8h384">
    <script src="lib/jquery-3.6.0.min.js"></script>
    <style>
        .iframe-loading {
            background: url(https://newsfeedsmartapp.com/philadelphiacreamcheese/common_assets/Loader.gif) center center no-repeat;
            /* width: 45%; */
            height: 32%;
            text-align: center;
            margin: 0 auto;
        }

        #cuurent_vdo_link1,
        #cuurent_vdo_link2,
        #cuurent_vdo_link3,
        #cuurent_vdo_link4 {
            display: none;

        }

        video {
            outline: none;
            border: none;
            width: 45%;
        }
    </style>

    <script src="lib/mobile-detect.min.js"></script>
    <script>
        var md = new MobileDetect(window.navigator.userAgent);
        if (md.mobile() || md.tablet()) {
            window.location = 'https://www.newsfeedsmartapp.com/philadelphiacreamcheese/mobile/index.php';
        } else {

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
            <div class="rightCenter">
                <div class="discoverImg">
                    <img src="assets/screen1/Discover.png" alt="" srcset="">
                </div>
                <div class="letsGoButton">
                    <img src="assets/screen1/Let's-go.png" alt="" id="letsGoBtn">
                </div>
            </div>
        </div>

        <div id="quizDiv">
            <div class="rightLogo">
                <img src="assets/screen2/Logo.png" alt="" srcset="">
            </div>
            <div id="quizList">
                What are you <br> craving?
            </div>
            <div id="answerList">
                <button id="a0">Snack</button>
                <img id="or" src="assets/screen2/OR.png" alt="" srcset="">
                <button id="a1">Meal</button>

            </div>
            <div class="error">

            </div>
            <div class="buttonNextPre">
                <img src="assets/screen2/Back.png" alt="" srcset="" id="backClick">
                <img class="progressImg" id="progressImgId" src="assets/screen2/Progress_01.png" alt="" srcset="">
                <img src="assets/screen2/Next.png" alt="" srcset="" id="nextClick">
            </div>

        </div>

        <div id="instructionDiv">
            <div class="webDiv">
                <div id="changeHeadText">

                </div>
                <div id="vdoLink" class="iframe-loading">
                    <video id="cuurent_vdo_link1" controls>
                        <source src="https://newsfeedsmartapp.com/philadelphiacreamcheese/videos/Veggie_bagel.mp4" type="video/mp4">
                    </video>
                    <!-- <video id="cuurent_vdo_link2" controls>
                        <source src="https://newsfeedsmartapp.com/Philadelphia/videos/Veggie_wrap.mp4" type="video/mp4">
                    </video> -->
                    <div id="cuurent_vdo_link2">
                        <img src="https://newsfeedsmartapp.com/philadelphiacreamcheese/videos/wrapImg.png" alt="" width="46%">
                    </div>
                    <video id="cuurent_vdo_link3" controls>
                        <source src="https://newsfeedsmartapp.com/philadelphiacreamcheese/videos/Turkey_toast.mp4" type="video/mp4">
                    </video>
                    <video id="cuurent_vdo_link4" controls>
                        <source src="https://newsfeedsmartapp.com/philadelphiacreamcheese/videos/Egg.mp4" type="video/mp4">
                    </video>
                </div>
                <div id="changeSubText">
                    <p class="changesSubHeadText">Instructions</p>
                    <div class="spanText">
                        <p class="stepText">Step 1: <span id="spanText1">dummy </span></p>
                        <p class="stepText">Step 2: <span id="spanText2">dummy</span></p>
                        <p class="stepText" id="steptext3">Step 3: <span id="spanText3"> dummy</span></p>
                    </div>
                </div>

                <div class="instBackButton">
                    <img src="assets/screen3/Back'.png" alt="" srcset="" id="backButtonIns">
                    <img src="assets/screen3/Discover.png" alt="" srcset="" id="finalScreenButton">
                </div>
            </div>
        </div>


        <div id="finalScreen">
            <div class="Booklet-recipe">
                <img src="assets/screen4/Booklet-recipe.png" alt="" srcset="">
            </div>
            <!-- <div class="greenLogo">

                <img src="assets/screen4/Feta-pack.png" alt="" srcset="">
                <img src="assets/screen4/Feta-&-Cucumber-recipes.png" alt="" class="lastbutton" srcset=""
                    id="fetaRecipesButton">
            </div> -->
            <!-- <div class="row">
                <div class="column">
                    <img src="assets/screen4/Feta-pack.png" alt="" srcset="" style="width:50%">
                </div>
                <div class="column">
                    <img src="assets/screen4/Feta-&-Cucumber-recipes.png" alt="" class="lastbutton" srcset=""
                        style="width:50%" id="fetaRecipesButton">
                </div>
            </div> -->

            <div class="finalLogoDiv">
                <div class="logogreenFinal">
                    <img src="assets/screen4/Feta-pack.png" alt="" srcset="" style="width:70%">
                </div>

                <div class="logogreenFinal logogreenFinal2">
                    <img src="assets/screen4/Feta-&-Cucumber-recipes.png" id="fetaRecipesButton" alt="" class="lastbutton" srcset="" style="width: 90%;">
                </div>
            </div>

            <div class="finalLogoDiv blueLogo">
                <div class="logogreenFinal">
                    <img src="assets/screen4/Original-pack.png" alt="" srcset="" style="width:70%">
                </div>

                <div class="logogreenFinal logogreenFinal2">
                    <img src="assets/screen4/Original-Recipe.png" id="originalRecipeButton" alt="" class="lastbutton" srcset="" style="width: 90%;">
                </div>
            </div>
        </div>
    </div>
    <script>
        var source = '<?php echo $source ?>';
    </script>
    <script src="js/script.js?v=<?php echo $d ?>"></script>

</body>

</html>