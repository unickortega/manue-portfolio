@extends('layout.app')

@section('content')

	<div class="profile-content">
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

        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#album" role="tab" data-toggle="tab">
                    <i class="material-icons">camera</i> Albums
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="tab-content tab-space">
			<div class="tab-pane active text-center gallery" id="album">
                <div class="row">

                	<div class="col-md-6">
                		<div id="carouselAwards" class="carousel slide" data-ride="carousel">
                			<div class="more-photo-filter">
                				<h3 class="title ml-auto mr-auto" style="color: #fff">
                					11 more photos
                				</h3>
                			</div>
						  	<div class="carousel-inner" style="max-height: 305px;">
						    	<div class="carousel-item active">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Outstanding On the Job Trainee">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img1.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Service Award.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img11.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Top student for ITE Elective IV / Web Development 2018.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img12.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Creatice Digital Arts Club (CDAC) service award.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img0.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Academic Excellence award.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img2.jpg') }}" alt="First slide">
						      		<input type="hidden" value="">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img3.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img4.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img5.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img6.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img7.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img8.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Outstanding On the Job Trainee.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img9.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/awards/img10.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Top student for web development.">
						    	</div>
						  	</div>
						  	<a class="carousel-control-prev" href="#carouselAwards" role="button" data-slide="prev">
						    	{{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="carousel-control-next" href="#carouselAwards" role="button" data-slide="next">
						    	{{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
						<h4 class="title">Awards</h4>
                	</div>

                	<div class="col-md-6">
                		<div id="carouselIntern" class="carousel slide" data-ride="carousel">
                			<div class="more-photo-filter">
                				<h3 class="title ml-auto mr-auto" style="color: #fff">
                					10 more photos
                				</h3>
                			</div>
						  	<div class="carousel-inner" style="max-height: 305px;">
						    	<div class="carousel-item active">
						      		<img class="d-block w-100" src="{{ asset('assets/images/ojt/intern1.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Certificate & gifts.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/ojt/intern2.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Certificate & gifts.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/ojt/intern3.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Pizza farewell party.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/ojt/intern4.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Gifts and Certificate from Ozkez Pty. Ltd / AGuyIKnow.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/ojt/intern5.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Birthday party.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/ojt/intern6.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Noon snack.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/ojt/intern7.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Near midnight snack with our manager (PS. Our manager is the photographer).">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/ojt/intern8.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Near midnight snack with our manager (PS. Our manager is the photographer).">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/ojt/intern9.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Birthday party prepaired by our nice manager.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/ojt/intern10.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Birthday party prepaired by our nice manager.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/ojt/intern11.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Birthday party prepaired by our nice manager.">
						    	</div>
						  	</div>
						  	<a class="carousel-control-prev" href="#carouselIntern" role="button" data-slide="prev">
						    	{{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="carousel-control-next" href="#carouselIntern" role="button" data-slide="next">
						    	{{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
						<h4 class="title">OJT / Internship</h4>
                	</div>

                </div>

                <div class="row">
                	<div class="col-md-6">
                		<div id="carouselGrad" class="carousel slide" data-ride="carousel">
                			<div class="more-photo-filter">
                				<h3 class="title ml-auto mr-auto" style="color: #fff">
                					14 more photos
                				</h3>
                			</div>
						  	<div class="carousel-inner" style="max-height: 305px;">
						    	<div class="carousel-item active">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g1.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g2.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g3.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g4.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g5.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g6.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g7.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g8.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g9.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g10.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g11.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g11.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g12.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g13.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g14.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/graduation/g15.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						  	</div>
						  	<a class="carousel-control-prev" href="#carouselGrad" role="button" data-slide="prev">
						    	{{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="carousel-control-next" href="#carouselGrad" role="button" data-slide="next">
						    	{{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
						<h4 class="title">Graduation</h4>
                	</div>

                	<div class="col-md-6">
                		<div id="carouselOthers" class="carousel slide" data-ride="carousel">
                			<div class="more-photo-filter">
                				<h3 class="title ml-auto mr-auto" style="color: #fff">
                					4 more photos
                				</h3>
                			</div>
						  	<div class="carousel-inner" style="max-height: 305px;">
						    	<div class="carousel-item active">
						      		<img class="d-block w-100" src="{{ asset('assets/images/others/others.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/others/others0.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/others/others1.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/others/others2.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/others/others3.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="{{ asset('assets/images/others/others4.jpg') }}" alt="First slide">
						      		<input type="hidden" value="Caption.">
						    	</div>
						  	</div>
						  	<a class="carousel-control-prev" href="#carouselOthers" role="button" data-slide="prev">
						    	{{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="carousel-control-next" href="#carouselOthers" role="button" data-slide="next">
						    	{{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
						<h4 class="title">Others</h4>
                	</div>

                </div>

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
						<h3 id="carouseCaption"></h3>
	      			</div>
	      		</div>
	      </div>
	    </div>
	  </div>
	</div>

	<script type="text/javascript">
		$(function(){

			$('#carouselAwards').click(function(){
			
				$('#ssModal').modal('show');
				$('#ssModal .modal-title').text('Achievements & Awards');
				// $('#carouselDescription').text('Terhea Shoppe is a shopping web app just like Lazada, but Lazada is much more flexible and good than mine.');
				
				var images = $('#carouselAwards .carousel-inner').html(); //get the element images from carouselTerheamed in carousel-inner
				$('#carouselModal .carousel-inner').html(images);
				setCaption();

			});

			$('#carouselIntern').click(function(){
			
				$('#ssModal').modal('show');
				$('#ssModal .modal-title').text('On the Job Training');
				// $('#carouselDescription').text('Terhea Shoppe is a shopping web app just like Lazada, but Lazada is much more flexible and good than mine.');
				
				var images = $('#carouselIntern .carousel-inner').html(); //get the element images from carouselTerheamed in carousel-inner
				$('#carouselModal .carousel-inner').html(images);
				setCaption();

			});

			$('#carouselGrad').click(function(){
			
				$('#ssModal').modal('show');
				$('#ssModal .modal-title').text('Graduation & Recognition');
				// $('#carouselDescription').text('Terhea Shoppe is a shopping web app just like Lazada, but Lazada is much more flexible and good than mine.');
				
				var images = $('#carouselGrad .carousel-inner').html(); //get the element images from carouselTerheamed in carousel-inner
				$('#carouselModal .carousel-inner').html(images);
				setCaption();

			});

			$('#carouselOthers').click(function(){
			
				$('#ssModal').modal('show');
				$('#ssModal .modal-title').text('Others');
				// $('#carouselDescription').text('Terhea Shoppe is a shopping web app just like Lazada, but Lazada is much more flexible and good than mine.');
				
				var images = $('#carouselOthers .carousel-inner').html(); //get the element images from carouselTerheamed in carousel-inner
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