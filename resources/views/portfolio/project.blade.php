@extends('layout.app')

@section('content')

	<div class="index-page">
		<div class="wrapper">
			<div class="header header-filter" style="background-image: url('assets/images/bg.jpg');">
				<div class="container">
					<div class="row">	
						<div class="col-md-8 col-md-offset-2">
							<div class="brand">
								<h1>Systems Developed</h1>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="main main-raised">
				<div class="section section-basic">
			    	<div class="container">
			            <div class="title">
			                <h2>Terhea Med</h2>
			            </div>

			            <fieldset>
			            	<legend>Used framework, languages, tools, APIs, scripts, IDE, and libraries</legend>
			            	<p>Laravel Framework, PHP, CSS, HTML, Bootstrap, JQuery, Javascript, AJAX, JSON, XAMPP, MySQL, T-SQL, Google Map API, Disqus API, Sublime Text</p>
			            </fieldset>

			            <button class="btn btn-sx btn-default" data-toggle="modal", data-target="#medaboutModal">About the project</button>
			        </div>

			        <div class="container">
			        	<div class="title">Video demo</div>
			        	<iframe style="width: 100%;" height="480" src="https://www.youtube.com/embed/BuXglnOF3N8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			        </div>

			        <div class="section" id="carousel">
						<div class="container">
							<div class="row">
								<div class="col-md-12">

									<div class="title">Screenshots</div>

									<!-- Carousel Card -->
									<div class="card card-raised card-carousel">
										<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
											<div class="carousel slide" data-ride="carousel">

												<!-- Indicators -->
												<ol class="carousel-indicators">
													<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
													<li data-target="#carousel-example-generic" data-slide-to="1"></li>
													<li data-target="#carousel-example-generic" data-slide-to="2"></li>
													<li data-target="#carousel-example-generic" data-slide-to="3"></li>
													<li data-target="#carousel-example-generic" data-slide-to="4"></li>
													<li data-target="#carousel-example-generic" data-slide-to="5"></li>
													<li data-target="#carousel-example-generic" data-slide-to="6"></li>
													<li data-target="#carousel-example-generic" data-slide-to="7"></li>
													<li data-target="#carousel-example-generic" data-slide-to="8"></li>
													<li data-target="#carousel-example-generic" data-slide-to="9"></li>
													<li data-target="#carousel-example-generic" data-slide-to="10"></li>
													<li data-target="#carousel-example-generic" data-slide-to="11"></li>
													<li data-target="#carousel-example-generic" data-slide-to="12"></li>
													<li data-target="#carousel-example-generic" data-slide-to="13"></li>
													<li data-target="#carousel-example-generic" data-slide-to="14"></li>
													<li data-target="#carousel-example-generic" data-slide-to="15"></li>
													<li data-target="#carousel-example-generic" data-slide-to="16"></li>
													<li data-target="#carousel-example-generic" data-slide-to="17"></li>
												</ol>

												<!-- Wrapper for slides -->
												<div class="carousel-inner">
													<div class="item active">
														<img src="{{ asset('assets/images/terheamed/1-homepage.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> Home Page</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/2-searched-for-med.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> Search medicine</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/3-view-med.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> View medicine</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/4-view-med-reviews.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> View medicine reviews and comments</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/5-view-more-med.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> View more medicines</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/6-view-direction.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> View Pharmacy/ Hospital map direction</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/7-view-street-view.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> View Pharmacy/ Hospital street views </h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/8-view-open-hours.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> View Pharmacy/ Hospital operating hours</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/9-view-the-whole-map.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> View big map</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/10-search-for-a-specific-pharmacy-or-hospital.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> Search for specific pharmacy/ hospital or clinic</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/11-health-tips.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> View health tips</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/12-search-health-tips.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> Search health tips</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/13-view-health-tip.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> View health tips</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/14-home-remedies.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> View home remedies</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/15-search-home-remedy.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> Search home remedies</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/16-view-home-remedy.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> View home remedies</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/17-about.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> About page</h4>
														</div>
													</div>
													<div class="item">
														<img src="{{ asset('assets/images/terheamed/18-talk-with-us.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> Talk with us</h4>
														</div>
													</div>
												</div>

												<!-- Controls -->
												<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
													<i class="material-icons">keyboard_arrow_left</i>
												</a>
												<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
													<i class="material-icons">keyboard_arrow_right</i>
												</a>
											</div>
										</div>
									</div>
									<!-- End Carousel Card -->

								</div>
							</div>
						</div>
					</div>

					<hr>

					<div class="container">
			            <div class="title">
			                <h2>Terhea Shoppe</h2>
			            </div>

			            <fieldset>
			            	<legend>Used framework, languages, tools, scripts, IDE, and libraries</legend>
			            	<p>ASP.Net MVC, C#, CSS, HTML, Bootswatch, JQuery, Javascript, AJAX, JSON, MSSQL, Visual Studio, Entity framework</p>
			            </fieldset>

			            <button class="btn btn-sx btn-default" data-toggle="modal" data-target="#shoppeaboutModal">About the project</button>
			        </div>

			        <div class="container">
			        	<div class="title">Video demo</div>
			        	<iframe style="width: 100%;" height="480" src="https://www.youtube.com/embed/-r8zGmkR5kY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			        </div>

			        <div class="section" id="carousel2">
						<div class="container">
							<div class="row">
								<div class="col-md-12">

									<div class="title">Screenshots</div>

									<!-- Carousel Card -->
									<div class="card card-raised card-carousel">
										<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel2">
											<div class="carousel slide" data-ride="carousel2">

												<!-- Indicators -->
												<ol class="carousel-indicators">
													<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
													<li data-target="#carousel-example-generic" data-slide-to="1"></li>
													<li data-target="#carousel-example-generic" data-slide-to="2"></li>
													<li data-target="#carousel-example-generic" data-slide-to="3"></li>
													<li data-target="#carousel-example-generic" data-slide-to="4"></li>
													<li data-target="#carousel-example-generic" data-slide-to="5"></li>
													<li data-target="#carousel-example-generic" data-slide-to="6"></li>
													<li data-target="#carousel-example-generic" data-slide-to="7"></li>
													<li data-target="#carousel-example-generic" data-slide-to="8"></li>
													<li data-target="#carousel-example-generic" data-slide-to="9"></li>
													<li data-target="#carousel-example-generic" data-slide-to="10"></li>
													<li data-target="#carousel-example-generic" data-slide-to="11"></li>
													<li data-target="#carousel-example-generic" data-slide-to="12"></li>
												</ol>

												<!-- Wrapper for slides -->
												<div class="carousel-inner">
													<div class="item active">
														<img src="{{ asset('assets/images/terheashoppe/1.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> Home Page</h4>
														</div>
													</div>

													<div class="item">
														<img src="{{ asset('assets/images/terheashoppe/2.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> Item details</h4>
														</div>
													</div>

													<div class="item">
														<img src="{{ asset('assets/images/terheashoppe/3.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i> An item has been successfully added</h4>
														</div>
													</div>

													<div class="item">
														<img src="{{ asset('assets/images/terheashoppe/4.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i>  View cart</h4>
														</div>
													</div>

													<div class="item">
														<img src="{{ asset('assets/images/terheashoppe/5.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i>  Address options</h4>
														</div>
													</div>

													<div class="item">
														<img src="{{ asset('assets/images/terheashoppe/6.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i>  Process payment</h4>
														</div>
													</div>

													<div class="item">
														<img src="{{ asset('assets/images/terheashoppe/7.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i>  View order summary</h4>
														</div>
													</div>

													<div class="item">
														<img src="{{ asset('assets/images/terheashoppe/8.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i>  Manage account</h4>
														</div>
													</div>

													<div class="item">
														<img src="{{ asset('assets/images/terheashoppe/a1.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i>  All products</h4>
														</div>
													</div>

													<div class="item">
														<img src="{{ asset('assets/images/terheashoppe/a2.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i>  View customers order</h4>
														</div>
													</div>

													<div class="item">
														<img src="{{ asset('assets/images/terheashoppe/a3.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i>  Update status</h4>
														</div>
													</div>

													<div class="item">
														<img src="{{ asset('assets/images/terheashoppe/a4.jpg') }}" alt="Awesome Image">
														<div class="carousel-caption">
															<h4 class="deep-violet-text"><i class="material-icons">camera</i>  Growth chart</h4>
														</div>
													</div>
												</div>

												<!-- Controls -->
												<a class="left carousel-control" href="#carousel-example-generic2" data-slide="prev">
													<i class="material-icons">keyboard_arrow_left</i>
												</a>
												<a class="right carousel-control" href="#carousel-example-generic2" data-slide="next">
													<i class="material-icons">keyboard_arrow_right</i>
												</a>
											</div>
										</div>
									</div>
									<!-- End Carousel Card -->

								</div>
							</div>
						</div>
					</div>

			    </div>
			</div>

	    </div>
	</div>

	<div class="modal fade" id="medaboutModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						<i class="material-icons">clear</i>
					</button>
					<h4 class="modal-title">About the project</h4>
				</div>
				<div class="modal-body">
					<p>Terhea med was our Capstone or Thesis project. We have three members in the team. Ma. Angelica was assigned for the documents of the project. Alliza was the QA of our project. And, I am the web developer of the project. It was presented to our dean and instructors on May 2018.
					</p>

					<p>The study and development of the Terhea Med is to help, find and suggest the right medication of our common illnesses. It is essential to establish a system that is convenient for our daily life. It is developed for the sake of our health and to provide safe suggestions of medicines. Both herbal and non-herbal medicines are provided. 
					</p>

					<p>
						Terheamed is developed for the people who are not well familiar with the places they are staying, because the system provides a google map with the nearby pharmacy/ drug stores/ hospitals. Street views and directions are provided with each specific establishment. Time costs are reduced by the help of showing the estimated time of travel from a starting point to a certain destination.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="shoppeaboutModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						<i class="material-icons">clear</i>
					</button>
					<h4 class="modal-title">About the project</h4>
				</div>
				<div class="modal-body">
					<p>Terhea shoppe was my school project in web development subject. We are assigned to work individually with my classmates, and because of that I was the only one developed my project named Terhea Shoppe.
					</p>

					<p>
						Terhea Shoppe is a shopping web app just like Lazada, but Lazada is much more flexible and good than mine.
					</p>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

@endsection