<div class="wechat">
	<div class="weixin">
		<i class="fa fa-close"></i>
		<img src="assets/front/img/wechat.png" alt="" />
	</div>
</div>
<div class="sidebar">
	<div class="sidebar-left">
		<div class="sidebar-left-top">
			<a href="" class="active"><i class="fa fa-home"></i></a>
			<a href="index.html"><i class="fa fa-user"></i></a>
		</div>
		<div class="sidebar-left-bottom">
			<a href="index.html"><i class="fa fa-smile-o"></i></a>
		</div>
	</div>
	<div class="swipe">
		<ul class="swipe-img">
            <li class="active">
				<img src="assets/front/img/s1.jpg" alt="" />
				<div class="swipe-text">
 					<h1>前端</h1>
					<h2>最爱的方向</h2>
					<h3>希望它可以改变我</h3>
				</div>
			</li>
           	<li>
				<img src="assets/front/img/s1.jpg" alt="" />
				<div class="swipe-text">
 					<h1>幻想</h1>
					<h2>幻想还是要有的</h2>
					<h3>万一实现了呢</h3>
				</div>
			</li>
			<li>
				<img src="assets/front/img/s1.jpg" alt="" />
				<div class="swipe-text">
 					<h1>摇滚</h1>
					<h2>只是幻想</h2>
					<h3>没想到它就实现了</h3>
				</div>
			</li>
		</ul>
		<ul class="swipe-btn">
			<li class="active"></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>
<!-- <div class="rightbar"></div> -->

<div class="hide-bar">
	<div class="hide-bar-top">
		<a href="" class="hide-bar-home active"><i class="fa fa-home"></i></a>
		<a href="index.html" class="hide-bar-me"><i class="fa fa-user"></i></a>
		<a class="hide-bar-search"><i class="fa fa-search"></i></a>
		<a class="hide-bar-tags"><i class="fa fa-tags"></i></a>
	</div>
</div>
<form class="hide-bar-search-box" action="search" method="get">
	<input type="text" name="keyword" placeholder="请在这里搜索" />
	<button type="submit" value=""><i class="fa fa-search"></i></button>
</form>
<ul class="hide-bar-all-tags">
	<?php
		foreach($tags as $tag){
	?>
	<li><a href="tags/<?php echo $tag -> tag_id;?>"><?php echo $tag -> tag_name;?></a></li>
	<?php
		}
	?>
</ul>