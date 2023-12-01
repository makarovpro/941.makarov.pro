<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<ul class="catalog-section group">
    <?foreach($arResult["ITEMS"] as $cell=>$arElement):?>
    <?
    $this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
    ?>
    <?if($cell%$arParams["LINE_ELEMENT_COUNT"] == 0):?>

    <?endif;?>

    <li>
        <div class="picture">

        <?$resize = CFile::ResizeImageGet($arElement["DETAIL_PICTURE"], array("width"=>264, "height"=>264), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
          <img src="<?echo $resize['src']?>" width="<?echo $resize['width']?>" height="<?echo $resize['height']?>" alt="<?=$arElement["NAME"]?>" />
        
               <div class="hover"><a class="ajax" rel="nofollow" href="<?=SITE_DIR?>quick/?SECTION_ID=<?=$arElement["IBLOCK_SECTION_ID"]?>&amp;ELEMENT_ID=<?=$arElement["ID"]?>"><span><?=GetMessage("CR_TITLE_QUICK")?></span></a></div>
        
        </div>
   
        <h3><?= $arElement["NAME"] ?></h3>
     
                <div class="price"><a href="<?= $arElement["DETAIL_PAGE_URL"] ?>"><span>

                            <?foreach($arElement["PRICES"] as $code=>$arPrice):?>
                            <?if($arPrice["CAN_ACCESS"]):?>

                            <?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
                            <s><?= $arPrice["PRINT_VALUE"] ?></s> <span class="catalog-price"><?= $arPrice["PRINT_DISCOUNT_VALUE"] ?></span>
                            <?else:?><?= $arPrice["PRINT_VALUE"] ?><?endif;?>

                            <?endif;?>
                            <?endforeach;?>
														
														
														<? if ($arElement["DISPLAY_PROPERTIES"]["ED_IZM"]){?>/<?=$arElement["DISPLAY_PROPERTIES"]["ED_IZM"]["VALUE"];?><?}?>
                            
                            
                            
                            

                        </span></a></div>
         
    </li>
    <?$cell++;
    if($cell%$arParams["LINE_ELEMENT_COUNT"] == 0):?>

    <?endif?>

    <?endforeach; // foreach($arResult["ITEMS"] as $arElement):?>

    <?if($cell%$arParams["LINE_ELEMENT_COUNT"] != 0):?>
    <?while(($cell++)%$arParams["LINE_ELEMENT_COUNT"] != 0):?>

    <?endwhile;?>

    <?endif?>

</ul>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<?= $arResult["NAV_STRING"] ?>
<?endif;?>

