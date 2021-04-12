
 @extends("front.master")

@section("content")

		<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>Courses</h1>
				<ul class="page-depth">
					<li><a href="{{url('/')}}">Home</a></li>
					<li><a href="{{url('front/courses')}}">Courses</a></li>
				</ul>
			</div>
		</section>
		<!-- End page-banner-section -->

		<!-- courses-section 
			================================================== -->
		<section class="courses-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="courses-top-bar">
							<div class="courses-view">
								<a href="{{url('front/courses')}}" class="grid-btn active">
									<i class="fa fa-th-large" aria-hidden="true"></i>
								</a>
								<a href="#" class="grid-btn">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</a>
								<span>Showing all 9 results</span>
							</div>
							<form class="search-course">
								<input type="search" name="search" id="search_course" placeholder="Search Courses..." />
								<button type="submit">
									<i class="material-icons">search</i>
								</button>
							</form>
						</div>

						<div class="row">
						@foreach( $coursedata as $x)
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="course-post">
									<div class="course-thumbnail-holder">
										<a href="{{url('/course_detail/'.$x->id)}}">
												<img src="{{ url('/upload/'.$x->course_image) }}" style="width: 244px;">
										</a>
									</div>
									<div class="course-content-holder">
										<div class="course-content-main">
											<h2 class="course-title">
												<a href="{{url('/course_detail/'.$x->id)}}">{{$x->course_name}}</a>
											</h2>
											<div class="course-rating-teacher">
												<div class="star-rating has-ratings" title="Rated 5.00 out of 5">
													<span style="width:100%">
														<span class="rating">5.00</span>
														<span class="votes-number">1 Votes</span>
													</span>
												</div>
												<a href="#" class="course-loop-teacher"></a>
											</div>
										</div>
										<div class="course-content-bottom">
											<div class="course-students">
												<i class="material-icons">group</i>
												<span>64</span>
											</div>
											<div class="course-price">
												<span>£{{$x->course_price}}</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							@endforeach

						</div>
					</div>

					<div class="col-lg-4">
						<div class="sidebar">
							<div class="category-widget widget">
								<h2>Product Categories</h2>
								@foreach($category as $c)
								<ul class="category-list">
									<li><a href="#">{{$c->name}}</a></li>
									<br>
									
								</ul>
								@endforeach
							</div>

							<div class="products-widget widget">
								<h2>Online Courses</h2>

							@foreach($coursedata as $m)
								<ul class="products-list">
									<li>
										<a href="single-course.html"><img src="{{ url('/upload/'.$m->course_image) }}" style="height: 50px; width: 50px; "></a>
										<div class="list-content">
											<h3><a href="single-course.html">{{$m->course_name}}</a></h3>
											<span>${{$m->course_price}}</span>
											
										</div>
									</li><br>
									
								</ul>
								@endforeach
							</div>

							

						</div>
					</div>

				</div>
						
			</div>
		</section>
		<!-- End courses section -->

		

@endsection