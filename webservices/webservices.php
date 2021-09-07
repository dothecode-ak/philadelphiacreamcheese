<?php
$myPdo = null;
header('Access-Control-Allow-Origin: *');
require_once('/home/newsfeedsmartapp/public_html/libs2/functions.php');
$obj = new Functions("india");
$uid = $_POST["user_id"];
function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
$action = $_POST['action'];
$source = $_POST['source'];
switch ($action) {
    case "create_user":
        $device = "web";
        if (isMobile()) {
            $device = "mobile";
        }
        $uid = $obj->createUser("philadelphia_count_data_21", $device, array('source' => $source));
        echo $uid;
        break;
    case "letsGo":
        buttonIncrement();
        break;
    case "back":
        buttonIncrement();
        break;
    case "next":
        buttonIncrement();
        break;
    case "back_instructions":
        buttonIncrement();
        break;
    case "discover_booklet":
        buttonIncrement();
        break;
    case "booklet_recepie":
        buttonIncrement();
        break;
    case "original_recipie":
        buttonIncrement();
        break;
    case "selectedAnsData":
        selectedAnsData();
        break;
}

function buttonIncrement()
{
    global $obj;
    $uid = NULL;
    $action = $_POST['action'];
    if (isset($_POST['user_id'])) {
        $uid = $_POST['user_id'];
    }
    $res1 = $obj->clickUpdater("philadelphia_count_data_21", $uid, $action);
    echo ($res1);
}

function selectedAnsData()
{
    global $obj;
    $uid = NULL;
    if (isset($_POST['user_id'])) {
        $uid = $_POST['user_id'];
    }
    $uid = array('uid' => $_POST['user_id']);
    $qn = $_POST['qn'];
    $trimText = str_replace("<br>", "", $_POST['ans']);
    $ans = $trimText;
    $selectedAnsData = array('selected_ans' . $qn => $ans);
    $res5 = $obj->updateData('philadelphia_count_data_21', $selectedAnsData, $uid);
    echo $res5;


    if ($qn == 2) {
        $ans1 = $_POST['ans1'];
        $ans2 = $_POST['ans'];
        $trimText2 = str_replace("<br>", "", $ans2);
        $saveData = array('uid' => $uid, 'selected_ans1' => $ans1, 'selected_ans2' => $trimText2);
        $res6 = $obj->saveData('philadelphia_listdata_21', $saveData);
    }
}
