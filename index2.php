<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <?php include ("meta.php"); ?>

</head>

<body>
 <?php include ("header.php"); ?>
<div id="intro">
	<div class="story">
    	<div class="float-left">
		<h2>(Almost) Static Background</h2>
        <p>This section has a background that moves slightly slower than the user scrolls. This is achieved by changing the top position of the background for every pixel the page is scrolled.</p>
        </div>
    </div> <!--.story-->
</div> <!--#intro-->

<div id="second">
	<div class="story"><div class="bg"></div>
    	<div class="float-right">
            <h2>Multiple Backgrounds</h2>
            <p>The multiple backgrounds applied to this section are moved in a similar way to the first section -- every time the user scrolls down the page by a pixel, the positions of the backgrounds are changed.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nibh erat, sagittis sit amet congue at, aliquam eu libero. Integer molestie, turpis vel ultrices facilisis, nisi mauris sollicitudin mauris, volutpat elementum enim urna eget odio. Donec egestas aliquet facilisis. Nunc eu nunc eget neque ornare fringilla. Nam vel sodales lectus. Nulla in pellentesque eros. Donec ultricies, enim vitae varius cursus, risus mauris iaculis neque, euismod sollicitudin metus erat vitae sapien. Sed pulvinar.</p>
        </div>
    </div> <!--.story-->
    
</div> <!--#second-->

<div id="third">
	<div class="story">
    	<div class="float-left">
        	<h2>What Happens When JavaScript is Disabled?</h2>
            <p>The user gets a slap! Actually, all that jQuery does is moves the backgrounds relative to the position of the scrollbar. Without it, the backgrounds simply stay put and the user would never know they are missing out on the awesome! CSS2 does a good enough job to still make the effect look cool.</p>
        </div>
    </div> <!--.story-->
</div> <!--#third-->

<div id="fourth">
	<div class="story">
    	<div class="float-left">
            <h2>Empty Containers vs CSS3 Multiple Backgrounds</h2>
            <p><em>This section only works in modern browsers that support multiple backgrounds.</em></p>
            <p>The Nikebetterworld.com demo uses only CSS2 to create it's parallax effect. It uses empty containers in each section to give the impression of multiple backgrounds, which is the method I used for the image of the trainers. It's actually possible to achieve the same effect using CSS3s multiple backgrounds -- as I've done with the bubbles in this section, although, it will only work in modern browsers that support CSS3 multiple backgrounds.</p>
            <p>The use of CSS3 means less markup and jQuery, making the script slightly quicker.</p>
        </div>
    </div> <!--.story-->
</div> <!--#fourth-->

<div id="fifth">
	<div class="story">
		<h2>I Wanna See More Amazing Things!</h2>
            <p>You might like to check out my other demos too:</p>
            <ul>
            	<li><a href="http://www.ianlunn.co.uk/demos/jquery-vertical-parallax-background/" title="Original jQuery Vertical Parallax Demo">Original jQuery Vertical Parallax Demo</a></li>
            	<li><a href="http://www.ianlunn.co.uk/demos/bbc-news-jquery-map/" title="BBC News jQuery Map">BBC News jQuery Map</a></li>
                <li><a href="http://www.ianlunn.co.uk/demos/jquery-media-rich-drop-down-menu/" title="jQuery Media Rich Dropdown Menu">jQuery Media Rich Dropdown Menu</a></li>
                <li><a href="http://www.ianlunn.co.uk/demos/referrer-specific-jquery-greeting/" title="Referrer Specific jQuery Greeting">"Referrer Specific jQuery Greeting</a></li>
            </ul>
            <p>Or go visit the official <a href="http://www.nikebetterworld.com" title="Nike Better World">Nikebetterworld.com</a> website that this demo is based on. It utilises a bunch of other cool technologies too!</p>
            
        <h2>Credits</h2>
        <p>This demo makes use of some scripts and images made by others:</p>
        <ul>
        	<li><a href="http://remysharp.com/2009/01/26/element-in-view-event-plugin/" title="jQuery Element 'in view' Event Plugin">jQuery Element 'in view' Event Plugin</a></li>
        	<li><a href="http://flesler.blogspot.com/2007/10/jqueryscrollto.html" title="jQuery ScrollTo">jQuery ScrollTo</a></li>
            <li><a href="http://www.fontdeck.com/" title="Licensed fonts from FontDeck">Licensed fonts from FontDeck</a></li>
            <li><a href="http://downloads.dvq.co.nz/" title="Background Textures">Wooden and Pyschedlic Background Textures</a></li>
            <li><a href="http://www.sxc.hu/photo/931435" title="Trainers Image">Trainers Image</a></li>
            <li><a href="http://www.sxc.hu/photo/1015485" title="Basketball Image">Basketball Image</a></li>
            <li><a href="http://www.sxc.hu/photo/1107476" title="Sea Background">Sea Background</a></li>
            <li><a href="http://www.sxc.hu/photo/563767" title="Bottles Image">Bottles Image</a></li>
            <li>Bubbles by <a href="http://www.ianlunn.co.uk/" title="Ian Lunn Design">myself</a>, feel free to use them under <a href="http://creativecommons.org/licenses/by-sa/3.0/" title="Lincense">the same license</a> as this demo</li>
        </ul>
        
        <p class="center">P.S - You've scrolled <span id="pixels">0</span> Pixels. Oh Yeah!</p>
    </div> <!--.story-->
</div> <!--#fifth-->

 <?php include ("footer.php"); ?>
</body>
</html>