<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(count($arResult["ITEMS"]) > 0): ?>
<?
if (empty($arParams["FLAG_PROPERTY_CODE"]))
	$arParams["FLAG_PROPERTY_CODE"] = rand();
?>



<div class="products group">
 <h2>Спецпредложения</h2>
	<ul class="catalog-list group">

<?foreach($arResult["ITEMS"] as $key => $arItem):
	if(is_array($arItem))
	{
		$bPicture = is_array($arItem["PREVIEW_IMG"]);
		?><li class="itembg R2D2" itemscope itemtype = "http://schema.org/Product">
		
		<div class="picture"> 


		<?$resize = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], array("width"=>264, "height"=>264), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
          <img src="<?echo $resize['src']?>" width="<?echo $resize['width']?>" height="<?echo $resize['height']?>" alt="<?=$arItem["NAME"]?>" />
		  
		  
<div class="hover"><a class="ajax" rel="nofollow" href="<?=SITE_DIR?>quick/?SECTION_ID=<?=$arItem["IBLOCK_SECTION_ID"]?>&amp;ELEMENT_ID=<?=$arItem["ID"]?>"><span>Быстрый просмотр</span></a></div>
		  
		  
	</div>
			
			
			
<h3>
<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="item_title" title="<?=$arItem["NAME"]?>"><?=$arItem["NAME"]?></a>
</h3>
			
			
			
		     <div class="price"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><span>Купить:

                                            <?
                            if(is_array($arItem["OFFERS"]) && !empty($arItem["OFFERS"]))   //if product has offers
                            {
                                    if (count($arItem["OFFERS"]) > 1)
                                    {
                                            echo GetMessage("CR_PRICE_OT")."&nbsp;";
                                            echo $arItem["PRINT_MIN_OFFER_PRICE"];
                                    }
                                    else
                                    {
                                            foreach($arItem["OFFERS"] as $arOffer):?>
                                                    <?foreach($arOffer["PRICES"] as $code=>$arPrice):?>
                                                            <?if($arPrice["CAN_ACCESS"]):?>
                                                                            <?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
                                   <?=$arPrice["PRINT_DISCOUNT_VALUE"]?>
                                               <?=$arPrice["PRINT_VALUE"]?>
                             <?else:?>
                                      <?=$arPrice["PRINT_VALUE"]?>
                                                                            <?endif?>
                                                            <?endif;?>
                                                    <?endforeach;?>
                                            <?endforeach;
                                    }
                            }
                            else // if product doesn't have offers
                            {
                                    if(count($arItem["PRICES"])>0 && $arItem['PROPERTIES']['MAXIMUM_PRICE']['VALUE'] == $arItem['PROPERTIES']['MINIMUM_PRICE']['VALUE']):
                                            foreach($arItem["PRICES"] as $code=>$arPrice):
                                                    if($arPrice["CAN_ACCESS"]):
                                                            ?>
                                                                    <?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
                                                                            <?=$arPrice["PRINT_DISCOUNT_VALUE"]?>
               <?=$arPrice["PRINT_VALUE"]?>
                                                                    <?else:?>
              <?=$arPrice["PRINT_VALUE"]?>
                                                                    <?endif;?>
                                                            <?
                                                    endif;
                                            endforeach;
                                    else:
                                            $price_from = '';
                                            if($arItem['PROPERTIES']['MAXIMUM_PRICE']['VALUE'] > $arItem['PROPERTIES']['MINIMUM_PRICE']['VALUE'])
                                            {
                                                    $price_from = GetMessage("CR_PRICE_OT")."&nbsp;";
                                            }
                                            CModule::IncludeModule("sale")
                                            ?>
                                            <?=$price_from?><?=FormatCurrency($arItem['PROPERTIES']['MINIMUM_PRICE']['VALUE'], CSaleLang::GetLangCurrency(SITE_ID))?>
                                            <?
                                    endif;
                            }
                            ?>
                             
                             <? if ($arItem["PROPERTIES"]["ED_IZM"]){?>/<?=$arItem["PROPERTIES"]["ED_IZM"]["VALUE"];?><?}?>
                             
                             
                             </span></a>
     </div>
		
		</li>
<?
	}
endforeach;
?>
	</ul>
</div>
<?elseif($USER->IsAdmin()):?>

<?endif;?>

