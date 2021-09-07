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
    <meta property="fb:app_id" content="966242223397117">
    <meta property="og:url" content="https://www.newsfeedsmartapp.com/philadelphiacreamcheese/index.php?v=1.0">
    <meta property="og:title" content="Discover your Favourite Philadelphia Feta & Cucumber">
    <meta name="author" content="Philadelphia">
    <meta property="og:description" content="Philadelphia">
    <meta property="og:image" content="https://www.newsfeedsmartapp.com/philadelphiacreamcheese/common_assets/Philadelphia-Thumbnail.png">
    <meta property="og:type" content="product">
    <script>
        var source = '<?= $source ?>';
    </script>

    <script>
        var deviceDetector = function() {

            var b = navigator.userAgent.toLowerCase(),

                a = function(a) {

                    void 0 !== a && (b = a.toLowerCase());

                    return /(ipad|tablet|(android(?!.*mobile))|(windows(?!.*phone)(.*touch))|kindle|playbook|silk|(puffin(?!.*(IP|AP|WP))))/.test(b) ? "tablet" : /(mobi|ipod|phone|blackberry|opera mini|fennec|minimo|symbian|psp|nintendo ds|archos|skyfire|puffin|blazer|bolt|gobrowser|iris|maemo|semc|teashark|uzard)/.test(b) ? "phone" : "desktop"

                };

            return {

                device: a(),

                detect: a,

                isMobile: "desktop" != a() ? !0 : !1,

                userAgent: b

            }

        }();

        if (deviceDetector.device != "desktop")

        {

            window.location = "https://www.newsfeedsmartapp.com/philadelphiacreamcheese/mobile/index.php?source=<?php echo $_GET["source"]; ?>";


        } else {

            window.location = "https://www.newsfeedsmartapp.com/philadelphiacreamcheese/web/index.php?source=<?php echo $_GET["source"]; ?>";

        }
        console.log("dcdksfkr", source)
    </script>
</head>

<body>

</body>

</html>