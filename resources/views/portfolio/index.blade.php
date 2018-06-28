
@extends('layout.app')

@section('content')

	<div class="profile-page">
    	<div class="wrapper">
			<div class="header header-filter" style="background-image: url('assets/images/bg.jpg');"></div>

			<div class="main main-raised">
				<div class="profile-content">
		            <div class="container">
		                <div class="row">
		                    <div class="profile">
		                        <div class="avatar">
		                            <img src="assets/images/profile.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
		                        </div>
		                        <div class="name">
		                            <h3 class="title">Manuel U. Ortega Jr.</h3>
									<h6>Web developer</h6>
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
		                	<p>To be a well-skilled team leader that knows the value of teammates.</p>
		                </div>

						<div class="row">
							<div class="col-md-12">
								<div class="profile-tabs">
				                    <div class="nav-align-center">
										<ul class="nav nav-pills" role="tablist">
											<li class="active">
												<a href="#studio" role="tab" data-toggle="tab">
													<i class="material-icons">camera</i>
													Album
												</a>
											</li>
											<!--<li>
					                            <a href="#work" role="tab" data-toggle="tab">
													<i class="material-icons">palette</i>
													Work
					                            </a>
					                        </li>
					                        <li>
					                            <a href="#shows" role="tab" data-toggle="tab">
													<i class="material-icons">favorite</i>
					                                Favorite
					                            </a>
					                        </li>-->
					                    </ul>

					                    <div class="tab-content gallery">
											<div class="tab-pane active" id="studio">
					                            <div class="row">
													<div class="col-md-6">
														<img src="assets/images/img1.jpg" class="img-rounded" />
														<img src="assets/images/img2.jpg" class="img-rounded" />
													</div>
													<div class="col-md-6">
														<img src="assets/images/img3.jpg" class="img-rounded" />
														<img src="assets/images/img4.jpg" class="img-rounded" />
													</div>
					                            </div>
					                            <div class="row">
					                            	<div class="col-md-6">
														<img src="assets/images/img5.jpg" class="img-rounded" />
													</div>
													<div class="col-md-6">
														<img src="assets/images/img6.jpg" class="img-rounded" />
													</div>
													<div class="col-md-6 col-md-offset-3">
														<img src="assets/images/img7.jpg" class="img-rounded" />
													</div>
					                            </div>
					                        </div>
					                        <!--<div class="tab-pane text-center" id="work">
												<div class="row">
													<div class="col-md-6">
														<img src="../assets/img/examples/chris5.jpg" class="img-rounded" />
														<img src="../assets/img/examples/chris7.jpg" class="img-rounded" />
														<img src="../assets/img/examples/chris9.jpg" class="img-rounded" />
													</div>
													<div class="col-md-6">
														<img src="../assets/img/examples/chris6.jpg" class="img-rounded" />
														<img src="../assets/img/examples/chris8.jpg" class="img-rounded" />
													</div>
												</div>
					                        </div>
											<div class="tab-pane text-center" id="shows">
												<div class="row">
													<div class="col-md-6">
														<img src="../assets/img/examples/chris4.jpg" class="img-rounded" />
														<img src="../assets/img/examples/chris6.jpg" class="img-rounded" />
													</div>
													<div class="col-md-6">
														<img src="../assets/img/examples/chris7.jpg" class="img-rounded" />
														<img src="../assets/img/examples/chris5.jpg" class="img-rounded" />
														<img src="../assets/img/examples/chris9.jpg" class="img-rounded" />
													</div>
												</div>
					                        </div>-->

					                    </div>
									</div>
								</div>
								<!-- End Profile Tabs -->
							</div>
		                </div>

		            </div>
		        </div>
			</div>

	    </div>
    </div>

@endsection