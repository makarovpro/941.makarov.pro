<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?php
$a = '0';
for ($n = 0; $n < 6; $n++)
    $b = '0';
for ($n = 0; $n < 6; $n++)
    
    ?>



<div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">

        <?foreach($arResult["ITEMS"] as $arItem):?>

        <?if(is_array($arItem["DISPLAY_PROPERTIES"]["IMAGE"])):?>
        
        <?$arFileData = CFile::GetFileArray($arItem["DISPLAY_PROPERTIES"]["IMAGE"]["VALUE"]);?>

        <? $imgslider = CFile::ResizeImageGet($arItem["DISPLAY_PROPERTIES"]["IMAGE"]["VALUE"], array('width'=>'900', 'height'=>'330'), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>

        <img src="<?= $imgslider['src'] ?>" alt="" title="#htmlcaption<?echo ++$a?>">

        <?endif;?>

        <?endforeach;?>


    </div>

    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?if($arItem["DISPLAY_PROPERTIES"]["IMAGE"]):?>
    <div id="htmlcaption<?echo ++$b?>" class="nivo-html-caption">
        <h2><?= $arItem['NAME']; ?></h2>
        <span><?= $arItem["PROPERTIES"]["SLOGAN"]["VALUE"] ?></span>
        <div class="capdiv"><a href="<?= $arItem["PROPERTIES"]["LINK"]["VALUE"] ?>"><?=GetMessage('MORE')?></a></div>
    </div>
    <?endif;?>
    <?endforeach;?>
</div>






