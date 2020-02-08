<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/" . SITE_TEMPLATE_ID . "/header.php");
?>
<!doctype html>
<html>
    <head>
<? $APPLICATION->ShowHead(); ?>
        <title><? $APPLICATION->ShowTitle() ?></title>
        <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/css/default.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/css/nivo-slider.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/css/colorbox.css">
        <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/css/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/css/jquery-ui-1.10.3.custom.min.css">
        <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/promo.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <script type="text/javascript" src="<?= SITE_TEMPLATE_PATH ?>/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="<?= SITE_TEMPLATE_PATH ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.cookie.js"></script>
        <script type="text/javascript" src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript" src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.colorbox-min.js"></script>
        <script type="text/javascript" src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".group1").colorbox({rel: 'group1'});
                $(".group2").colorbox({rel: 'group2', transition: "fade"});
                $(".group3").colorbox({rel: 'group3', transition: "none", width: "75%", height: "75%"});
                $(".group4").colorbox({rel: 'group4', slideshow: true});
                $(".ajax").colorbox();
                $(".youtube").colorbox({iframe: true, innerWidth: 640, innerHeight: 390});
                $(".vimeo").colorbox({iframe: true, innerWidth: 500, innerHeight: 409});
                $(".iframe").colorbox({iframe: true, width: "380px", height: "640px"});
                $(".inline").colorbox({inline: true, width: "50%"});
                $(".callbacks").colorbox({
                    onOpen: function () {
                        alert('onOpen: colorbox is about to open');
                    },
                    onLoad: function () {
                        alert('onLoad: colorbox has started to load the targeted content');
                    },
                    onComplete: function () {
                        alert('onComplete: colorbox has displayed the loaded content');
                    },
                    onCleanup: function () {
                        alert('onCleanup: colorbox has begun the close process');
                    },
                    onClosed: function () {
                        alert('onClosed: colorbox has completely closed');
                    }
                });
                $('.non-retina').colorbox({rel: 'group5', transition: 'none'})
                $('.retina').colorbox({rel: 'group5', transition: 'none', retinaImage: true, retinaUrl: true});
                $("#click").click(function () {
                    $('#click').css({"background-color": "#f00", "color": "#fff", "cursor": "inherit"}).text("Open this window again and this message will still be here.");
                    return false;
                });
            });
        </script>
        <!--[if lt IE 9]>
        <script type="text/javascript">
        document.createElement('header');
        document.createElement('nav');
        document.createElement('section');
        document.createElement('article');
        document.createElement('aside');
        document.createElement('footer');
        </script> 
        <script type="text/javascript" src="<?= SITE_TEMPLATE_PATH ?>/js/selectivizr-min.js"></script>
        <![endif]-->
    </head>
    <body>
        <? //$APPLICATION->IncludeFile(SITE_DIR . "include/promo.php", Array(), Array("MODE" => "html"));?>
<? $APPLICATION->ShowPanel(); ?>
        <header class="header group">
            <div class="left">
                <div class="logo">

                    <?
                    $APPLICATION->IncludeFile(
                            SITE_DIR . "include/logo.php", Array(), Array("MODE" => "html")
                    );
                    ?>
                    <span><?
                        $APPLICATION->IncludeFile(
                                SITE_DIR . "include/slogan.php", Array(), Array("MODE" => "html")
                        );
                        ?></span>
                </div>
            </div>
            <div class="center">
                <nav class="horizontal-menu group">
                    <?
                    $APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel", array(
                        "ROOT_MENU_TYPE" => "top",
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "left",
                        "USE_EXT" => "N",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "36000000",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => ""
                            ), false, array(
                        "ACTIVE_COMPONENT" => "Y"
                            )
                    );
                    ?>
                </nav>
                <div class="header-form">

                    <?
                    $APPLICATION->IncludeComponent("bitrix:search.title", "eshop", array(
                        "NUM_CATEGORIES" => "1",
                        "TOP_COUNT" => "5",
                        "CHECK_DATES" => "N",
                        "SHOW_OTHERS" => "N",
                        "PAGE" => SITE_DIR . "catalog/",
                        "CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),
                        "CATEGORY_0" => array(
                            0 => "iblock_catalog",
                        ),
                        "CATEGORY_0_iblock_catalog" => array(
                            0 => "all",
                        ),
                        "CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
                        "SHOW_INPUT" => "Y",
                        "INPUT_ID" => "title-search-input",
                        "CONTAINER_ID" => "search",
                        "PRICE_CODE" => array(
                            0 => "BASE",
                        ),
                        "SHOW_PREVIEW" => "Y",
                        "PREVIEW_WIDTH" => "75",
                        "PREVIEW_HEIGHT" => "75",
                        "CONVERT_CURRENCY" => "Y"
                            ), false
                    );
                    ?>



                </div>
            </div>
            <div class="right">


                <?
                $APPLICATION->IncludeComponent("bitrix:system.auth.form", "", array(
                    "REGISTER_URL" => SITE_DIR . "login/",
                    "PROFILE_URL" => SITE_DIR . "personal/",
                    "SHOW_ERRORS" => "N"
                        ), false, Array()
                );
                ?>

                <div class="cart">
                    <?
                    $APPLICATION->IncludeComponent(
                            "bitrix:sale.basket.basket.line", "", Array(
                        "PATH_TO_BASKET" => SITE_DIR . "personal/cart/",
                        "PATH_TO_PERSONAL" => SITE_DIR . "personal/",
                        "SHOW_PERSONAL_LINK" => "N"
                            ), false
                    );
                    ?> 
                </div>
            </div>
        </header>
        <section class="section group">
            <div class="left">
                <div id="tabs1">
                    <ul>
                        <li><a href="#tabs-1"><img src="<?= SITE_TEMPLATE_PATH ?>/images/clock.png" width="16" height="16"  alt=""/></a></li>
                        <li><a href="#tabs-2"><img src="<?= SITE_TEMPLATE_PATH ?>/images/phone.png" width="24" height="16"  alt=""/></a></li>
                        <li><a href="#tabs-3"><img src="<?= SITE_TEMPLATE_PATH ?>/images/twitter.png" width="16" height="16"  alt=""/></a></li>
                    </ul>
                    <div id="tabs-1" class="tabs-1">
                        <?
                        $APPLICATION->IncludeFile(
                                SITE_DIR . "include/tabs-1.php", Array(), Array("MODE" => "html")
                        );
                        ?>
                    </div>
                    <div id="tabs-2" class="tabs-2">
                        <?
                        $APPLICATION->IncludeFile(
                                SITE_DIR . "include/tabs-2.php", Array(), Array("MODE" => "html")
                        );
                        ?>
                    </div>
                    <div id="tabs-3" class="tabs-3">

                        <?
                        $APPLICATION->IncludeFile(
                                SITE_DIR . "include/tabs-3.php", Array(), Array("MODE" => "html")
                        );
                        ?>

                    </div>
                </div>



                <nav class="left-menu">


                    <?
                    $APPLICATION->IncludeComponent("bitrix:menu", "vertical_multilevel", array(
                        "ROOT_MENU_TYPE" => "left",
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "left",
                        "USE_EXT" => "Y",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "36000000",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => ""
                            ), false, array(
                        "ACTIVE_COMPONENT" => "Y"
                            )
                    );
                    ?>


                </nav>

            </div>


<? if ($APPLICATION->GetCurPage(false) == SITE_DIR): ?> 
                <div class="center">
                    <div class="wrapper">

                        <h1 style="position: absolute; left: -9999px;">

                            <?
                            $APPLICATION->IncludeFile(
                                    SITE_DIR . "include/slogan.php", Array(), Array("MODE" => "html")
                            );
                            ?>

                        </h1>  


                        <?
                        $APPLICATION->IncludeComponent(
                                "bitrix:main.include", "", Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR . "include/sliders.php",
                            "AREA_FILE_RECURSIVE" => "N",
                            "EDIT_MODE" => "html",
                                ), false, Array('HIDE_ICONS' => 'Y')
                        );
                        ?>


                    <? else: ?>

                        <div class="center-inner">
                            <div class="wrapper-inner">

                                <div class="breadcrumbs">
                                    <?
                                    $APPLICATION->IncludeComponent(
                                            "bitrix:breadcrumb", "", Array(
                                        "START_FROM" => "0",
                                        "PATH" => "",
                                        "SITE_ID" => "-"
                                            ), false
                                    );
                                    ?>
                                </div>
                                <h1><? $APPLICATION->ShowTitle(false); ?></h1>
                            <? endif ?>
    






