<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="quick">
  <h3><?=$arResult["NAME"]?></h3>
  
  	<? if ($arResult["DISPLAY_PROPERTIES"]["ARTNUMBER"]){?>
	<p class="articul"><?=GetMessage("ARTNUMBER")?><?=$arResult["DISPLAY_PROPERTIES"]["ARTNUMBER"]["VALUE"];?></p>
	<?}?>
  
  
  <div class="img-quick"><a href="<?=$arResult["DETAIL_PAGE_URL"]?>">
      
          <?$resize = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array("width"=>530, "height"=>420), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
          
          <img src="<?echo $resize['src']?>" width="<?echo $resize['width']?>" height="<?echo $resize['height']?>" alt="<?=$arResult["NAME"]?>" />

      </a></div>
  <table>
    <tr>
      <td width="40%" valign="top"><div class="quick-link"><a href="<?=$arResult["DETAIL_PAGE_URL"]?>"><?=GetMessage("DETAIL_INFO")?></a></div>
        <div class="price"><?=GetMessage("PRICE_PRICE")?><?=$arResult["DISPLAY_PROPERTIES"]["PRICE_PRICE"]["VALUE"];?><?foreach($arResult["PRICES"] as $code=>$arPrice):?>
			<?if($arPrice["CAN_ACCESS"]):?>	
				<?if($arParams["PRICE_VAT_SHOW_VALUE"] && ($arPrice["VATRATE_VALUE"] > 0)):?>
					<?if($arParams["PRICE_VAT_INCLUDE"]):?>
						(<?echo GetMessage("CATALOG_PRICE_VAT")?>)
					<?else:?>
						(<?echo GetMessage("CATALOG_PRICE_NOVAT")?>)
					<?endif?>
				<?endif;?>
				<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
					<?=$arPrice["PRINT_VALUE"]?><?=$arPrice["PRINT_DISCOUNT_VALUE"]?>
					<?if($arParams["PRICE_VAT_SHOW_VALUE"]):?>
						<?=GetMessage("CATALOG_VAT")?><?=$arPrice["DISCOUNT_VATRATE_VALUE"] > 0 ? $arPrice["PRINT_DISCOUNT_VATRATE_VALUE"] : GetMessage("CATALOG_NO_VAT")?>
					<?endif;?>
				<?else:?>
					<?=$arPrice["PRINT_VALUE"]?>
					<?if($arParams["PRICE_VAT_SHOW_VALUE"]):?>
						<?=GetMessage("CATALOG_VAT")?><?=$arPrice["VATRATE_VALUE"] > 0 ? $arPrice["PRINT_VATRATE_VALUE"] : GetMessage("CATALOG_NO_VAT")?>
					<?endif;?>
				<?endif?>
			<?endif;?>
		<?endforeach;?>
                <? if ($arResult["DISPLAY_PROPERTIES"]["ED_IZM"]){?>
            <br><?=$arResult["DISPLAY_PROPERTIES"]["ED_IZM"]["VALUE"];?><?}?></div></td>
      <td width="60%" valign="top"><?=$arResult["PREVIEW_TEXT"]?></td>
    </tr>
  </table>
</div>
