@extends('layout.app')

@section('content')

<div class="container">

	<div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="profile">
          <div class="avatar">
            <img src="{{ asset('assets/images/profile.jpg') }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
          </div>
          <div class="name">
            <h3 class="title">Manuel U. Ortega Jr.</h3>
            <h6>Web Developer / Software Engineer</h6>
            <a href="https://web.facebook.com/jaymanuel13" target="_blank" class="btn btn-just-icon btn-link btn-pinterest" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fab fa-facebook-square"></i></a>
            <a href="https://github.com/JonSnow13" target="_blank" class="btn btn-just-icon btn-link btn-pinterest" data-toggle="tooltip" data-placement="bottom" title="GitHub"><i class="fab fa-github-square"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
        <p>A graduate of Bachelor of Science in information Technology at <b>DMC College Foundation, a De La Salle</b> supervised school in Dipolog City, Philippines 7100.</p>
        <p>A passionate web developer with specific awards in the field of Information Technology from his school.</p>
    </div>
    <div class="text-center">
    	<h6>
    		<b>Objectives</b> 
    	</h6>
    	<p>To be a skilled and well-experienced <b>Information Technology Expert</b> with emphasis on programming</p>
    	<p>To be an IT professional specifically as a web developer and software developer.</p>
    	<p>To be in any leadership related work that requires computer skills, promotes creativity and allows personal development.</p>
    </div>

  	<div class="text-center">
	      <div class="ml-auto mr-auto">
	        <h2 class="title">Systems Developed</h2>
	      </div>
	</div>

	<div class="title">
        <h2>Terhea Med</h2>
    </div>

    <fieldset>
    	<legend>Used framework, languages, tools, APIs, scripts, IDE, and libraries</legend>
    	<p>Laravel Framework, PHP, CSS, HTML, Bootstrap, JQuery, Javascript, AJAX, JSON, XAMPP, MySQL, T-SQL, Google Map API, Disqus API, Sublime Text</p>
    </fieldset>

    <button class="btn btn-sx btn-default" data-toggle="modal" data-target="#medaboutModal">About the project</button>

    <div class="row">
    	<div class="col-md-6">
    		<h4 class="title">Video demo</h4>
    		<iframe id="terheaMedVideo" style="width: 100%; height: 100px;" src="https://www.youtube.com/embed/BuXglnOF3N8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    	</div>
    	<div class="col-md-6">
    		<h4 class="title">Screenshots</h4>
    		<div id="carouselTerheamed" class="carousel slide" data-ride="carousel">
    			<div class="more-photo-filter">
    				<h3 class="title ml-auto mr-auto" style="color: #fff">
    					17 more photos
    				</h3>
    			</div>
			  	<div class="carousel-inner">
			    	<div class="carousel-item active">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/1-homepage.jpg') }}" alt="First slide">
			      		<input type="hidden" value="This is the home page.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/2-searched-for-med.jpg') }}" alt="Second slide">
			      		<input type="hidden" value="This is the search result.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/3-view-med.jpg') }}" alt="Third slide">
			      		<input type="hidden" value="View details of medicine.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/4-view-med-reviews.jpg') }}" alt="Fourth slide">
			      		<input type="hidden" value="View medicine reviews and comments.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/5-view-more-med.jpg') }}" alt="Fifth slide">
			      		<input type="hidden" value="View more similar medicine.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/6-view-direction.jpg') }}" alt="Sixth slide">
			      		<input type="hidden" value="View Pharmacy/ Hospital map direction.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/7-view-street-view.jpg') }}" alt="Seventh slide">
			      		<input type="hidden" value="View establishment's street view.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/8-view-open-hours.jpg') }}" alt="Eight slide">
			      		<input type="hidden" value="View operating hours.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/9-view-the-whole-map.jpg') }}" alt="Nineth slide">
			      		<input type="hidden" value="View big map.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/10-search-for-a-specific-pharmacy-or-hospital.jpg') }}" alt="Tenth slide">
			      		<input type="hidden" value="Search box for specific pharmacy, hospital and clinic.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/11-health-tips.jpg') }}" alt="Twelve slide">
			      		<input type="hidden" value="Health tips page.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/12-search-health-tips.jpg') }}" alt="Thirteenth slide">
			      		<input type="hidden" value="Search result for healh tips.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/13-view-health-tip.jpg') }}" alt="Fourtieth slide">
			      		<input type="hidden" value="View health tips.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/14-home-remedies.jpg') }}" alt="Fiftieth slide">
			      		<input type="hidden" value="Home remedies page.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/15-search-home-remedy.jpg') }}" alt="Sixtieth slide">
			      		<input type="hidden" value="Search result for home remedies.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/16-view-home-remedy.jpg') }}" alt="Ninetieth slide">
			      		<input type="hidden" value="View home remedy.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/17-about.jpg') }}" alt="Third slide">
			      		<input type="hidden" value="About page.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheamed/18-talk-with-us.jpg') }}" alt="Third slide">
			      		<input type="hidden" value="Have a conversation with us.">
			    	</div>
			  	</div>
			  	<a class="carousel-control-prev" href="#carouselTerheamed" role="button" data-slide="prev">
			    	{{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
			    	{{-- <span class="sr-only">Previous</span> --}}
			  	</a>
			  	<a class="carousel-control-next" href="#carouselTerheamed" role="button" data-slide="next">
			    	{{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
			    	{{-- <span class="sr-only">Next</span> --}}
			  	</a>
			</div>
    	</div>
    </div>

    <hr>

    <div class="title">
        <h2>Terhea Shoppe</h2>
    </div>

    <fieldset>
    	<legend>Used framework, languages, tools, scripts, IDE, and libraries</legend>
    	<p>ASP.Net MVC, C#, CSS, HTML, Bootswatch, JQuery, Javascript, AJAX, JSON, MSSQL, Visual Studio, Entity framework</p>
    </fieldset>

    <button class="btn btn-sx btn-default" data-toggle="modal" data-target="#shoppeAboutModal">About the project</button>

    <div class="row">
    	<div class="col-md-6">
    		<h4 class="title">Video demo</h4>
    		<iframe id="terheaShoppeVideo" style="width: 100%; height: 100px;" src="https://www.youtube.com/embed/-r8zGmkR5kY?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    	</div>
    	<div class="col-md-6">
    		<h4 class="title">Screenshots</h4>
    		<div id="carouselTerheaShoppe" class="carousel slide" data-ride="carousel">
    			<div class="more-photo-filter">
    				<h3 class="title ml-auto mr-auto" style="color: #fff">
    					11 more photos
    				</h3>
    			</div>
			  	<div class="carousel-inner">
			    	<div class="carousel-item active">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheashoppe/1.jpg') }}" alt="First slide">
			      		<input type="hidden" value="This is the home page.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheashoppe/2.jpg') }}" alt="Second slide">
			      		<input type="hidden" value="Item details.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheashoppe/3.jpg') }}" alt="Third slide">
			      		<input type="hidden" value="An item has been successfully added.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheashoppe/4.jpg') }}" alt="Fourth slide">
			      		<input type="hidden" value="View cart page.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheashoppe/5.jpg') }}" alt="Fifth slide">
			      		<input type="hidden" value="View Address options.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheashoppe/6.jpg') }}" alt="Sixth slide">
			      		<input type="hidden" value="Payment process.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheashoppe/7.jpg') }}" alt="Seventh slide">
			      		<input type="hidden" value="View order summary.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheashoppe/8.jpg') }}" alt="Eight slide">
			      		<input type="hidden" value="Reset password.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheashoppe/a1.jpg') }}" alt="Nineth slide">
			      		<input type="hidden" value="All products - admin.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheashoppe/a2.jpg') }}" alt="Tenth slide">
			      		<input type="hidden" value="View customers orders.">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheashoppe/a3.jpg') }}" alt="Twelve slide">
			      		<input type="hidden" value="Update status (Proccessing, Shipped, Delivered).">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="d-block w-100" src="{{ asset('assets/images/terheashoppe/a4.jpg') }}" alt="Thirteenth slide">
			      		<input type="hidden" value="View growth chart.">
			    	</div>
			  	</div>
			  	<a class="carousel-control-prev" href="#carouselTerheaShoppe" role="button" data-slide="prev">
			    	{{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
			    	{{-- <span class="sr-only">Previous</span> --}}
			  	</a>
			  	<a class="carousel-control-next" href="#carouselTerheaShoppe" role="button" data-slide="next">
			    	{{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
			    	{{-- <span class="sr-only">Next</span> --}}
			  	</a>
			</div>
    	</div>
    </div>

<!-- Classic Modal for about med-->
<div class="modal fade" id="medaboutModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="max-width: 90%;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">About the project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">

        	<div class="mr-auto ml-auto">
        		<h5 class="title text-center" style="margin-top: 0; margin-bottom: 0;">Team Members</h5>
        	</div>

	        <div class="row">
	        	<div class="col-md-4">
		          	<div style="width: 100px;" class="ml-auto mr-auto">
		          		<img src="{{ asset('assets/images/profile.jpg') }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
		          	</div>
		          	<div class="name text-center">
		            	<h5 class="title">Manuel U. Ortega Jr.</h5>
		            	<h5 style="margin-top: -32px;">Web Developer / Software Engineer</h5>
		            	<a href="https://web.facebook.com/jaymanuel13" target="_blank" class="btn btn-just-icon btn-link btn-pinterest" style="margin-top: -20px;"><i class="fab fa-facebook-square"></i></a>
		            	<a href="https://github.com/JonSnow13" target="_blank" class="btn btn-just-icon btn-link btn-pinterest" style="margin-top: -20px;"><i class="fab fa-github-square"></i></a>
		          	</div>
	        	</div>
	        	<div class="col-md-4">
		          	<div style="width: 100px;" class="ml-auto mr-auto">
		          		<img src="{{ asset('assets/images/angelica.jpg') }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
		          	</div>
		          	<div class="name text-center">
		            	<h5 class="title">Ma. Angelica M. Pacaro</h5>
		            	<h5 style="margin-top: -32px;">QA / Documentalist</h5>
		            	<a href="https://web.facebook.com/msmariasu" target="_blank" class="btn btn-just-icon btn-link btn-pinterest" style="margin-top: -20px;"><i class="fab fa-facebook-square"></i></a>
		          	</div>
	        	</div>
	        	<div class="col-md-4">
	        		<div style="width: 100px;" class="ml-auto mr-auto">
		          		<img src="{{ asset('assets/images/alliza.jpg') }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
		          	</div>
		          	<div class="name text-center">
		            	<h5 class="title">Alliza Bless Alam</h5>
		            	<h5 style="margin-top: -32px;">QA / Documentalist</h5>
		            	<a href="https://web.facebook.com/allizabless33" target="_blank" class="btn btn-just-icon btn-link btn-pinterest" style="margin-top: -20px;"><i class="fab fa-facebook-square"></i></a>
		          	</div>
	        	</div>
	        </div>

	        <div class="row">
	        	<div class="col-md-12">
	        		<p>Terhea med was our Capstone or Thesis project. We have three members in the team. Ma. Angelica was assigned for the documents of the project. Alliza was the QA of our project. And, I am the web developer of the project. It was presented to our dean and instructors on May 2018.
					</p>

					<p>The study and development of the Terhea Med is to help, find and suggest the right medication of our common illnesses. It is essential to establish a system that is convenient for our daily life. It is developed for the sake of our health and to provide safe suggestions of medicines. Both herbal and non-herbal medicines are provided. 
					</p>

					<p>
						Terheamed is developed for the people who are not well familiar with the places they are staying, because the system provides a google map with the nearby pharmacy/ drug stores/ hospitals. Street views and directions are provided with each specific establishment. Time costs are reduced by the help of showing the estimated time of travel from a starting point to a certain destination.
					</p>
	        	</div>
	        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>

<!-- Classic Modal for about shoppe-->
<div class="modal fade" id="shoppeAboutModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="max-width: 90%;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">About the project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">

        	<div class="row">
        		<div class="col-md-3">
		          	<div style="width: 100px;" class="ml-auto mr-auto">
		          		<img src="{{ asset('assets/images/profile.jpg') }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
		          	</div>
		          	<div class="name text-center">
		            	<h5 class="title">Manuel U. Ortega Jr.</h5>
		            	<h5 style="margin-top: -32px;">Web Developer / Software Engineer</h5>
		            	<a href="https://web.facebook.com/jaymanuel13" target="_blank" class="btn btn-just-icon btn-link btn-pinterest" style="margin-top: -20px;"><i class="fab fa-facebook-square"></i></a>
		            	<a href="https://github.com/JonSnow13" target="_blank" class="btn btn-just-icon btn-link btn-pinterest" style="margin-top: -20px;"><i class="fab fa-github-square"></i></a>
		          	</div>
        		</div>
        		<div class="col-md-9">
        			<p>Terhea shoppe was my school project in web development subject. We are assigned to work individually with my classmates, and because of that I was the only one developed my project named Terhea Shoppe.
					</p>

					<p>
						Terhea Shoppe is a shopping web app just like Lazada, but mine is just a simple shopping web application.
					</p>
        		</div>
        	</div>
        	
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>

<!-- Modal for view screenshots med -->
<div class="modal fade" id="ssModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 90%;">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Terhea med</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 80%;">
      		<div class="row">
      			<div class="col-md-9">
      				<div id="carouselModal" class="carousel slide" data-interval="false">
					  	<div class="carousel-inner">
					    	<!-- will be inserted by images -->
					  	</div>
					  	<a class="carousel-control-prev" href="#carouselModal" role="button" data-slide="prev">
					    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Previous</span>
					  	</a>
					  	<a class="carousel-control-next" href="#carouselModal" role="button" data-slide="next">
					    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Next</span>
					  	</a>
					</div>
      			</div>
      			<div class="col-md-3">
      				<p id="carouselDescription">
					</p>
					<br>
					<p id="carouseCaption"></p>
      			</div>
      		</div>
      </div>
    </div>
  </div>
</div>

</div>

<script type="text/javascript">
	
	$(function(){
		var VideoShoppeWidth = $('#terheaMedVideo').css('width'); //get the width of video iframe
		VideoShoppeWidth = (VideoShoppeWidth.replace('px', '')) * .57;

		$('#terheaShoppeVideo').css('height', VideoShoppeWidth + 'px'); //set the height of video iframe
		$('#terheaMedVideo').css('height', VideoShoppeWidth + 'px');	//set the height of video iframe


		$('#carouselTerheamed').click(function(){
			
			$('#ssModal').modal('show');
			$('#ssModal .modal-title').text('Terhea med screenshots');
			$('#carouselDescription').text('The study and development of the Terhea Med is to help, find and suggest the right medication of our common illnesses. It is essential to establish a system that is convenient for our daily life. It is developed for the sake of our health and to provide safe suggestions of medicines. Both herbal and non-herbal medicines are provided.');

			var images = $('#carouselTerheamed .carousel-inner').html(); //get the element images from carouselTerheamed in carousel-inner
			$('#carouselModal .carousel-inner').html(images);
			setCaption();

		});

		$('#carouselTerheaShoppe').click(function(){
			
			$('#ssModal').modal('show');
			$('#ssModal .modal-title').text('Terhea shoppe screenshots');
			$('#carouselDescription').text('Terhea Shoppe is a shopping web app just like Lazada, but Lazada is much more flexible and good than mine.');

			var images = $('#carouselTerheaShoppe .carousel-inner').html(); //get the element images from carouselTerheamed in carousel-inner
			$('#carouselModal .carousel-inner').html(images);
			setCaption();

		});

		$('#carouselModal').click(function(){

			setCaption();

		});

		$(window).keydown(function(e){
			if ($('#ssModal').is(':visible')) 
			{
				if (e.which == 39 || e.which == 37) 
				{
					setCaption();
				}
			}
		});

		function setCaption()
		{
			setTimeout(function(){
				var caption = $('#carouselModal .carousel-inner .active input').val();
				$('#carouseCaption').text(caption);
			},650);
		}

	});

</script>

@endsection