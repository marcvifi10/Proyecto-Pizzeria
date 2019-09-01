@include('frontend.arxius.arxius')

<!--Google -Fonts-->
<link href='https://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin-ext' rel='stylesheet' type='text/css'>
		
		<!--Font-awsome-->
				<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<div class="container">
					<header>
				
		</header>

<style>
body {
	font-family: 'Sintony', sans-serif;
	color: #e5e5e5;
	font-size: 12px;
	background: #bfbfbf;
	line-height: 1;
}
*, *:before, *:after {
    box-sizing: border-box;
}
/** * Eric Meyer's Reset CSS v2.0 (https://meyerweb.com/eric/tools/css/reset/) * http://cssreset.com */
html, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
	display: block;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after, q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
header h2 {
	margin: 25px 10px;
font-size: 28px;
text-align: center;
color: cornsilk;
}
.container {
	margin: 10px auto;
	display: table;
	max-width: 1140px;
	width: 100%;
}
.container:after, .container:before {
	content: "" clear : both;
}
nav.menu {
	background: coral;
	position: relative;
	min-height: 45px;
	height: 100%;
}

.menu > ul > li {
	list-style: none;
	display: inline-block;
	color: #fff;
	line-height: 45px;
	
}
.menu > ul li a, .xs-menu li a {
	text-decoration: none;
	color: #fff;
	 display:block;
	 padding: 0px 24px;
}
.menu > ul li a:hover {
	background:#444;
	color: #fff;
	transition-duration: 0.3s;
	-moz-transition-duration: 0.3s;
	-webkit-transition-duration: 0.3s;
}
.active{
	background:#444 !important;
	
}
.displaynone{
	display: none;
}
.xs-menu-cont{
display:none;
}
.xs-menu-cont > a {
    background: none repeat scroll 0 0 #ff7f50;
    border-radius: 3px;
    padding: 3px 6px;
	display: block;
	border-bottom:1px solid #E67248;
	    box-shadow: 0 1px 2px #e67248;
		-webkit-box-shadow: 0 1px 2px #e67248;
		-moz-box-shadow: 0 1px 2px #e67248;
}
.xs-menu-cont > a:hover{
 cursor: pointer;
}
  
.xs-menu li {
color: #fff;
padding: 14px 30px;
border-bottom: 1px solid #ccc;
background: #FF7F50;

}
.xs-menu  a{
text-decoration:none;
}

.mega-menu {
   background: none repeat scroll 0 0 #888;
    left: 0;
    margin-top: 3px;
    position: absolute;
    width: 100%;
	padding:15px;
	display:none;
	 transition-duration: 0.9s;
    
}
#menutoggle i {
    color: #fff;
    font-size: 33px;
    margin: 0;
    padding: 0;
}


/*--column--*/
.mm-6column:after, .mm-6column:before, .mm-3column:after, .mm-3column:before{
content:"";
display:table;
clear:both;


}
.mm-6column, .mm-3column {
 float: left;
 position: relative;
 }
.mm-6column {
    width: 50%;
}
.mm-3column {
        width: 25%;
}
.responsive-img {
    display: block;
    max-width: 100%;

}
.left-images{
margin-right:25px;
}
 .left-images, .left-categories-list {
   float: left;
}
.categories-list li {
    display: block;
    line-height: normal;
    margin: 0;
    padding: 5px 0;
}
.categories-list li :hover{
		background:inherit !important;
}
.left-images > p {
    background: none repeat scroll 0 0 #ff7f50;
    display: block;
    font-size: 18px;
    line-height: normal;
    margin: 0;
    padding: 5px 14px;
}
.categories-list span {
    font-size: 18px;
    padding-bottom: 5px;
    text-transform: uppercase;
}
.mm-view-more{
	background: none repeat scroll 0 0 #ff7f50;
    color: #fff;
    display: inline !important;
    line-height: normal;
    padding: 5px 8px !important;
	margin-top:10px;
}
.display-on{
display:block;
 transition-duration: 0.9s;
}
.drop-down > a:after{
content:"\f103";
color:#fff;
font-family: FontAwesome;
font-style: normal;
margin-left: 5px;
 

}
 /*MediaQuerys*/
 @media (max-width: 600px) {
.menu {
 display:none;
 }
 .xs-menu li a {

	 padding:0px;
}
 .xs-menu-cont{
 display:block ;
 }
 }


/*Animation--*/

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
@-webkit-keyframes fadeIn {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

.fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
}




</style>
 <script>
 
 	$(document).ready(function() 
	 {
		//responsive menu toggle
		$("#menutoggle").click(function() 
		{
			$('.xs-menu').toggleClass('displaynone');

		});

		//add active class on menu
		$('ul li').click(function(e) 
		{
			$('li').removeClass('active');
			$(this).addClass('active');
		});

		//drop down menu	
		$(".drop-down").hover(function() 
		{
			$('.mega-menu').addClass('display-on');
		});

		$(".drop-down").mouseleave(function() 
		{
			$('.mega-menu').removeClass('display-on');
		});
			
	});

</script>
<div class="xs-menu-cont">
	<div align="left">
		<a href="{{ route('inici') }}">
			<img src="images/logo.png" width="200px" height="100px">
		</a>
	</div>
	<br>
	<a id="menutoggle" align="right">
		<font size="3">
			<b>MENÚ<b> 
		</font> 
		<i class="fa fa-align-justify"></i> 
	</a>
	<nav class="xs-menu displaynone">
		<ul>
			<li>
				<a href="{{ route('inici') }}" id="inici" onclick="inici()">
					<i class="fa fa-home"></i> 
					{{ trans('web.home') }}
				</a>
			</li>
			<li>
				<a href="{{ route('pizzes') }}" id="pizzes">
				<i class="fas fa-pizza-slice"></i>
					{{ trans('web.pizzas') }}
				</a>
			</li>
			<li>
				<a href="#" id="begudes" onclick="begudes()">
					<i class="fab fa-gulp"></i> 
					{{ trans('web.drinks') }}
				</a>
			</li>
			<li>
				<a href="#" id="menus" onclick="menus()">
					<i class="fas fa-pizza-slice"></i> <i class="fab fa-gulp"></i> 
					{{ trans('web.menus_menu') }}
				</a>
			</li>
			<li>
				<a href="#" id="postres" onclick="postres()">
					<i class="fas fa-birthday-cake"></i> 
					{{ trans('web.desserts') }}
				</a>					
			</li>
			<li>
				<a href="{{ route('login') }}" id="login">
					<i class="fas fa-user"></i> 
					{{ trans('web.login') }}
				</a>
			</li>
			<li>
				<a href="{{ route('register') }}" id="registre">
					<i class="fas fa-user-plus"></i> 
					{{ trans('web.register') }}
				</a>
			</li>
		</ul>
	</nav>
	</div>
	<nav class="menu">
		<ul>
			<li>
				<a href="{{ route('inici') }}">
					<img src="images/logo.png" width="200px" height="100px">
				</a>
			</li>
			<li class="active">
				<a href="{{ route('inici') }}">
					<b>{{ trans('web.home') }}</b>
				</a>
			</li>
			<li class="">
				<b>
					<a href="{{ route('pizzes') }}">
						{{ trans('web.pizzas') }}
					</a>
				</b>
			</li>
			<li class="">
				<a href="{{ route('drinks') }}">
					<b>{{ trans('web.drinks') }}</b>
				</a>
			</li>
			<li class="">
				<a href="{{ route('menus') }}">
					<b>{{ trans('web.menus_menu') }}</b>
				</a>
			</li>
			<li class="">
				<a href="{{ route('desserts') }}">
					<b>{{ trans('web.desserts') }}</b> 
				</a>
			</li>
			<li class="">
				<a href="#">
					<b>|</b> 
				</a>
			</li>
			<li class="">
				<a href="{{ route('login') }}">
					<font color="black">
						{{ trans('web.login') }}
					</font>
				</a>
			</li>
			<li class="">
				<a href="{{ route('register') }}">
					<font color="black">
						{{ trans('web.register') }}
					</font>
				</a>
			</li>
		</ul>
	</nav>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>