@extends("layouts.frontend")
@section("content")
    @include("frontend.include.slider")

    <section class="site-hero overlay" style="background-image: url({{asset("assets/frontend/img/hero_1.jpg")}})">
      <div class="container">
        <div class="row site-hero-inner align-items-center">
          <div class="col-md-7 text-left ml-auto">
            <h1 class="heading" data-aos="fade-up">Б & Б</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Biz daha iyisini yapana kadar en iyisi bu.</p>
            
          </div>
        </div>
        <a href="#next-section" class="smoothscroll scroll-down">Scroll Down</a>
      </div>
    </section>
    
    
  <section class="section visit-section" id="next-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="heading" data-aos="fade-up">Popular Properties</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up">
          <a href="property-single.html"><img src="{{asset("assets/frontend/img/img_1.jpg")}}" alt="Image placeholder" class="img-fluid rounded"> </a>
          <h3><a href="property-single.html">$3,450</a></h3>
          <div class="reviews-star float-left">
            46 Brookflower Rd, Houston TX
          </div>
        </div>
        <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="100">
          <a href="property-single.html"><img src="{{asset("assets/frontend/img/img_2.jpg")}}" alt="Image placeholder" class="img-fluid rounded"> </a>
          <h3><a href="property-single.html">$1,650</a></h3>
          <div class="reviews-star float-left">
            2724 20th Ave N, Houston TX
          </div>
        </div>
        <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="200">
          <a href="property-single.html"><img src="{{asset("assets/frontend/img/img_3.jpg")}}" alt="Image placeholder" class="img-fluid rounded"> </a>
          <h3><a href="property-single.html">$3,200</a></h3>
          <div class="reviews-star float-left">
            16321 Lone Corral Ct, Houston TX
          </div>
        </div>
        <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="300">
          <a href="property-single.html"><img src="{{asset("assets/frontend/img/img_4.jpg")}}" alt="Image placeholder" class="img-fluid rounded"> </a>
          <h3><a href="property-single.html">$1,200</a></h3>
          <div class="reviews-star float-left">
            4029 26th Ave S, Houston TX
          </div>
        </div>


        <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up">
          <a href="property-single.html"><img src="{{asset("assets/frontend/img/img_1.jpg")}}" alt="Image placeholder" class="img-fluid rounded"> </a>
          <h3><a href="property-single.html">$3,450</a></h3>
          <div class="reviews-star float-left">
            46 Brookflower Rd, Houston TX
          </div>
        </div>
        <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="100">
          <a href="property-single.html"><img src="{{asset("assets/frontend/img/img_2.jpg")}}" alt="Image placeholder" class="img-fluid rounded"> </a>
          <h3><a href="property-single.html">$1,650</a></h3>
          <div class="reviews-star float-left">
            2724 20th Ave N, Houston TX
          </div>
        </div>
        <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="200">
          <a href="property-single.html"><img src="{{asset("assets/frontend/img/img_3.jpg")}}" alt="Image placeholder" class="img-fluid rounded"> </a>
          <h3><a href="property-single.html">$3,200</a></h3>
          <div class="reviews-star float-left">
            16321 Lone Corral Ct, Houston TX
          </div>
        </div>
        <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="300">
          <a href="property-single.html"><img src="{{asset("assets/frontend/img/img_4.jpg")}}" alt="Image placeholder" class="img-fluid rounded"> </a>
          <h3><a href="property-single.html">$1,200</a></h3>
          <div class="reviews-star float-left">
            4029 26th Ave S, Houston TX
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- END section -->
  <section class="section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2>Happy Customers</h2>
        </div>
      </div>
      <div class="js-carousel-1 owl-carousel">

        <div class="testimonial text-center">
          <div class="author-image mb-3">
            <img src="{{asset("assets/frontend/img/person_1.jpg")}}" alt="Image placeholder" class="rounded-circle">
          </div>
          <blockquote>

            <p>&ldquo;Et quidem, impedit eum fugiat excepturi iste aliquid suscipit, tempore, delectus rem soluta voluptatem distinctio sed dolores, magni fugit nemo cum expedita. Totam a accusantium sunt aut autem placeat officia.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; Jean Smith</em></p>
          
        </div>

        <div class="testimonial text-center">
          <div class="author-image mb-3">
            <img src="{{asset("assets/frontend/img/person_2.jpg")}}" alt="Image placeholder" class="rounded-circle">
          </div>
          <blockquote>
            <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>

        <div class="testimonial text-center">
          <div class="author-image mb-3">
            <img src="{{asset("assets/frontend/img/person_3.jpg")}}" alt="Image placeholder" class="rounded-circle">
          </div>
          <blockquote>

            <p>&ldquo;Nostrum, alias, provident magnam sit blanditiis laboriosam unde quaerat, at ipsam, ratione maiores saepe nisi modi corporis quas! Beatae quam, quod aspernatur debitis nesciunt quasi porro ea iste nobis aliquid perspiciatis nostrum culpa impedit aut, iure blanditiis itaque similique sunt!&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>

      </div>
    </div>
  </section>
  
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <img src="{{asset("assets/frontend/img/about_1.jpg")}}" alt="Image" class="img-fluid rounded img-shadow">
        </div>
        <div class="col-lg-4 ml-auto">
          <h3 class="mb-3">About Me</h3>
          <p>I'm John Doe a realtor agent, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe omnis beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis nesciunt libero, officia, aliquam doloremque totam.</p>
          <p>Ratione natus expedita iusto, minus cumque vitae quo culpa reiciendis aspernatur aliquam veritatis magnam non, dicta nemo inventore, nisi quas dolores. Modi laboriosam sunt aliquid rem, deserunt quis? Porro, hic.</p>
          <p><img src="{{asset("assets/frontend/img/signature.jpg")}}" alt="Image" class="img-fluid w-25"></p>
          
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
          <span class="ion-android-calendar display-3 text-primary"></span>
          <h3 class="card-title">Deal On Time</h3>
          <p>Saepe omnis beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis nesciunt libero</p>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
          <span class="ion-android-create display-3 text-primary"></span>
          <h3 class="card-title">Good Reviews</h3>
          <p>Saepe omnis beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis nesciunt libero</p>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
          <span class="ion-android-hangout display-3 text-primary"></span>
          <h3 class="card-title">24/7 Support</h3>
          <p>Saepe omnis beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis nesciunt libero</p>
        </div>
      </div>
    </div>
  </section>

@endsection

@push("customJs")

@endpush

@push("customCss")

@endpush