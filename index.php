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
<h2>The value of a college degree: here’s what it’s really worth</h2>
</a>
</li>

<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>White girls on Langdon Street really just can’t right now</h2>
<img src="white_girl.jpg">

</a>

</li>

<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>In shocking move, student writes second post on study abroad blog</h2>

</a>
</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Kanye West’s ‘Bound 2’ to replace ‘On Wisconsin’</h2>
</a>
</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Referendum results show Dane County totally over weed</h2>
</a>

</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Student watching porn in Gordon Commons has a really good excuse</h2>

</a>

</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Spring block party not ‘anti-Revelry,’ student organizers say </h2>

</a>

</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Chancellor Blank one of rapper Waka Flocka Flame’s biggest fans</h2>

<img src="waka_blank.jpg">
</a>

</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Jon Huntsman saw UW students’ angry commencement tweets, wept bitterly</h2>
<img src="john_huntsman.jpg">
</a>

</li>
<li class="cf">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Poll finds half of state voters likely to vote for the other candidate that isn’t Walker </h2>

</a>

</li>


</ul>

</div>
<div class="opinion">

<h1>Dirty Bird Opinion</h1>
<hr>
<ul class="opinion-list cf">
<li><a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Nation captivated by college newspaper writer’s opinions on Ukraine</h2>
<img src="plugin.png">
</a></li>
<li>
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Letter to the Editor: Alcohol consumption suspected in Sellery Hall </h2>
<img src="celery.jpg">
</a>
</li>
</ul>

</div>
<div class="sports">
<h1>Sports?</h1>
<hr>
<ul class="story-list sports-list cf">
<li style="background: #F6CECE;">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Breaking Bucky: UW Athletics revealed as front for international drug ring</h2>
<img src="BreakingBucky.jpg">
</a>
</li>

<li>
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Analysis: team wins game after scoring more points than other team</h2>
<img src="doge.jpg">
</a>

</li>

<li>
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Wisconsin to play outdoor game in May on (hopefully) frozen Lake Mendota</h2>
<img src="lake.jpg">
</a>
</li>
<li style="background: #F6CECE;">
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>Athletes accused of not constantly putting sports over graduation</h2>

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
<h2>Steamy, titillating advice from a senior betch</h2>
</a>
</li>

<li>
<a href="index.php?id=<?php echo $id; $id++; ?>">
<h2>I took Adderall and went to College Library</h2>

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