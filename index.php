<?php

include('header.php');



if(!isset($_GET['id'])) {


$id = 1;
?>

<div id="main-content" class="cf">
<div class="news cf">
<div id="DIV-DIV">

<span style="color:#fff;">TODAY'S SPONSOR:</span>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2162610591110839";
/* verticle.banner.300x600 */
google_ad_slot = "8444431319";
google_ad_width = 300;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</div>

<h1>Top News</h1>
<ul class="story-list">
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>ASM overrun by reptilian shape-shifters</h2>
</a>
</li>

<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Berquam chooses Slayer to headline Revelry </h2>

</a>

</li>

<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Ward new Adidas spokesperson</h2>

<img src="waka_blank.jpg">
</a>
</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>PETA protesters take break, order McDonald's Big Macs</h2>
</a>
</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Soglin to host house party on Mifflin Street on May 4</h2>
<img src="white_girl.jpg">
</a>

</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Soglin to host house party on Mifflin Street on May 4</h2>

</a>

</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Soglin to host house party on Mifflin Street on May 4</h2>

</a>

</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Soglin to host house party on Mifflin Street on May 4</h2>

</a>

</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Soglin to host house party on Mifflin Street on May 4</h2>
<img src="john_huntsman.jpg">
</a>

</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Soglin to host house party on Mifflin Street on May 4</h2>

</a>

</li>


</ul>

</div>
<div class="opinion">

<h1>Dirty Bird Opinion</h1>
<hr>
<ul class="opinion-list cf">
<li><a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Nation captivated by student’s opinions on Ukraine</h2>
<img src="plugin.png">
</a></li>
<li>
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Alcohol consumption suspected in Sellery Hall-LTE</h2>
<img src="celery.jpg">
</a>
</li>
</ul>
<div class="BLANK">
<h3>Our thoughts on UW Chancellor Becky Blank’s first term so far</h3>
<img src="bird-eye.png">
</div>
</div>
<div class="sports">
<h1>Sports?</h1>
<hr>
<ul class="story-list sports-list cf">
<li style="background: #F6CECE;">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>ASM overrun by reptilian shape-shifters</h2>
</a>
</li>

<li>
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Berquam chooses Slayer to headline Revelry </h2>
<img src="doge.jpg">
</a>

</li>

<li>
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Ward new Adidas spokesperson</h2>
<img src="lake.jpg">
</a>
</li>
<li style="background: #F6CECE;">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>PETA protesters take break, order McDonald's Big Macs</h2>

</a>
</li>

</ul>

</div>
<div class="arts cf">
<h1 style="text-align: left">ArtsEtc.</h1>
<hr>
<ul class="story-list arts-list cf">
<li>
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>ASM overrun by reptilian shape-shifters</h2>
</a>
</li>

<li>
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Berquam chooses Slayer to headline Revelry </h2>

</a>

</li>
</ul>
<div class="caption">
<h2>CAPTION THIS!</h2>
<img src="caption_this.jpg">
</div>


</div>
</div>

<div style="clear:both"></div>

<?php
} else {
	echo '<div class="cf" style="background: white; padding: 12px 20px;">';
	include('single.php');
	echo '</div>';
}


include('footer.php');

?>