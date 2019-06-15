<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="catalog-element">
    <div class="yashare-auto-init" data-yashareL10n="ru"
         data-yashareType="button" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir"

         ></div>
    <div class="group">
        <div class="left-block">
            <div class="picture-block">
                <div class="picture-big">
                    <?$resizebig = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array("width"=>520, "height"=>400), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                    <a class="group1" href="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>">
                        
                        <img src="<?echo $resizebig['src']?>" width="<?echo $resize['width']?>" height="<?echo $resize['height']?>" alt="<?= $arResult["NAME"] ?>" />
                    </a>
                </div>




    <? if(count($arResult["MORE_PHOTO"])>0):?>
    <ul class="more-photo group">

      <?foreach($arResult["MORE_PHOTO"] as $PHOTO):?>
      <?$resize = CFile::ResizeImageGet($PHOTO, array("width"=>200, "height"=>200), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
        <li><a class="group1" href="<?= $PHOTO["SRC"] ?>"><img src="<?echo $resize['src']?>" width="<?echo $resize['width']?>" height="<?echo $resize['height']?>" alt="<?= $arResult["NAME"] ?>" /></a></li>
        <?endforeach?>
    </ul>
    <?endif?>
            </div>
        </div>
        <div class="right-block">
            <h3><?=GetMessage("CATALOG_CHAR")?></h3>
            <ul class="char group">
              <?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
               <li><?= $arProperty["NAME"] ?>: <strong><? echo $arProperty["DISPLAY_VALUE"];?></strong></li>
              
                <?endforeach?>


            </ul>
            <ul class="price-block group">
                <li><strong><?=GetMessage("CATALOG_PRICE")?></strong></li>
                <? if ($arResult["DISPLAY_PROPERTIES"]["OLD_PRICE"]){?><li class="old"><?=$arResult["DISPLAY_PROPERTIES"]["OLD_PRICE"]["VALUE"];?> <? if ($arResult["DISPLAY_PROPERTIES"]["ED_IZM"]){?>/<?=$arResult["DISPLAY_PROPERTIES"]["ED_IZM"]["VALUE"];?><?}?></li><?}?> 
                <li class="new">


                    <?foreach($arResult["PRICES"] as $code=>$arPrice):?>
                    <?if($arPrice["CAN_ACCESS"]):?>

                    <?if($arParams["PRICE_VAT_SHOW_VALUE"] && ($arPrice["VATRATE_VALUE"] > 0)):?>
                    <?if($arParams["PRICE_VAT_INCLUDE"]):?>
                    (<?echo GetMessage("CATALOG_PRICE_VAT")?>)
                    <?else:?>
                    (<?echo GetMessage("CATALOG_PRICE_NOVAT")?>)
                    <?endif?>
                    <?endif;?>
                    <?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
                    <?= $arPrice["PRINT_VALUE"] ?><?= $arPrice["PRINT_DISCOUNT_VALUE"] ?>
                    <?if($arParams["PRICE_VAT_SHOW_VALUE"]):?>
                    <?= GetMessage("CATALOG_VAT") ?><?= $arPrice["DISCOUNT_VATRATE_VALUE"] > 0 ? $arPrice["PRINT_DISCOUNT_VATRATE_VALUE"] : GetMessage("CATALOG_NO_VAT") ?>
                    <?endif;?>
                    <?else:?>
                    <?= $arPrice["PRINT_VALUE"] ?>
                    <?if($arParams["PRICE_VAT_SHOW_VALUE"]):?>
                    <?= GetMessage("CATALOG_VAT") ?><?= $arPrice["VATRATE_VALUE"] > 0 ? $arPrice["PRINT_VATRATE_VALUE"] : GetMessage("CATALOG_NO_VAT") ?>
                    <?endif;?>
                    <?endif?>

                    <?endif;?>
                    <?endforeach;?><? if ($arResult["DISPLAY_PROPERTIES"]["ED_IZM"]){?>/<?=$arResult["DISPLAY_PROPERTIES"]["ED_IZM"]["VALUE"];?><?}?>

                    

                </li>
                <li class="bay"><a href="<?echo $arResult["ADD_URL"]?>" rel="nofollow"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cart.png" width="16" height="16" alt="cart"/><?= GetMessage("CATALOG_ADD_TO_BASKET") ?></a></li>
                <li class="quick-bay"><a class='iframe' href="<?=SITE_DIR?>question/"><?=GetMessage("CATALOG_QUICK_BAY")?></a></li>
            </ul>
        </div>
    </div>
    <div id="tabs2">
        <ul>
            <li class="tabs2"><a href="#tabs-6"><?=GetMessage("CATALOG_TABS_DESCR")?></a></li>
            <li class="tabs2"><a href="#tabs-7"><?=GetMessage("CATALOG_TABS_RESP")?></a></li>
			 <li class="tabs2"><a href="#tabs-8"><?=GetMessage("CATALOG_TABS_VIDEO")?></a></li>
        </ul>
        <div id="tabs-6">
            <h4><?=GetMessage("CATALOG_TABS_DESCR")?></h4>
            <article>
                <?= $arResult["DETAIL_TEXT"] ?>
            </article>
        </div>
        <div id="tabs-7">
            <h4><?=GetMessage("CATALOG_TABS_RESP")?></h4>
                        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="http://example.com/comments" data-width="740" data-numposts="5" data-colorscheme="light"></div>
            
            
        </div>
		
		<div id="tabs-8">
            <h4><?=GetMessage("CATALOG_TABS_VIDEO")?></h4>

    <?=htmlspecialcharsBack($arResult["PROPERTIES"]["Y_VIDEO"]["VALUE"]["TEXT"])?>

           
    </div>
		
		
    </div>
</div>


<?if(is_array($arResult["SECTION"])):?>
<br /><a href="<?= $arResult["SECTION"]["SECTION_PAGE_URL"] ?>"><?= GetMessage("CATALOG_BACK") ?></a>
<?endif?>
