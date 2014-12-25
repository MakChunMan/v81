//TODO: Move max no of module (6) as a variable

/***************************************************
// Click 
***************************************************/

//(1) Select the module Template from the template zone
//(2) Draw Module Icon to MyModule Zone
//(3) Load Module details edit from 
$('.moduleWidget').click(function(){
	var attrTypeName = $('#'+this.id).attr("typename");
	var modEditPath = "";
	//alert(attrTypeName);
	$("#module"+(currentAdd+1)).html($('#'+this.id).html()+"<input type=hidden name=\"newModule"+(currentAdd+1)+"\" value=\""+attrTypeName+"\">");
	$("#module"+(currentAdd+1)).addClass("clickbind");
	$("#module"+(currentAdd+1)).find(".info").remove();
	$("#module"+(currentAdd+1)).addClass("text-center").css("padding","5px");
	addSelectBorder($("#module"+(currentAdd+1)),true);
	if(currentAdd<5){
		$("#module"+(currentAdd+2)).html(addBtnStr);
		$('#save_alert').show();
		currentAdd++;
	}
	$('#moduleTemplateRow').hide();	//Hide the module and Template
	loadEditPage(attrTypeName,'');
	bindClickEvent();
});

/*********************************************
//Misc function
/*********************************************/
var addBtnStr = "<button class=\"btn btn-lg btn-success\" onClick=\"javascript:$('#moduleTemplateRow').show();clearAllBorder();$('#moduleEditRow').hide();return false;\"><i class=\"fa fa-plus\"></i> Add</button>";
var emptyStr = "<button class=\"btn btn-sm btn-default disabled\"><i class=\"fa fa-plus\"></i> Empty</button>";

function clearAllBorder(){
	console.log('clearAllBorder()');
	clearAllBg();
	for(x = 1; x< 6 ;x++){
		addSelectBorder($("#module"+(x)), false);
	}
}

function clearAllBg(){
	console.log('clearAllBg');
	for(x = 1; x< 6 ;x++){
		addSelectBg($("#module"+(x)), false);
	}
}

function addSelectBorder(obj, isTrue){
	if(isTrue){
		obj.css("border","2px dashed grey");
	} else {
		obj.css("border","");
	}
}

function addSelectBg(obj, isTrue){
	if(isTrue){
		obj.css("background-color","PINK");
	} else {
		
		obj.css("background-color","");
	}
}

function bindClickEvent(){
	$(".clickbind").unbind("click");
	$(".clickbind").click(
			function(){
				var thisid = $(this).attr("id");
				var attrTypeName = $('#'+thisid).attr("typename");
				var guid = $("input[name='"+thisid+"']").val();
				clearAllBorder();
				loadEditPage(attrTypeName, guid);
				addSelectBorder($('#'+thisid), true)
				addSelectBg($('#'+thisid), true);
				console.log(this);
				$('#moduleEditRow').hide();
				$('#moduleTemplateRow').hide();
	});
}

//AJAX Load Edit page (Different Module may have different edit page which controled by attrTypeName
//Add different attrTypeName and modEditPage here is new Module is added
function loadEditPage(attrTypeName, guid){
	var modEditPath = "";
	if(attrTypeName=== undefined)
		return;
	if(attrTypeName.toUpperCase() == 'ModAboutPage'.toUpperCase()){
		modEditPath = "MOD_EDIT_ABOUTUS";
	}
	if(attrTypeName != ""){
		//Display appropriate edit
		$.ajax({
			url: "/do/MOD/"+modEditPath+"/"+guid+"/",
			type: "post",
			cache: false
		}).done(function( html ) {
			if($.trim(html).match("^Error")){
				// Server side validation and display error msg
				//$('#error-msg').html(html.replace("Error:","")+"<br/>");
			} else {
				$('#modEditForm').html(html);
				$('#moduleEditRow').show();			//Show the edit form
			}
		});
	}
}

/*******************************************
//Page Init
/*******************************************/
//Hide Save alert
$('#save_alert').hide();
//Load the module list
topRefresh();
bindClickEvent();


/*******************************************
//Reload My Module (Top)
/*******************************************/
function topRefresh(){
	$.ajax({
		url: "/do/MOD/MOD_LIST_MOD",
		type: "post",
		cache: false
	}).done(function( html ) {
		if($.trim(html).match("^Error")){
			// Server side validation and display error msg
			//$('#error-msg').html(html.replace("Error:","")+"<br/>");
		} else {
			$('#moduleListForm').html(html);
			$('#save_alert').hide();
		}
	});
}

/*******************************************
//Save My Module (Top) - Create Dummy Module
/*******************************************/

function topSave(){
	alert('topSave');
	$.ajax({
		url: "/do/MOD/MOD_SAVE",
		type: "post",
		data: $('#moduleListForm').serialize(),
		cache: false
	}).done(function( html ) {
		if($.trim(html).match("^Error")){
			// Server side validation and display error msg
			//$('#error-msg').html(html.replace("Error:","")+"<br/>");
		} else {
			$('#moduleListForm').html(html);
			$('#save_alert').hide();
		}
	});
}
