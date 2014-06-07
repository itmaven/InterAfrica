<?php $title="انتر افريكا للسياحة - حجز الفنادق"; ?>
<!DOCTYPE html>
<html lang="ar"><!-- InstanceBegin template="/Templates/template-ar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<title><?php echo $title ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/styles/main-ar.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
    <!-- Bootstrap core CSS -->
    <link href="assets/styles/bootstrap.min-cutom-ar.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
<!--[if lt IE 9]>
<link href="assets/styles/ie/ie8.css" rel="stylesheet" type="text/css" media="all">
<script src="assets/scripts/ie/css3-mediaqueries.min.js"></script>
<script src="assets/scripts/ie/html5shiv.min.js"></script>
<![endif]-->
	<!-- Start Banner HEAD section -->
	<link rel="stylesheet" type="text/css" href="assets/styles/banner.css" />
	<script type="text/javascript" src="assets/scripts/jquery.js"></script>
	<!-- End Banner HEAD section -->
    
        <!--  Begin Galley  -->
<script type="text/javascript" src="assets/styles/phto-gal/gal.js"></script>
<link rel="stylesheet" type="text/css" href="assets/styles/phto-gal/gal.css" />

<!--
	2) Optionally override the settings defined at the top
	of the highslide.js file. The parameter hs.graphicsDir is important!
-->

<script type="text/javascript">
	hs.graphicsDir = 'assets/styles/phto-gal/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.outlineType = 'rounded-white';
	hs.fadeInOut = true;
	hs.dimmingOpacity = 0.75;

	// define the restraining box
	hs.useBox = true;
	hs.width = 640;
	hs.height = 480;

	// Add the controlbar
	hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: 1,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});
</script>

    <!--  End Galley  -->
    
        	<!-- Start Side Menu HEAD section -->
	<link rel="stylesheet" type="text/css" href="assets/styles/sd-menu-ar.css" />
	<script type="text/javascript" src="assets/scripts/sd-menu.js"></script>
	<!-- End Side Menu HEAD section --> 
    
    
 	<link rel="stylesheet" href="assets/styles/jquery.ui.all.css">
<!--	<script src="../assets/scripts/jquery-1.10.2.js"></script>
	<script src="../assets/scripts/jquery.ui.core.js"></script>--> 
	<script src="assets/scripts/jquery.ui.widget.js"></script>
	<script src="assets/scripts/jquery.ui.datepicker.js"></script>
	<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	</script>   
</head>
<body class="">
<div class="wrapper row1">
  <header id="header" class="full_width clear">

    <hgroup>
        <div id="header-contact" style="direction:rtl;">
      <ul class="list none">
        <li><!--span class="icon-phone" ></span>--><img src="assets/images/hotline.png" style="width:8%;" /><strong>اتصل الأن &nbsp; &nbsp;<a class="shrt-nr" href="tel:+216976">16976</a></strong></li>
       <!--         <li>Email Us: <a href="mailto:info@interafricaegypt.com">info@interafricaegypt.com</a></li>-->
      </ul>
    </div>
    </hgroup>
 <div style="float:right;"><a href="index.html"><img src="assets/images/logo.png" /></a></div>
  </header>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row2">

     <div class="navbar navbar-default navbar-static-top" role="navigation">
     
      <div class="container-bootstrap">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">الصفحة الرئيسية</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
<!--           <li class="active"><a href="#">About Us</a></li>-->
           <li><a href="aboutus-ar.php">عن الشركة</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">السياحة الداخلية<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="main-section-ar.php">معلومات سياحية</a></li>
                <li><a href="programs-main-ar.php">برامج السياحة الداخلية</a></li>
                <li><a href="phto-gallery-main-ar.php">مكتبة الصور</a></li>
                <li><a href="vid-gallery-main-ar.php">مكتبة الفيديو</a></li>
                <li><a href="#">صمم رحلتك</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">سياحة خارجية<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="main-section-ar.php">معلومات سياحية</a></li>
                <li><a href="programs-main-ar.php">برامج السياحة الداخلية</a></li>
                <li><a href="phto-gallery-main-ar.php">مكتبة الصور</a></li>
                <li><a href="vid-gallery-main-ar.php">مكتبة الفيديو</a></li>
                <li><a href="#">صمم رحلتك</a></li>
              </ul>
            </li>			
            <li class="dropdown">
              <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">الحج والعمرة<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header" style="font-size:1.5em;">الحج</li>
                <li><a href="internal-nomenu-ar.php">الأوراق المطلوبة</a></li>
                <li><a href="haj-program-main-ar.php">برامج الحج</a></li>
                <li><a href="phto-gallery-main-ar.php">مكتبة الصور</a></li>
                <li><a href="vid-gallery-main-ar.php">مكتبة الفيديو</a></li>
                <li class="divider"></li>
                <li class="dropdown-header" style="font-size:1.5em;">العمرة</li>				
                <li><a href="internal-nomenu-ar.php">الأوراق المطلوبة</a></li>
                <li><a href="haj-program-main-ar.php">برامج العمرة</a></li>
                <li><a href="phto-gallery-main-ar.php">مكتبة الصور</a></li>
                <li><a href="vid-gallery-main-ar.php">مكتبة الفيديو</a></li>
                </ul>
                </li>

           <li><a href="ticketing-ar.php">حجز تذاكر طيران</a></li>
            <li><a href="main-section-ar.php">حجز فنادق</a></li>
            <li><a href="#">النقل السياحي</a></li>					
            <li><a href="contact-ar.php">اتصل بنا</a></li>
            <li><a href="index-eng.php">English</a></li>
          </ul>
        </div>
</div>
<!-- content -->
<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <!-- InstanceBeginEditable name="EditRegion" -->     
   <figure class="post-image" style="background-color:#FFF;padding:10px;box-shadow:0 1px 2px;"><img alt="" src="assets/images/htl-rsrve-banner.jpg"></figure>   
    <div id="contact" class="clear" style="background: #fff;padding: 20px;box-shadow: 0 1px 2px;">
        <h1>حجز الفنادق</h1>
        <div id="respond" style="direction:rtl;width:85%;margin:0 auto;">
           <form action="#" method="post">

<div class="big-div">
<div class="float">
<label>الإسم : </label>
<br/>
<input type="text">
</div>
<div class="float">
<label>الجنسية : </label>
<br/>
<input type="text">
</div>


<div class="float">
<label>التليفون : </label>
<br/>
<input type="text">
</div>
<div class="float">
<label>البريد الإلكتروني : </label>
<br/>
<input type="text">
</div>
</div>


<div class="big-div">
<div class="float">
<label>تاريخ الوصول : </label>
<br/>
<input type="text">
</div>
<div class="float">
<label>تاريخ المغادرة : </label>
<br/>
<input type="text">
</div>
<div class="float">
<label>عدد الليالي : </label>
<br/>
<input type="text" class="small-inpt" value="0">
</div>
</div>


<div class="big-div">
<div class="float">
<label>اسم الفندق : </label>
<br/>
<input type="text">
</div>

<div class="float">
<label>نظام الإقامة : </label>
<br/>
<select>  
<option value="0" selected="selected">أي منها</option>
<option value="nin">إقامة فقط</option>
<option value="bri">إفطار</option>
<option value="hbi">نصف إقامة</option>
<option value="fbi">إقامة كاملة</option>
<option value="tin">إقامة شاملة</option>
</select>
</div>
</div>

<br/>
<h3 style="text-decoration:underline;">عدد الغرف : </h3>
<div class="big-div">
<div class="float">
<label>مفردة :&nbsp;</label>
<input type="text" value="0" class="small-inpt">
</div>
<div class="float">
<label>مزدوجة :&nbsp;</label>
<input type="text" value="0" class="small-inpt">
</div>
<div class="float">
<label>ثلاثية :&nbsp;</label>
<input type="text" value="0" class="small-inpt">
</div>
</div>
<br/>
<h3 style="text-decoration:underline;">عدد الأفراد : </h3>
<div class="big-div">
<div class="float">
<label>البالغين :&nbsp;</label>
<select>  
<option value="1" selected="selected">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option> 
</select>
</div>
<div class="float">
<label>الأطفال :&nbsp;</label>
<select>  
<option value="1" selected="selected">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>
</div>
</div>

<div class="big-div">
<div class="float">
<label>طريقة السداد المناسبة : </label>
<br/>
<select style="width:150px;">  
<option selected="selected" value="0">تحصيل في مقر الشركة</option>
<option value="1">تحصيل فى مقر العميل</option>
</select>
</div>
</div>
<div class="big-div">
<div class="float">
<label>ملاحظات : </label>
<br/>
<textarea cols="45" rows="7"></textarea>
</div>
</div>
 <div class="big-div" align="center">
      
             
              <input type="reset" value="إعادة">
               &nbsp;
            <input type="submit" value="ارسل">
                      </div>  
          </form>
<br/><br/>
        </div>
    </div>    
    
    <!-- InstanceEndEditable --><!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- Footer -->
<div class="wrapper row2">
  <div id="footer" class="clear">

<div class="one_quarter first">
      <h2 class="footer_title">كن علي اتصال بنا</h2>
      <div class="tweet-container" style="background:#EFEFEF;">
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com/facebook%2FFacebook&amp;width=120&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:290px;" allowTransparency="true"></iframe>
      </div>
    </div>

    
    <div class="one_quarter">
      <h2 class="footer_title">إتصل بنا</h2>
      <form class="rnd5" action="#" method="post">
        <div class="form-input clear">
          <label for="ft_author">الإسم<span class="required">*</span><br>
            <input type="text" name="ft_author" id="ft_author" value="" size="22">
          </label>
          <label for="ft_email">البريد الإلكتروني<span class="required">*</span><br>
            <input type="text" name="ft_email" id="ft_email" value="" size="22">
          </label>
        </div>
        <div class="form-message">
          <textarea name="ft_message" id="ft_message" cols="25" rows="10"></textarea>
        </div>
        <p>
          <input type="reset" value="اعادة" class="button small grey">
          &nbsp;
           <input type="submit" value="ارسل" class="button small orange">
        </p>
      </form>
    </div>
  
 <div class="one_quarter">
      <h2 class="footer_title">مكتبة الصور</h2>
      <ul id="ft_gallery" class="nospace spacing clear">
        <li class="one_third first"><a href="#"><img src="assets/images/demo/80x80.gif" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="assets/images/demo/80x80.gif" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="assets/images/demo/80x80.gif" alt=""></a></li>
        <li class="one_third first"><a href="#"><img src="assets/images/demo/80x80.gif" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="assets/images/demo/80x80.gif" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="assets/images/demo/80x80.gif" alt=""></a></li>
        <li class="one_third first"><a href="#"><img src="assets/images/demo/80x80.gif" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="assets/images/demo/80x80.gif" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="assets/images/demo/80x80.gif" alt=""></a></li>
      </ul>
    </div>   
    

    <div class="one_quarter">
      <h2 class="footer_title">روابط سريعة</h2>
      <nav class="footer_nav">
        <ul class="nospace">
          <li><a href="#">الصفحة الرئيسية</a></li>
          <li><a href="#">برامج السياحة الداخلية</a></li>
          <li><a href="#">برامج السياحة الخارجية</a></li>
          <li><a href="#">برامج العمرة</a></li>
          <li><a href="#">برامج الحج</a></li>
          <li><a href="#">حجز فنادق</a></li>
          <li><a href="#">حجز تذاكر طيران</a></li>
        </ul>
      </nav>
    </div>
    
  </div>
</div>
<div class="wrapper row4">
  <div id="copyright" class="clear">
    <div class="copyright_p">جميع الحقوق محفوظة &copy; 2014 <a href="#" style="color:#F95355;">انتر افريكا للسياحة</a></div>
            <div class="social_float"><a href="http://www.facebook.com/interafricaegypt" target="_blank"><img class="social-icons" src="assets/images/facebook-icon.png" /></a><a href="http://www.twitter.com/interafricaegypt" target="_blank"><img class="social-icons" src="assets/images/twitter-icon.png" /></a><a href="http://www.youtube.com/interafricaegypt" target="_blank"><img class="social-icons" src="assets/images/youtube-icon.png" /></a></div>

      <div class="itmaven">تم تطوير الموقع بواسطة: <a href="http://itmaven.net" target="_blank" style="text-decoration:underline;">IT Maven Egypt</a></div>
   </div>
</div>

<!-- Start Bootstrap menu scripts  -->

  <!-- latest jQuery, Boostrap JS and hover dropdown plugin -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="assets/scripts/bootstrap-hover-dropdown.js"></script>
  <script>
      // very simple to use!
      $(document).ready(function () {
          $('.js-activated').dropdownHover().dropdown();
      });
  </script>
  
  <!-- End Bootstrap menu scripts  -->
      
  <!-- start Back to top script  -->
  
   </script>
<a href="#" class="back-to-top">العودة للأعلي</a>
    
        <script>
            jQuery(document).ready(function () {
                var offset = 220;
                var duration = 500;
                jQuery(window).scroll(function () {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery('.back-to-top').fadeIn(duration);
                    } else {
                        jQuery('.back-to-top').fadeOut(duration);
                    }
                });

                jQuery('.back-to-top').click(function (event) {
                    event.preventDefault();
                    jQuery('html, body').animate({ scrollTop: 0 }, duration);
                    return false;
                })
            });
		</script>
        
  <!-- end Back to top script  -->
</body>
<!-- InstanceEnd --></html>