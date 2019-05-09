function checkAll(t,tname){
	tname = tname?tname:'optid[]'
	if($(t).attr('checked')=='checked'){
		$("input[name='"+tname+"']").attr('checked',true);
	}else{
		$("input[name='"+tname+"']").attr('checked',false);
	}
}

function nTabs(t,tid,listid,hover,listclass){
	$(t).parent().children().removeClass(hover);
	$(t).addClass(hover);
	$("."+listclass).hide();
	$("#"+listid+tid).show();
}