<?php include_once('includes/templates/header.php') ?>

<section class="bg-block">
	<a href="https://github.com/RandomShapes/numberticker.js" class="fork-me-silly"></a>
	<section class="content-block row" id="title">
		<h1>NumberTicker.js</h1>
		<h3>A Very Tiny Number Ticker Script</h3>
			<a href="http://numberticker.com/dist/numberticker.zip" class="button">Download The Script!<br />
				<small>V0.1 < 1Kb minimized</small>
			</a>
			<a href="https://github.com/RandomShapes/numberticker.js" class="button">Or Checkout the Source!<br />
				<small>Line by Line Comments!</small>
			</a><br />
		<div class="label">Note: Dependant on jQuery!</div>
	</section>
</section>
<section class="bg-block">
	<section class="content-block row" id="what-demo">

		<section class="small-4 columns" id="what">
			<h3>What Does This CraAaAzy Code Do?</h3>
			<div class="row">
				<p>This script will take your boring static numbers and count them up to a specified target, or you can opt to have random changes! It's perfect for Stats, Scores, Money Counters, and anywhere else you want to spice up numbers!</p><br /><div class="bonus">Bonus: It's dead simple, and easy to customize.</div>
			</div>
			<div class="button" id="demo-1">Try it Out</div>
		</section>

		<section class="small-8 columns" id="example">
			<div class="panel">
				<h3>What's the Diameter of the Earth?</h3>
				<section class="row">
					<div class="small-4 columns">
						<h5>Kilometers</h5>
						<h3 class="number-ticker">12742</h3>
					</div>
					<div class="small-4 columns">
						<h5>Miles</h5>
						<h3 class="number-ticker">7918</h3>
					</div>
					<div class="small-4 columns">
						<h5>Yards</h5>
						<h3 class="number-ticker" data-nt-initial="1000000">13934821</h3>
					</div>
				</section>
				<h3>How Many Planets in the Solar System?</h3>
				<section class="row">
					<div class="small-6 columns">
						<h5>Without Pluto</h5>
						<h3 class="number-ticker" data-nt-type="random">8</h3>
					</div>
					<div class="small-6 columns">
						<h5>With Pluto</h5>
						<h3 class="number-ticker" data-nt-type="random">9</h3>
					</div>
				</section>
			</div>
		</section>

	</section>
</section>
<section class="bg-block">
	<section class="content-block row" id="how-to">
		<h3>How to Use it?</h3>
		<h5>Basic usage</h5>

		<pre class="line-numbers small-10 columns"><code class="language-markup">
&lt;!-- Just add a simple class to your element, 
and put the value you want inside-->
&lt;p class="number-ticker">500&lt;/p>

&lt;!-- Then call the start method!-->
&lt;script>numberTicker.start();&lt;/script>
		</code></pre>
		<div class="nt-demo-1 small-2 columns">
			<p class="number-ticker-2">500</p>
			<div class="button tiny" id="demo-2">Give'r a Try</div>
		</div>

		<pre class="line-numbers small-10 columns"><code class="language-markup">
&lt;!-- You can change the ticker to randomize
(which is great for small numbers) by adding an attribute-->
&lt;p class="number-ticker" data-nt-type="random">10&lt;/p>

&lt;!-- Then call the start method!-->
&lt;script>numberTicker.start();&lt;/script>
		</code></pre>
		<div class="nt-demo-2 small-2 columns">
			<p class="number-ticker-3" data-nt-type="random">10</p>
			<div class="button tiny" id="demo-3">Eyo Time</div>
		</div>
		<p>Note for small numbers: if the iterations value is higher than the target, it will automatically adjust the iterations value to match the target. You want that, believe me.</p>

		<h5>More Basic Customization</h5>

		<pre class="line-numbers small-10 columns"><code class="language-markup">
&lt;!-- You can set the initial number to count from by adding
an attribute-->
&lt;p class="number-ticker" data-nt-initial="300">500&lt;/p>

&lt;!-- The same goes for the target, if you want to overide the target
pulling from the HTML content-->
&lt;p class="number-ticker" data-nt-target="3000">500&lt;/p>

&lt;!-- Then call the start method!-->
&lt;script>numberTicker.start();&lt;/script>
		</code></pre>
		<div class="nt-demo-3 small-2 columns">
			<p class="number-ticker-4" data-nt-initial="300">500</p>
			<div class="button tiny" id="demo-4">Initial</div>
			<p class="number-ticker-5" data-nt-target="30000">500</p>
			<div class="button tiny" id="demo-5">Target</div>
		</div>

		<h5>A Tad More Advanced...</h5>

		<pre class="line-numbers small-10 columns"><code class="language-markup">
&lt;p class="number-ticker">30000&lt;/p>

&lt;!-- You can change the way it animates with two properties-->
&lt;script>
	//The first property is how many iterations will occur
	numberTicker.iterations = 30;
	//The second property is how long each iteration takes in ms
	numberTicker.iterationTime = 100;
	//Then run the method
	numberTicker.start();
&lt;/script>
		</code></pre>
		<div class="nt-demo-4 small-2 columns">
			<p class="number-ticker-6">30000</p>
			<div class="button tiny" id="demo-6">You're Having Fun</div>
		</div>

		<h5>Want Discrete Control Over a Ticker? Easy.</h5>

		<pre class="line-numbers"><code class="language-javascript">
//Just make a new instance of the object, with the argument being
//the class you want to target
numberTicker2 = new NumberTicker(".number-ticker-2");
numberTicker2.start();

//There's no demo here, because it's been done throughout the entire site!
		</code></pre>

	</section>
</section>


<?php include_once('includes/templates/footer.php') ?>