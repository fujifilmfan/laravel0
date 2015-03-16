@extends('layouts.sidebar')
@section('content')
	<div class="entry">
		<div class="entry-content">
			<br>
			<br>
			<p>Hi, welcome to my personal website!  This page is currently intended to serve several purposes: it is part demo page
				(showing responsive web design), part portal (check out the as-yet-unfinished
				<a href="bottles">beer wall</a>), and partly autobiographical. Enjoy!</p>
		</div>
	</div>
	<div class="entry">
		<div class="entry-header">
			<h2>Work</h2>
		</div>
		<div class="entry-content">
			<p>I teach Chemistry, Physics, AP Chemistry, and AP Environmental Science at 
				<a href="http://www.villagechristian.org/">Village Christian School</a> in Sun Valley, CA. I maintain a mostly informational website for my students: 
				<a href="https://kleinsclasses.wikispaces.com/">Mr. Klein's Classes</a>. I also advise the Engineering Team, which finished 8th overall
				at the JPL Invention Challenge on December 5th.  
				You can read about it <a href="http://www.jpl.nasa.gov/events/inventionchallenge/2014/index.cfm">here</a> (pictures to follow shortly, I expect)
				 or <a href="http://www.villagechristian.org/news-items/engineering-club-competes-at-jpl.aspx">here</a>.</p>
		</div>
	</div>
	<div class="entry">
		<div class="entry-header">
			<h2>Play</h2>
		</div>
		<div class="entry-content">
			<p>Click each row to see pictures from that trip.</p>
			<div class="trips">

				<div class="trip active-photo">
					<div class="description row">
						<div class="col-sm-3">
							<p class="date">
								Aug-Sept 2014
							</p>
						</div>
						<div class="col-sm-6">
							<p class="location">
								Bishop Pass, Sierra Nevada, CA
							</p>
						</div>
						<div class="col-sm-3">
							<p class="days">
								3 days
							</p>
						</div>
					</div>
					<div class="photo row" style="">
						<div class="col-sm-3 arrow-prev">
							<p>&lt;</p>
						</div>
						<div class="col-sm-6">
							<div class="slide active-slide">
								<img src="/resources/slides/Bishop_Pass-8-2014/P1110181.jpg">
								<p class="caption">Second backpacking trip of the summer, covering fewer miles than on the first trip so that there was more time to play and explore around the lakes</p>
							</div>
							<div class="slide">
								<img src="/resources/slides/Bishop_Pass-8-2014/P1110200.jpg">
								<p class="caption">Golden-mantled ground squirrel, my dad tells me</p>
							</div>
							<div class="slide">
								<img src="/resources/slides/Bishop_Pass-8-2014/P1110236.jpg">	
								<p class="caption">Flowers hanging to rock wall near creek</p>								
							</div>
							<div class="slide">
								<img src="/resources/slides/Bishop_Pass-8-2014/P1110255.jpg">
								<p class="caption">Mt. Agassiz</p>					
							</div>
							<div class="slide">
								<img src="/resources/slides/Bishop_Pass-8-2014/P1110258.jpg">
								<p class="caption">Playing battleship in the tent</p>
							</div>
							<div class="slide">
								<img src="/resources/slides/Bishop_Pass-8-2014/P1110268.jpg">
								<p class="caption">Sunrise</p>
							</div>
						</div>
						<div class="col-sm-3 arrow-next">
							<p>&gt;</p>
						</div>
					</div>
				</div>

				<div class="trip">
					<div class="description row">
						<div class="col-sm-3">
							<p class="date">
								July-Aug 2014
							</p>
						</div>
						<div class="col-sm-6">
							<p class="location">
								Big Bear, CA
							</p>
						</div>
						<div class="col-sm-3">
							<p class="days">
								10 days
							</p>
						</div>
					</div>
					<div class="photo row" style="">
						<div class="col-sm-3 arrow-prev">
							<p>&lt;</p>
						</div>
						<div class="col-sm-6">
							<div class="slide active-slide">
								<img src="/resources/slides/Big_Bear-7-2014/P1100822.jpg">
								<p class="caption">A stormy sunset over the lake</p>
							</div>
							<div class="slide">
								<img src="/resources/slides/Big_Bear-7-2014/P1100829.jpg">
								<p class="caption">I'm a cloud fan</p>
							</div>
							<div class="slide">
								<img src="/resources/slides/Big_Bear-7-2014/P1100888.jpg">
								<p class="caption">Dirty lupine leaves from raindrop-induced mud-splatter</p>									
							</div>
							<div class="slide">
								<img src="/resources/slides/Big_Bear-7-2014/P1100940.jpg">
								<p class="caption">Flowers and rusty mining equipment in Holcomb Valley</p>									
							</div>
							<div class="slide">
								<img src="/resources/slides/Big_Bear-7-2014/P1100810.jpg">
								<p class="caption">This was practically a family reunion, with 10 of us in the cabin for several days</p>								
							</div>
						</div>
						<div class="col-sm-3 arrow-next">
							<p>&gt;</p>
						</div>
					</div>
				</div>

				<div class="trip">
					<div class="description row">
						<div class="col-sm-3">
							<p class="date">
								July 2014
							</p>
						</div>
						<div class="col-sm-6">
							<p class="location">
								Cottonwood Lakes Basin, Sierra Nevada, CA
							</p>
						</div>
						<div class="col-sm-3">
							<p class="days">
								2 days
							</p>
						</div>
					</div>
					<div class="photo row" style="">
						<div class="col-sm-3 arrow-prev">
							<p>&lt;</p>
						</div>
						<div class="col-sm-6">
							<div class="slide active-slide">
								<img src="/resources/slides/Cottonwood_Lakes-7-2014/P1100586.jpg">
								<p class="caption">My son's first backpacking trip! Storm clearing our first day</p>
							</div>
							<div class="slide">
								<img src="/resources/slides/Cottonwood_Lakes-7-2014/P1100612.jpg">
								<p class="caption">He loves the moon, so I took a 6 a.m. picture</p>								
							</div>
							<div class="slide">
								<img src="/resources/slides/Cottonwood_Lakes-7-2014/P1100672.jpg">
								<p class="caption">Sunrise in the Cottonwood Lakes Basin</p>
							</div>
							<div class="slide">
								<img src="/resources/slides/Cottonwood_Lakes-7-2014/P1100691.jpg">
								<p class="caption">We were only out one night but hiked 14 miles, including an ascent of Army Pass</p>
							</div>
						</div>
						<div class="col-sm-3 arrow-next">
							<p>&gt;</p>
						</div>
					</div>
				</div>

				<div class="trip">
					<div class="description row">
						<div class="col-sm-3">
							<p class="date">
								May 2014
							</p>
						</div>
						<div class="col-sm-6">
							<p class="location">
								Big Bear, CA
							</p>
						</div>
						<div class="col-sm-3">
							<p class="days">
								3 days
							</p>
						</div>
					</div>
					<div class="photo row" style="">
						<div class="col-sm-3 arrow-prev">
							<p>&lt;</p>
						</div>
						<div class="col-sm-6">
							<div class="slide active-slide">
								<img src="/resources/slides/Big_Bear-5-2014/P1100212.jpg" title="lupine flowers">
								<p class="caption">I don't take as many pictures in Big Bear as on other trips, perhaps because I go there a few times a year, but I will not usually pass up the opportunity to photograph lupines!</p>
							</div>
							<div class="slide">
								<img src="/resources/slides/Big_Bear-5-2014/P1100215.jpg" title="lupine leaves">
								<p class="caption">I like the leaf shape</p>
							</div>
						</div>
						<div class="col-sm-3 arrow-next">
							<p>&gt;</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="entry">
		<div class="entry-header">
			<h2>Projects</h2>
		</div>
		<div class="entry-content">
			<br>
			<ul>Website (general)
				<li>install the Laravel PHP framework</li>
				<li>add footers</li>
				<li>create config files</li>
			</ul>
			<ul>Beer Wall
				<li>Code</li>
					<ul>
						<li>filter dropdown menus as well as bottle images</li>
						<li>install Laravel</li>
						<li>add more dropdown options</li>
						<li>add custom searches</li>
						<li>make dynamically-generated pages for each bottle selection</li>
					</ul>
				<li>Database</li>
					<ul>
						<li>add bottles</li>
						<li>add outside links</li>
					</ul>
				<li>Photos</li>
					<ul>
						<li>adjust white balance</li>
						<li>crop the background out of the bottles</li>
						<li>make PNGs</li>
						<li>normalize sizes as much as possible</li>
					</ul>
				<li>Test</li>
			</ul>
			<ul>Other projects
				<li>add pages for other projects (like the solar system animation)</li>
			</ul>

		</div>
	</div>
@stop