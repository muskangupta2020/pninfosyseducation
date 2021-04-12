 @extends("front.master")

@section("content")


		<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>Placements</h1>
				<ul class="page-depth">
					<li><a href="index.html">PN-INFOSYS</a></li>
					<li><a href="teachers.html">LIST OF OUR PLACED STUDENTS</a></li>
				</ul>
			</div>
		</section>
		<!-- End page-banner-section -->


		<!-- teachers-section 
			================================================== -->
		<section class="teachers-section">
			<div class="container">
				 <?php $i = 1; ?>
				@foreach($placementdata as $p)
				 @if ($i == 1)
				<div class="teachers-box">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="teacher-post">
								<a href="single-teacher.html">
									<img src="{{ url('/upload/'.$p->image) }}" alt="" width="100%" height="100%">
									<div class="hover-post">
										<h2>{{$p->name}}</h2>
										<span>{{$p->company}}</span>
										<span>{{$p->designation}}</span>

									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							 @elseif($i==2)
							<div class="teacher-post">
								<a href="single-teacher.html">
									<img src="{{ url('/upload/'.$p->image) }}" alt="" width="100%" height="100%">
									<div class="hover-post">
										<h2>{{$p->name}}</h2>
										<span>{{$p->company}}</span>
										<span>{{$p->designation}}</span>

									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							 @elseif($i==3)
							<div class="teacher-post">
								<a href="single-teacher.html">
									<img src="{{ url('/upload/'.$p->image) }}" alt="" width="100%" height="100%">
									<div class="hover-post">
										<h2>{{$p->name}}</h2>
										<span>{{$p->company}}</span>
										<span>{{$p->designation}}</span>

									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							 @elseif($i==4)
							<div class="teacher-post">
								<a href="single-teacher.html">
									<img src="{{ url('/upload/'.$p->image) }}" alt="" width="100%" height="100%">
									<div class="hover-post">
										<h2>{{$p->name}}</h2>
										<span>{{$p->company}}</span>
										<span>{{$p->designation}}</span>

									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6">
							 @elseif($i==5)
							<div class="teacher-post">
								<a href="single-teacher.html">
									<img src="{{ url('/upload/'.$p->image) }}" alt="" width="100%" height="100%">
									<div class="hover-post">
										<h2>{{$p->name}}</h2>
										<span>{{$p->company}}</span>
										<span>{{$p->designation}}</span>

									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							 @elseif($i==6)
							<div class="teacher-post">
								<a href="single-teacher.html">
									<img src="{{ url('/upload/'.$p->image) }}" alt="" width="100%" height="100%">
									<div class="hover-post">
										<h2>{{$p->name}}</h2>
										<span>{{$p->company}}</span>
										<span>{{$p->designation}}</span>

									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							 @elseif($i==7)
							<div class="teacher-post">
								<a href="single-teacher.html">
									<img src="{{ url('/upload/'.$p->image) }}" alt="" width="100%" height="100%">
									<div class="hover-post">
										<h2>{{$p->name}}</h2>
										<span>{{$p->company}}</span>
										<span>{{$p->designation}}</span>

									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							 @elseif($i==8)
							<div class="teacher-post">
								<a href="single-teacher.html">
									<img src="{{ url('/upload/'.$p->image) }}" alt="" width="100%" height="100%">
									<div class="hover-post">
										<h2>{{$p->name}}</h2>
										<span>{{$p->company}}</span>
										<span>{{$p->designation}}</span>

									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6">
							 @elseif($i==9)
							<div class="teacher-post">
								<a href="single-teacher.html">
									<img src="{{ url('/upload/'.$p->image) }}" alt="" width="100%" height="100%">
									<div class="hover-post">
										<h2>{{$p->name}}</h2>
										<span>{{$p->company}}</span>
										<span>{{$p->designation}}</span>

									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							 @elseif($i==10)
							<div class="teacher-post">
								<a href="single-teacher.html">
									<img src="{{ url('/upload/'.$p->image) }}" alt="" width="100%" height="100%">
									<div class="hover-post">
										<h2>{{$p->name}}</h2>
										<span>{{$p->company}}</span>
										<span>{{$p->designation}}</span>

									</div>
								</a>
							</div>
						</div>
						
						</div>
					</div>
				</div>	
				@endif
                <?php $i++; ?>
				@endforeach
			</div>
		</section>
		<!-- End teachers section -->

		<!-- footer---> 

@endsection