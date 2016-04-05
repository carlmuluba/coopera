
    <header class='main-header'>
      <div class="container parallax" gumby-parallax="0.5">
        <div class="inner">
        <div class="row mainheader-box">
<h1>fresh limonade?</h1>
<p class="centered eight columns">add meaning to your projects</p>
</div>
</div>
        </div>
        </header>
		<div style="top: 0px;" class="navbar unfixed" gumby-fixed="top" id="nav">
			<div class="row">
				<a class="toggle" gumby-trigger="#nav > .row > ul" href="#"><i class="icon-menu"></i></a>
				<h1 class="four columns logo">
					<a href="/coopera">
              <?= $this->Html->image('assets/150xlogoLettering.png', array('style'=>'width:150px; top:-15px;', 'gumby-retina'=>"", 'alt'=>'coopera')) ?>
					</a>
				</h1>
				<ul class="eight columns">
					<li>
            <a href="#">Browse <i class="icon-down-dir"> </i></a>
						<div class="dropdown">
            <ul>
              <li><a href="./projects"><i class="icon-eye"> </i>  All Works</a></li>
             <li><a href="./categories"><i class="icon-star"> </i>  By Categories</a></li>
            </ul>
    			</div>
          </li>
					<li>
						<a href="#">Projects <i class="icon-down-dir"> </i></a>
						<div class="dropdown">
							<ul>
                <li><a href="./"><i class="icon-briefcase"> </i>  Projects</a></li>
                <li><a href="./addproject"><i class="icon-plus"> </i>  New Project</a></li>
							</ul>
						</div>
					</li>
					<li class="field"><a href="./login"><i class="icon-login"> </i>  Log In</a></li>
				</ul>
			</div>
		</div>
