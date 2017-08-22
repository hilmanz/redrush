<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <?php include ("meta.php"); ?>
</head>

<body style="overflow: auto;" data-rendering="true" onload="document.getElementById('loading').style.display = 'none'; document.body.style.overflow = 'auto'; setrightheight();">
    <div style="display: none;" id="loading">
      <div id="loadingText">
        <h1>Loading</h1>
        <p>"Awfully sorry about this"</p>
      </div>
      <!-- END #loadingtext --> 
    </div>
    <!-- END #loading -->
 <?php include ("header.php"); ?>
<div id="outer">
  <div style="height: 10000px;" id="container">
    <div style="opacity: 1;" id="intro">
      	<h1>this is<br />
            what you<br />
            signed up for</h1>
   			<img id="mobil" src="img/mobil.png" />
    </div>
    <!-- END #intro --> 
    
    <div style="position: fixed; top: 350px;" id="titles">
      <div style="opacity: 0;" id="tmlLogo"><img src="file/tmlLogo.png" alt="thismanslife" height="59" width="59"></div>
      <div style="opacity: 0; font-size: 38.0533px;" id="title">
        <div style="width: 277px;" id="titleText"> <img src="img/img_2.png" />
          <div class="clear"></div>
        </div>
      </div>
      <!-- END #title -->
      
      <div style="font-size: 7.54833px; opacity: 0.043;" id="subTitle">
        <div style="width: 29.0312px;" id="subTitleText"> <span>N</span> <span>e</span> <span>w</span> <span>&nbsp;</span> <span>S</span> <span>t</span> <span>a</span> <span>r</span> <span>t</span>
          <div class="clear"></div>
        </div>
      </div>
      <!-- END #subTitle --> 
      
    </div>
    <!-- END #titles -->>
    
    <div style="position: fixed; top: 0px;" id="branches">
      <div id="branchesPic"></div>
      <div id="branchesPicBlur"></div>
    </div>
    <!-- END #branches -->
    
    <div id="birds">
      <div style="position: fixed; top: 1050px;" id="birdsPic1"></div>
      <div style="position: fixed; top: 1150px;" id="birdsPic2"></div>
      <div style="position: fixed; top: 1309.2px;" id="birdsPic3"></div>
      <div style="position: fixed; top: 1593.9px;" id="birdsPic4"></div>
    </div>
    <!-- END #birds -->
    
    <div style="position: fixed; top: 600px; opacity: 0;" id="skyline">
      <div id="skylinePic"></div>
    </div>
    <!-- END #skyline -->
    
    <div style="position: fixed; top: 2428.6px; opacity: 0;" id="bench">
      <div id="groundPic">
        <div id="benchPic">
          <div style="opacity: 0;" id="rootsPic"> </div>
        </div>
      </div>
    </div>
    <!-- END #bench -->
    
    <div id="ground"> 
      <!--
<div id="mist">
<div id="testvalue">0</div>
</div>
--> 
    </div>
    <!-- END #ground -->
    
    <div id="end">
      <div style="margin-top: 99999px; display: block; opacity: 0.276;" id="panel"> <a href="http://twitter.com/thismanslife" target="_blank" id="twitter"><img src="file/twitter.png" alt="Follow @thismanslife" border="0" height="103" width="150"></a>
        <p>Playful experimentation,  also known as fumbling in the dark.
 I hacked this together  in stolen moments,  based on ideas conceived 
while drinking saké cocktails and musing about redesigning <a href="http://www.thismanslife.co.uk/">thismanslife</a>. </p>
        <p>View-source of course, but  don't judge the mess I’m  rusty. Borrow,  don’t steal.
          Hat-tip to <a href="http://twitter.com/jonraasch/" target="_blank">Jon Raasch</a> for the excellent <a href="http://jonraasch.com/blog/scrolling-parallax-jquery-plugin" target="_blank"> Parallax jQuery plugin</a></p>
        <p>Thanks for viewing, <a href="http://www.thismanslife.co.uk/who">James Mellers</a></p>
        <p id="tweetbutton"><iframe title="Twitter Tweet Button" style="width: 55px; height: 20px;" class="twitter-share-button twitter-count-none" src="file/tweet_button.html" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
      </div>
      <!-- END #panel --> 
    </div>
    <!-- END #end -->
    
    <div style="position: fixed; top: 8450px;" id="feathersAbove"></div>
    <div style="position: fixed; top: 4300px;" id="feathersBelow"></div>
  </div>
  <!-- END #container --> 
</div>
<!-- END #outer --> 

 <?php include ("footer.php"); ?>


</body>
</html>