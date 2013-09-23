<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "TESTIMONIALS" ;
  	include('baseHeader.html');
  	require_once('resources/dbconfig.php');
?>
<body>


<?php
  include('baseNavigation.php');
?>

<div class='container testimonialentityblock'>

	<div class="row">

		<div class="span4">
			<div class="testimonialentity">
				<div class="testimonialentityhead">
					<div class="testimonialentitydate">
						<p>28 July 2013</p>
					</div>
					<div class="testimonialentityauthorblock">
							<h3>V.J. Antony</h3>
							<span class="testimonialauthorintro">Retired AGM, Canara Bank<br/>Bangalore</span>
					</div>
					<div class="clearAll"></div>
				</div>
				<div class="testimonialentitybody">
					<p>
						Yoga and the Asanas were totally new for me. It was an excellent experience. Will be excellent to take it forward as a daily exercise.
					</p>
					<p>
						The other tools and exercises for de-stressing and visualization were also excellent, as we can bring in a lot of corrections in our life. Yoga and De-stress tools were energising.
					</p>
				</div>
			</div>
			<div class="testimonialentity">
				<div class="testimonialentityhead">
					<div class="testimonialentitydate">
						<p>28 July 2013</p>
					</div>
					<div class="testimonialentityauthorblock">
							<h3>Ronila Cherian Momin</h3>
							<span class="testimonialauthorintro">Assistant Teacher, Advaith Foundation<br/>Bangalore</span>
					</div>
					<div class="clearAll"></div>
				</div>
				<div class="testimonialentitybody">
					<p>
						I liked the relaxation Asanas most, and the exercise on the 80th Birthday Celebration.
					</p>
					<p>
						I suggest that this kind of workshop must be conducted more often. I would like to recommend to all of my friends and colleagues to participate in this kind of workshop.
					</p>
				</div>
			</div>
			<div class="testimonialentity">
				<div class="testimonialentityhead">
					<div class="testimonialentitydate">
						<p>24 March 2013</p>
					</div>
					<div class="testimonialentityauthorblock">
							<h3>Laila Jacob</h3>
							<span class="testimonialauthorintro">Home maker<br/>Bangalore</span>
					</div>
					<div class="clearAll"></div>
				</div>
				<div class="testimonialentitybody">
					<p>
						Informal friendly atmosphere and individual attention.
					</p>
				</div>
			</div>
		</div>

		<div class="span4">
			<div class="testimonialentity">
				<div class="testimonialentityhead">
					<div class="testimonialentitydate">
						<p>28 July 2013</p>
					</div>
					<div class="testimonialentityauthorblock">
							<h3>Prarthana Unkalkar Kaul</h3>
							<span class="testimonialauthorintro">Regional Head – East and South iVolunteer<br/>Bangalore</span>
					</div>
					<div class="clearAll"></div>
				</div>
				<div class="testimonialentitybody">
					<p>
						Liked everything. Am going back rechraged and look forward to give my best. Look forward for more awareness of this wonderful workshop, so it reaches various corners of the city.
					</p>
					<p>
						Liked the concept of Balance with focus on goals, and the Yoga sessions.
					</p>
				</div>
			</div>
			<div class="testimonialentity">
				<div class="testimonialentityhead">
					<div class="testimonialentitydate">
						<p>28 July 2013</p>
					</div>
					<div class="testimonialentityauthorblock">
							<h3>Sandhya Rani K</h3>
							<span class="testimonialauthorintro">Asst. Boarding in-charge, Advaith Foundation<br/>Bangalore</span>
					</div>
					<div class="clearAll"></div>
				</div>
				<div class="testimonialentitybody">
					<p>
						I liked the Yoga sessions, Circle of Life, and all the Questionnaires at the Workshop, and activities. It is an eye opener workshop.
					</p>
					<p>
						Key learnings include:
						<ul>
							<li>Self realization</li>
							<li>Stress management techniques</li>
							<li>Strategies of life circle</li>
						</ul>
					</p>
				</div>
			</div>
		</div>

		<div class="span4">
			<div class="testimonialentity">
				<div class="testimonialentityhead">
					<div class="testimonialentitydate">
						<p>28 July 2013</p>
					</div>
					<div class="testimonialentityauthorblock">
							<h3>Prateek Kaul</h3>
							<span class="testimonialauthorintro">Business Analyst, IT industry<br/>Bangalore</span>
					</div>
					<div class="clearAll"></div>
				</div>
				<div class="testimonialentitybody">
					<p>
						Keep the great work going. I loved both the concept (message) and delivery. Liked the combination of Life skills with Yoga.
					</p>
				</div>
			</div>
			<div class="testimonialentity">
				<div class="testimonialentityhead">
					<div class="testimonialentitydate">
						<p>24 March 2013</p>
					</div>
					<div class="testimonialentityauthorblock">
							<h3>S. S. Lakshmi</h3>
							<span class="testimonialauthorintro">Manager, BPO Company<br/>Bangalore</span>
					</div>
					<div class="clearAll"></div>
				</div>
				<div class="testimonialentitybody">
					<p>
						Liked the techniques shared in the workshop, productive discussions, self analysis.
					</p>
					<p>
						Key take away: 
						<ul>
							<li>Positive attitude</li>
							<li>Affirmations</li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div><!-- row -->
</div><!-- container -->

<?php
	include('footer.php');
?>

</body>
</html>



