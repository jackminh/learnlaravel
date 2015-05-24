/*window.onload = function(){

	 var ico = document.getElementsByTagName('a');
	 var sideUl = document.getElementsByTagName('ul');
	 var sideli = document.getElementsByTagName('li');

	

	alert('1111');

	 /*function displayInfo(args){
	 	var outInfo = '';
	 	if(typeof args.name == "string"){
	 		outInfo += args.name;
	 	}
	 	if(typeof args.age == 'number'){
	 		outInfo += args.age;
	 	}
	 	alert(outInfo);
	 }
	
	 displayInfo({
	 	name:'xiaoming',
	 	age:20
	 });
	 var color = ['blue','red','green'];
	 var person1 = {
	 	toLocaleString: function(){
	 		return "Nick";
	 	},
	 	toString:function(){
	 		return "Gore";
	 	}
	 }
	 var person2 = {
	 	toLocaleString: function(){
	 		return "mick";
	 	},
	 	toString: function(){
	 		return 'joson';
	 	}
	 }

     var person = [person1,person2];
     alert(person.join('||'));
     alert(person.join(' '));
     var values = [0,1,5,10,15];
     var everyResult = values.every(function(item,index,array){
     	  return (item>2);
     });
     var someResult = values.some(function(item,index,array){

     	return (item>2);

     });
     alert(someResult);
     alert(everyResult);
     function compare(value1,value2){
     	if(value1<value2){
     		return -1;
     	}else if(value1>value2){
     		return 1;
     	}else{
     		return 0;
     	}
     }
     values.sort(compare);
     alert(values);

	 alert(displayInfo.toString());
	 for(var i = 0; i<ico.length; i++){

	 	 var index = i;

	 	 ico[i].onclick = function(){
 	 	
	 	 	this.className = 'active';

	 	 }
	 	
	 }*/
//}

/*$(document).ready(function(){

	$category = $("ul li:gt(5):not(:last)");

	$category.hide();


	$toggleBtn = $("div.showmore>a");

	$toggleBtn.click(function(){

		if($category.is(':visible')){
			$category.hide();
			$(this).find('span').text("显示全部品牌");		
			$('ul li').filter(":contains('佳能'),:contains('尼康'),:contains('奥林巴斯')")
					  .removeClass("promoted");	
			return false;
		}else{
			    $category.show();
				$(this).find('span')
			   .text("精简显示品牌");

				$('ul li').filter(":contains('佳能'),:contains('尼康'),:contains('奥林巴斯')")
						  .addClass("promoted");
				return false;
		}
	
	});

	$("input[name='username']").focus(function(){
		var $txt_val = $(this).val();
		if($txt_val == this.defaultValue){
			$(this).val('');
		}else{
			$(this).val($txt_val);
		}
	});
	$("input[name='username']").blur(function(){
		var $txt_val = $(this).val();
		if($txt_val == ""){
			$(this).val(this.defaultValue);
		}else{
			$(this).val($txt_val);
		}
	});

	$(":checkbox").val(['check1','check2']);
	$(":radio").val(['radio1','radio2']);
	$("#multiple").val(['select1','select2']);
	var x =10;
	var y =20;
	// $('a.tooltip').mouseover(function(e){
	// 	  this.myTitle = this.title;
	// 	  this.title = "";
	// 	  var tooltip = "<div id='tooltip'>"+this.myTitle+"</div>";
	// 	  $("body").append(tooltip);
	// 	  $("#tooltip").css({
	// 	  		"top":(e.pageX+x)+"px",
	// 	  		"left":(e.pageY+y)+"px"
	// 	  }).show("fast");
	// }).mouseout(function(){
	// 	this.title = this.myTitle;
	// 	$("#tooltip").remove();
	// }).mousemove(function(e){
	// 	$('#tooltip').css({
	// 		"top": (e.pageX+x)+"px",
	// 	  	"left": (e.pageY+y)+"px"
	// 	});
	// });
	$("a.tooltip").mouseover(function(e){
		this.myTitle = this.title;
		this.title = "";
		var imageTitle = this.myTitle ? "<br/>"+this.myTitle : "";
		var tooltip = "<div id='tooltip'><img src='"+this.href+"' alt='"+imageTitle+"'"+"</div>";
		$("body").append(tooltip);
		$("#tooltip").css({
			"top" : e.pageX/2 + "px",
			"left" : e.pageY/2 + "px"
		}).show("fast");
	}).mouseout(function(){
		this.title = this.myTitle;
		$("#tooltip").remove();

	}).mousemove(function(e){
		$("#tooltip").css({
			"top" : e.pageX/2 + "px",
			"left" : e.pageY/2 + "px"
	});
});*/
/*$(document).ready(function(){
	$('#content span').bind('click',function(){
		var txt = $('#msg').html()+"<p>内层span元素被单击</p>";
		$('#msg').html(txt);
		return false;

	});
	
	$('#content').bind('click',function(){
		var txt = $('#msg').html()+"<p>外层div元素被单击</p>";
		$('#msg').html(txt);
		return false;

	});
	$('body').bind('click',function(){
		var txt = $('#msg').html()+"<p>body元素被单击</p>";
		$('#msg').html(txt);
		return false;
	});

	$("#btn").bind("myEvent",function(){
			var txt = "<div id='divshow' style='position:absolute;width:200px;height:200px;border:1px solid red;background-color:#ccc;'></div>";
			$('body').append(txt);
			$('#divshow').css({
				'left': 100 + "px",
				'top': 100 + "px"
			});
	});
	$("#btn").trigger("myEvent");


	/*$("#panel").bind("myMove",function(){
		var x = screen.availWidth;
		var $self = $(this);		
		$self.animate({'left': x},6000,function(){			
			 $self.animate({'left':0},6000);						
		});				 		
	});
	$("#panel").trigger('myMove');*/
	/*$('#panel').css({'opacity':0.5});
	$('#panel').bind('click',function(){
		  $(this).animate({'left':400,'height':20,'opacity':1},3000)
		  		 .animate({'top':200,'width':20},3000).fadeOut('slow');
	});
});*/
$(document).ready(function(){
		$("#dropdownMenu1").on('click.bs.dropdown',function(){
			alert('11111');
		});
});