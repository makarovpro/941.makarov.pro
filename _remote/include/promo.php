<?if($APPLICATION->GetCurPage(false)==SITE_DIR):?>  
<div id="wrap-promo">
	<script type="text/javascript">
	$(document).ready(function(){
		$("#close-pay a").click(function(){
			$("#wrap-promo").toggle();
			return false;
		});
	});

</script>

<div class="wrap_colors">
	<ul>
		<li class="price">Коммерческая версия цена: 14 900 р</li>
		<li class="pay"><a href="http://makarov.pro/eshop/solutions/941pro/" target="_blank">Купить сейчас</a></li>
		<li class="mastercard"></li>
		<li class="visa"></li>
		<li class="yandexmoney"></li>
	</ul>
	
		
	
</div>
<div class="sub_wrap_colors "></div>
<div id="close-pay"><a href="#map">Закрыть</a></div>
</div>


	
	<?else:?>
			

  <?endif?>
