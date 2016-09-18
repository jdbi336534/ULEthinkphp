$(document).ready(function(){
	var num=1;
	//选择商品
	$(".choseilike a").click(function(){
		$(".choseilike .item").removeClass("selected");
		$(this).parent().addClass("selected");
	});
	//减少
	$(".btn-reduce").click(function(){
		if(num<=1){
			num=1;
		}else{
			num--;
		}
		$(".wrap-input .text").val(num);
	});
	//增加
	$(".btn-add").click(function(){
		num++;
		$(".wrap-input .text").val(num);
	});
});
