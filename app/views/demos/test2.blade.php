<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title></title>
	<style>
	<!--
	*{
		margin: 0;
		padding: 0;
	}
	body{
		background: #222;
	}
	ol{
		list-style: none;
	}
	img{
		border:none;
	}

	#slider{
		border: 1px solid #fd0;
		width:400px;
		height:300px;
		overflow: hidden;
		position: relative;
		margin:2em auto;
	}
    #slider .player{
    	position: absolute;
    	top:0;
    	left:0;
    }
    #slider .player li{
    	width:400px;
    	height:300px;
    	float:left;
    }
    #slider .btns{
    	position: absolute;
    	right:10px;
    	bottom:5px;
    	height:30px;
    }
    #slider .btns li {
 		font: 13px Tahoma, Arial, 宋体, sans-serif;
    	float: left;
    	margin: 0 3px;
    	border:1px solid #f60;
    	background-color: #FFF;
        color: #CC937A;
        opacity: .8;
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 19px;
        text-align: center;
        -moz-border-radius:10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
   }
   #slider .btns li.active {
		background: #f60;
		color:#fff;
		font-weight:bold;
		opacity:1;
    }
	-->
	</style>
	<script type="text/javascript">
//<![CDATA[
		function $(){
			var elements = new Array();
			for(var i=0 ; i<arguments.length; i++){
				var element = arguments[i];
				if(typeof element == 'string'){
					element = document.getElementById(element);
				}
				if(arguments.length ==1){
					return element;
				}
				elements.push(element);
			}
			return elements;
		};
		function getByClass(className,tag,parent){
			parent = parent || document ;
			if(!(parent = $(parent))){
				return false;
			}
			var allTag = (tag == '*' && parent.all) ? parent.all : parent.getElementsByTagName(tag);
			var matchElement = new Array();
			className = className.replace(/\-/g,'/\\-/');
			var regex = new RegExp('(^|\\s)' + className + '(\\s|$)');

			var element;
			for(var i =0;i<allTag.length;i++){
				element = allTag[i];
				if(regex.test(element.className)){
					matchElement.push(element);

				}
			}
			return matchElement;
		}
		function animate(o,start,alter,dur,fx){
			var currTime = 0;
			var t = setInterval(function(){
				if(currTime>=dur){
					clearInterval(t);
				}
				for(var i in start){
					o.style[i] = fx(start[i],alter[i],currTime,dur)+'px';
				}
				currTime+=40;
			},40);
			return function(){
				clearInterval(t);
			}
		}
		function Player(btns,scrollContent,imageHeight,timeout,hoverClass){
			hoverClass = hoverClass || 'active';
			timeout = timeout || 1500 ;
			this.scrollContent = scrollContent;
			this.imageHeight = imageHeight;
			this.timeout = timeout;
			this.btns = btns;
			this.hoverClass = hoverClass;
			var _this = this;
			for(var i =0 ; i<btns.length;i++){
				this.btns[i].index = i;
				btns[i].onmouseover = function(){
					_this.stop();
					_this.invoke(this.index);
				}
				btns[i].onmouseout = function(){
					_this.start();
				}
			}
			 this.invoke(0);
		}
		Player.prototype ={
			constructor : Player,
			start: function(){
				var _this =this;
				this.stop();
				this.intervalId= setInterval(function(){
					_this.next();
				},this.timeout);
			},
			stop: function(){
				clearInterval(this.intervalId);
			},
			next: function(){
				this.invoke(this.pointer+1);
			},
			invoke: function(n){
				this.pointer = n;
				if(this.pointer >= this.btns.length){
					this.pointer = 0;
				}
				this.clearHover();
				this.btns[this.pointer].className = this.hoverClass;
				var startVal = parseInt(this.scrollContent.style.left) || 0 ;
				var alertVal = parseInt(-startVal - this.imageHeight * this.pointer);


			},
     		clearHover: function(){
				for(var i=0; i<this.btns.length;i++){
					this.btns[i].className = '';
				}
			}
		}

		window.onload = function(){
			/*var btns = getByClass('btns','ol')[0].getElementsByTagName('li');
			var player = getByClass('player','ol')[0];
			var play = new Player(btns,player,170,1500,undefined);
			play.start();*/

			function getReturnValue(){
				return function(){
					alert('111');
				}
				
			}
			
			getReturnValue();
			
		}




//]]>
	</script>
</head>
<body>
	<div id="slider">
		<ol class="player">
			<li><a href="#"><img src="{{asset('images/1.jpg')}}"></a></li>
			<li><a href="#"><img src="{{asset('images/2.jpg')}}"></a></li>
			<li><a href="#"><img src="{{asset('images/3.jpg')}}"></a></li>
			<li><a href="#"><img src="{{asset('images/4.jpg')}}"></a></li>
			<li><a href="#"><img src="{{asset('images/5.jpg')}}"></a></li>
		</ol>
		<ol class="btns">
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
		</ol>
    </div>
</body>
</html>