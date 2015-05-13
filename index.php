<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Killer Contract 3 Generator</title>
	<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker3.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,700,300">
	<link rel="stylesheet" type="text/css" href="app-screen-only.css" class="nopdf">
	<link rel="stylesheet" type="text/css" href="app.css">
	<script class="nopdf">
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-15485830-37', 'auto');
	ga('send', 'pageview');
	</script>
</head>
<body>
	<!-- http://ironsummitmedia.github.io/startbootstrap-simple-sidebar/ -->
	<div id="wrapper">
		<div id="sidebar-wrapper">
			<div class="sidebar-inner">
				<h3>Generate your own</h3>
				<p class="sidebar-description">Simply fill out the fields below and hit the submit button to save your contract as a PDF.</p>
				<form id="form-customize" action="inc/create-pdf.php" method="post">
					<div class="row">
						<div class="col-lg-8 col-md-4 col-sm-4">
							<div class="form-group">
								<label class="sr-only">Your (Company) Name</label>
								<input class="form-control" type="text" name="name" placeholder="Your (Company) Name" required>
							</div>
						</div>
						<div class="col-lg-4 hidden-md hidden-sm">
							<div class="form-group">
								<!-- https://www.filepicker.com/documentation/file_ingestion/widgets/pick -->
								<label class="sr-only">Add logo</label>
								<input type="filepicker" data-fp-button-class="btn btn-default btn-block btn-fp" name="logo" data-fp-button-text="Add Logo" data-fp-extensions=".png,.jpg,.jpeg,.gif">
							</div>
						</div>
						<div class="col-lg-12 col-md-4 col-sm-4">
							<div class="form-group">
								<label class="sr-only">Your Address</label>
								<input class="form-control" type="text" name="address" placeholder="Your Address" required>
							</div>
						</div>
						<div class="col-lg-12 col-md-4 col-sm-4">
							<div class="form-group">
								<label class="sr-only">Customer Name</label>
								<input class="form-control" type="text" name="customername" placeholder="Customer Name" required>
							</div>
						</div>
						<div class="col-lg-12 col-md-4 col-sm-4">
							<div class="form-group">
								<label class="sr-only">Customer Address</label>
								<input class="form-control" type="text" name="customeraddress" placeholder="Customer Address" required>
							</div>
						</div>
						<div class="col-lg-12 col-md-4 col-sm-4">
							<div class="form-group">
								<label class="sr-only">Task description</label>
								<input class="form-control" type="text" name="task" placeholder="Task description" required>
							</div>
						</div>
						<div class="col-lg-6 col-md-4 col-sm-4">
							<div class="form-group">
								<label class="sr-only">Total price</label>
								<input class="form-control" type="text" name="total" placeholder="Total price" required>
							</div>
						</div>
						<div class="col-lg-6 col-md-4 col-sm-4">
							<div class="form-group">
								<label class="sr-only">Date</label>
								<div class="input-group date">
									<input type="text" name="date" class="form-control" placeholder="Date"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-4 col-sm-4">
							<div class="form-group">
								<label class="sr-only">Payment Schedule</label>
								<textarea class="form-control" name="payment" placeholder="Payment Schedule" rows="2" required></textarea>
							</div>
						</div>
						<div class="col-lg-12 col-md-4 col-sm-4">
							<div class="form-group">
								<label class="sr-only">Courts responsible for this contract</label>
								<div class="input-group input-group-court">
									<input class="form-control" type="text" name="court" placeholder="Courts responsible for this contract" required><span class="input-group-addon" title="Locate me" id="locateme"><i class="glyphicon glyphicon-screenshot"></i></span>
								</div>
							</div>
						</div>
					</div>
					<button type="submit" id="create-pdf-btn" class="btn btn-primary btn-lg btn-block">Save as PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button>
					<input id="input-html" type="hidden" name="html" value="">
				</form>

				<div class="sidebar-about hidden-md hidden-sm">
					<h3>About</h3>
					<p>This tool is based on the popular open-source contract for web designers and developers by <a href="http://stuffandnonsense.co.uk/">Stuff &amp; Nonsense</a>. Revised date: <a href="https://gist.github.com/4031110">15/12/2013</a>.</p>
					<hr>
					<p>Made with <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> in Bangkok by <a href="http://twitter.com/siamkreative/">SiamKreative</a>.</p>
				</div>
			</div>
		</div>
		<div id="page-content-wrapper">
			<div class="page-content">
				<div class="container">

					<!-- <button class="cmn-toggle-switch cmn-toggle-switch__htx active pull-right">
						<span>toggle menu</span>
					</button> -->

					<div id="contract">
						<img class="logo hide" src="http://placehold.it/260x180" alt="">

						<p>Between us <span class="item name">company name</span> and you <span class="item customername">customer name</span></p>

						<h2>Summary:</h2>

						<div class="summary">
							<p>We’ll always do our best to fulfil your needs and meet your expectations, but it’s important to have things written down so that we both know what’s what, who should do what and when, and what will happen if something goes wrong. In this contract you won’t find any complicated legal terms or long passages of unreadable text. We’ve no desire to trick you into signing something that you might later regret. What we do want is what’s best for both parties, now and in the future.</p>
							<p>So in short;</p>
							<p>You (<span class="item customername">customer name</span>), located at <span class="item customeraddress">customer address</span> are hiring us (<span class="item name">company name</span>) located at <span class="item address">company address</span> to <span class="item task">design and develop a web site</span> for the estimated total price of <span class="item total">total</span> as outlined in our previous correspondence. Of course it’s a little more complicated, but we’ll get to that.</p>
						</div>

						<div class="agree">
							<h2>What do both parties agree to do?</h2>
							<p>*You:* You have the authority to enter into this contract on behalf of yourself, your company or your organisation. You’ll give us everything we need to complete the project as and when and in the format we need it. You’ll review our work, provide feedback and approval in a timely manner too. Deadlines work two ways, so you’ll also be bound by dates we set together. You also agree to stick to the payment schedule set out at the end of this contract.</p>
							<p>*Us:* We have the experience and ability to do everything we’ve agreed with you and we’ll do it all in a professional and timely manner. We’ll endeavour to meet every deadline that’s set and on top of that we'll maintain the confidentiality of everything you give us.</p>
						</div>

						<div class="nitty">
							<h2>Getting down to the nitty gritty</h2>

							<h3>Design</h3>

							<p>We create look-and-feel designs, and flexible layouts that adapt to the capabilities of many devices and screen sizes. We create designs iteratively and use predominantly HTML and CSS so we won’t waste time mocking up every template as a static visual. We may use static visuals to indicate a look-and-feel direction (colour, texture and typography.) We call that ‘design atmosphere.’</p>
							<p>You’ll have plenty of opportunities to review our work and provide feedback. We’ll share our working Dropbox with you and have regular, possibly daily contact. If, at any stage, you’re not happy with the direction our work is taking, you’ll pay us in full for everything we’ve produced until that point and cancel this contract.</p>
							<h3>Text content</h3>

							<p>We’re not responsible for writing or inputting any text copy. If you’d like us to write new content or input text for you, we can provide a separate estimate for that.</p>

							<h3>Photographs</h3>

							<p>You should supply graphic files in an editable, vector digital format. You should supply photographs in a high resolution digital format. If you choose to buy stock photographs, we can suggest stock libraries. If you’d like us to search for photographs for you, we can provide a separate estimate for that.</p>

							<h3>HTML, CSS and JavaScript</h3>

							<p>We deliver web page types developed from HTML5 markup, CSS2.1 + 3 stylesheets for styling and unobtrusive JavaScript for feature detection, poly-fills and behaviours.</p>

							<h3>Browser testing</h3>

							<p>Browser testing no longer means attempting to make a website look the same in browsers of different capabilities or on devices with different size screens. It does mean ensuring that a person’s experience of a design should be appropriate to the capabilities of a browser or device.</p>

							<h3>Desktop browser testing</h3>

							<p>We test our work in current versions of major desktop browsers including those made by Apple (Safari), Google (Chrome), Microsoft (Internet Explorer), Mozilla Firefox and Opera. We’ll also test to ensure Microsoft Internet Explorer 9 for Windows users get an appropriate, possibly different, experience. We’ll implement a single column design for older versions of Internet Explorer and we won’t test in other older browsers unless you specify otherwise. If you need an enhanced design for an older browser, we can provide a separate estimate for that.</p>

							<h3>Mobile browser testing</h3>

							<p>Testing popular small-screen devices is essential in ensuring that a person’s experience of a design is appropriate to the capabilities of the device they’re using. We test our work in:</p>
							<p>iOS: Safari, Google Chrome Android 4.x: Google Chrome and Firefox</p>
							<p>We currently don’t test Blackberry, Opera Mini/Mobile, Windows Phone or other mobile browsers. If you need us to test using these, we can provide a separate estimate for that.</p>

							<h3>Technical support</h3>

							<p>We’re not a website hosting company so we don’t offer support for website hosting, email or other services relating to hosting. You may already have professional hosting and you might even manage that hosting in-house; if you do, great. If you don’t, we can set up an account for you at one of our preferred hosting providers. We can set up your site on a server, plus any statistics software such as Google Analytics and we can provide a separate estimate for that. Then, the updates to, and management of that server will be up to you.</p>

							<h3>Changes and revisions</h3>

							<p>We know from experience that fixed-price contracts are rarely beneficial to you, as they often limit you to your earliest ideas. We don’t want to limit your ability to change your mind. The price at the beginning of this contract is based on the length of time we estimate we’ll need to accomplish everything you’ve told us you want to achieve, but we’re happy to be flexible. If you want to change your mind or add anything new, that won’t be a problem as we’ll provide a separate estimate for that.</p>

							<h3>Legal stuff</h3>

							<p>We can’t guarantee that our work will be error-free and so we can’t be liable to you or any third-party for damages, including lost profits, lost savings or other incidental, consequential or special damages, even if you’ve advised us of them. Finally, if any provision of this contract shall be unlawful, void, or for any reason unenforceable, then that provision shall be deemed severable from this contract and shall not affect the validity and enforceability of any remaining provisions.</p>
							<p>Phew.</p>

							<h3>Copyrights</h3>

							<p>First, you guarantee that all elements of text, images or other artwork you provide are either owned by your good selves, or that you’ve permission to use them.</p>
							<p>Then, when your final payment has cleared, copyright will be automatically assigned as follows:</p>
							<p>You’ll own the visual elements that we create for this project. We’ll give you source files and finished files and you should keep them somewhere safe as we’re not required to keep a copy. You own all elements of text, images and data you provided, unless someone else owns them.</p>
							<p>We’ll own the unique combination of these elements that constitutes a complete design and we’ll license its use to you, exclusively and in perpetuity for this project only, unless we agree otherwise.</p>
							<p>We love to show off our work and share what we’ve learned with other people, so we reserve the right, with your permission, to display and link to your project as part of our portfolio and to write about it on websites, in magazine articles and in books.</p>

							<h3>Payments</h3>

							<p>We’re sure you understand how important it is as a small business that you pay the invoices that we send you promptly. As we’re also sure you’ll want to stay friends, you agree to stick tight to the following payment schedule.</p>
							<p><span class="item payment">Payment schedule</span></p>

							<h3>But where’s all the horrible small print?</h3>

							<p>Just like a parking ticket, you can’t transfer this contract to anyone else without our permission. This contract stays in place and need not be renewed. If for some reason one part of this contract becomes invalid or unenforceable, the remaining parts of it remain in place.</p>
							<p>Although the language is simple, the intentions are serious and this contract is a legal document under exclusive jurisdiction of <span class="item court">English and Welsh</span> courts.</p>
							<p>Oh and don’t forget those men with big dogs.</p>

							<h3>The dotted line</h3>
							<table id="signatures" class="table table-bordered">
								<tr>
									<td>Signed by and on behalf of <span class="item name">company name</span><br><br><br></td>
									<td>Signed by and on behalf of <span class="item customername">customer name</span><br><br><br></td>
								</tr>
							</table>
							<p>Date: <span class="item date">date</span></p>
							<p>Everyone should sign above and keep a copy for their records.</p>
						</div>
					</div><!-- /#contract -->
				</div><!-- /.container -->
			</div>
		</div>
	</div>

	<a href="https://github.com/SiamKreative/Contract-Killer-Generator"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
	<script src="//api.filepicker.io/v1/filepicker.js"></script>
	<script src="app.js"></script>

</body>
</html>