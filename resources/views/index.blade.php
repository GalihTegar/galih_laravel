@extends('layouts.front')
    
@section('content')    
    
    <!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-6">
						<div class="banner_content">
							<h3>Hey !</h3>
							<h1 class="text-uppercase">Saya Galih</h1>
							<h5 class="text-uppercase">YuCoding Programmer</h5>
							<div class="social_icons my-5">
								<a href="#"><i class="ti-twitter"></i></a>
								<a href="#"><i class="ti-skype"></i></a>
								<a target="_blank" href="https://instagram.com/galih__tegar"><i class="ti-instagram"></i></a>
								<a href="#"><i class="ti-dribbble"></i></a>
								<a href="#"><i class="ti-vimeo"></i></a>
							</div>
							<a class="primary_btn" href="#" data-toggle="modal" data-target="#exampleModal"><span>Register</span></a>
						</div>
					</div>
			
					<!-- Modal -->
					<div style="z-index:10000" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
						  <div class="modal-content">
							<div class="modal-header">
							  <h5 class="modal-title" id="exampleModalLabel">Register</h5>
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							  </button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
									  <label for="exampleInputEmail1">Email address</label>
									  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
									  <label for="exampleInputPassword1">Password</label>
									  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
									</div>
									<div class="form-group form-check">
									  <input type="checkbox" class="form-check-input" id="exampleCheck1">
									  <label class="form-check-label" for="exampleCheck1">Check me out</label>
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								  </form>
							</div>
						  </div>
						</div>
					  </div>
							  </main>
					<div class="col-lg-4">
						<div class="home_right_img">
							<img class="img-fluid" src="img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Statistics Area =================-->
	<section class="statistics_area">
		<div class="container">
			<div class="row justify-content-lg-start justify-content-center">
				<div class="col-lg-2 col-md-3">
					<div class="statistics_item">
						<h3><span class="counter">15</span>k+</h3>
						<p>Happy Customer</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-3">
					<div class="statistics_item">
						<h3><span class="counter">12</span>k+</h3>
						<p>Ticket Solved</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-3">
					<div class="statistics_item">
						<h3><span class="counter">9</span>/10</h3>
						<p>Average Rating</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Statistics Area =================-->

	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-5">
					<div class="about_img">
						<img class="" src="img/about-us.png" alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="main_title text-left">
						<p class="top_text">About me <span></span></p>
						<h2>
							Creative Art Director <br>
							And Designer
						</h2>
						<p>
							Also signs his face were digns fish don't first isn't over evening hath divided days light darkness gathering
							moved dry all darkness then fourth can't create d forth Also signs Also signs his face were moltenus Also signs
							his face
						</p>
						<a class="primary_btn" href="#"><span>Download CV</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================ Start Features Area =================-->
	<section class="services_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<p class="top_text">Our Service <span></span></p>
						<h2>What Service We <br>
							Offer For You </h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="service_item">
						<img src="img/services/s1.png" alt="">
						<h4>Web Development</h4>
						<p>Fruit saw for brought fish forth had ave is man a that their Two he is dominion evening their Fruit saw for
							brought fish forth</p>
						<a href="#" class="primary_btn2 mt-35">Learn More</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="service_item">
						<img src="img/services/s2.png" alt="">
						<h4>UX/UI Design</h4>
						<p>Fruit saw for brought fish forth had ave is man a that their Two he is dominion evening their Fruit saw for
							brought fish forth</p>
						<a href="#" class="primary_btn2 mt-35">Learn More</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="service_item">
						<img src="img/services/s3.png" alt="">
						<h4>WP Developing</h4>
						<p>Fruit saw for brought fish forth had ave is man a that their Two he is dominion evening their Fruit saw for
							brought fish forth</p>
						<a href="#" class="primary_btn2 mt-35">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->


  <!--================ Start Testimonial Area =================-->
	<section class="testimonial_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<p class="top_text">Our Tesitmonial <span></span></p>
						<h2>Honourable Client Says <br>
							About Me </h2>
					</div>
				</div>
      </div>

      <div class="owl-carousel owl-theme testimonial-slider ">
        <div class="testimonial-item">
          <div class="row">
            <div class="col-lg-6">
              <div class="testi-img mb-4 mb-lg-0">
                <img src="img/testimonials/testimonial1.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="testi-right">
                <h4>Roser Henrique</h4>
                <p><small>Project Manager, Apple</small></p>

                <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                <ul class="star_rating mt-4">
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li class="disable"><span><i class="fas fa-star"></i></span></li>                  
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="testimonial-item">
          <div class="row">
            <div class="col-lg-6">
              <div class="testi-img mb-4 mb-lg-0">
                <img src="img/testimonials/testimonial1.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="testi-right">
                <h4>Roser Henrique</h4>
                <p><small>Project Manager, Apple</small></p>

                <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                <ul class="star_rating mt-3">
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li class="disable"><span><i class="fas fa-star"></i></span></li>                  
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="testimonial-item">
          <div class="row">
            <div class="col-lg-6">
              <div class="testi-img mb-4 mb-lg-0">
                <img src="img/testimonials/testimonial1.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="testi-right">
                <h4>Roser Henrique</h4>
                <p><small>Project Manager, Apple</small></p>

                <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                <ul class="star_rating mt-3">
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li class="disable"><span><i class="fas fa-star"></i></span></li>                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!--================ End Testimonial Area =================-->




	<!--================ Start Portfolio Area =================-->
	<section class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<p class="top_text">Our Portfolio <span></span></p>
						<h2>Check Our Recent <br>
							Client Work </h2>
					</div>
				</div>
			</div>

			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<li data-filter=".popular">popular</li>
					<li data-filter=".latest"> latest</li>
					<li data-filter=".following">following</li>
					<li data-filter=".upcoming">upcoming</li>
				</ul>
			</div>

			<div class="filters-content">
				<div class="row portfolio-grid">
					<div class="grid-sizer col-md-3 col-lg-3"></div>
					<div class="col-lg-6 col-md-6 all following">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p1.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
								<p>Art, Illustration</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 all latest popular upcoming">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p4.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
								<p>Art, Illustration</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 all latest following">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p2.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
								<p>Art, Illustration</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 all latest upcoming">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p3.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
								<p>Art, Illustration</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 all popular">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p6.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
								<p>Art, Illustration</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 all popular latest following">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p5.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
								<p>Art, Illustration</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--================ End Portfolio Area =================-->

	<!--================ Start Blog Area =================-->
	<section class="blog-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<p class="top_text">Our blog <span></span></p>
						<h2>Latest Story From <br>
							Our Blog </h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<div class="thumb">
							<img class="img-fluid" src="img/b1.jpg" alt="">
						</div>
						<div class="short_details">
							<div class="meta-top d-flex">
								<a href="#"><i class="ti-user"></i> Admin post</a>
								<a href="#"><i class="ti-calendar"></i> Feb 14, 2019</a>
							</div>
							<a class="d-block" href="single-blog.html">
								<h4>Shall every fourth lesser have...</h4>
							</a>
							<div class="text-wrap">
								<p>
									Have whose a two night earth she set you creeping replenish place whales move Forth first him seed green.
								</p>
							</div>
							<a href="#" class="primary_btn2">Learn More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<div class="thumb">
							<img class="img-fluid" src="img/b2.jpg" alt="">
						</div>
						<div class="short_details">
							<div class="meta-top d-flex">
								<a href="#"><i class="ti-user"></i> Admin post</a>
								<a href="#"><i class="ti-calendar"></i> Feb 14, 2019</a>
							</div>
							<a class="d-block" href="single-blog.html">
								<h4>Shall every fourth lesser have...</h4>
							</a>
							<div class="text-wrap">
								<p>
									Have whose a two night earth she set you creeping replenish place whales move Forth first him seed green.
								</p>
							</div>
							<a href="#" class="primary_btn2">Learn More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<div class="thumb">
							<img class="img-fluid" src="img/b3.jpg" alt="">
						</div>
						<div class="short_details">
							<div class="meta-top d-flex">
								<a href="#"><i class="ti-user"></i> Admin post</a>
								<a href="#"><i class="ti-calendar"></i> Feb 14, 2019</a>
							</div>
							<a class="d-block" href="single-blog.html">
								<h4>Shall every fourth lesser have...</h4>
							</a>
							<div class="text-wrap">
								<p>
									Have whose a two night earth she set you creeping replenish place whales move Forth first him seed green.
								</p>
							</div>
							<a href="#" class="primary_btn2">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Blog Area =================-->

	<!--================ Start Brands Area =================-->
	<section class="brands-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="owl-carousel brand-carousel">
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo1.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo2.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo3.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo4.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo5.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo3.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Brands Area =================-->

	@endsection