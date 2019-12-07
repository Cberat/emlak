@extends("layouts.frontend")
@section("content")


@include("frontend.include.slider")
  <!-- END head -->

  <section class="site-hero overlay page-inside" style="background-image: url({{asset("assets/frontend/img/prop_single_img.jpg")}})">
    <div class="container">
      <div class="row site-hero-inner align-items-center">
        <div class="col-md-7 text-left mr-auto" data-aos="fade-up">
          <h1 class="heading">$1,650</h1>
          <p class="sub-heading">2724 20th Ave N, Houston TX</p>
        </div>
      </div>
      <a href="#next-section" class="smoothscroll scroll-down">Scroll Down</a>
    </div>
  </section>
  <!-- END section -->


  <section class="section" id="next-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="{{asset("assets/frontend/img/img_1.jpg")}}" alt="Image" class="img-fluid rounded img-shadow">
        </div>
        <div class="col-md-6">
          <img src="{{asset("assets/frontend/img/img_2.jpg")}}" alt="Image" class="img-fluid rounded img-shadow">
        </div>
      </div>
      <div class="row mt-5">
        
        <div class="col-lg-8 ml-auto">
          <h3 class="mb-3">$1,650</h3>
          <p class="mb-5">2724 20th Ave N, Houston TX</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe omnis beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis nesciunt libero, officia, aliquam doloremque totam.</p>
          <p>Ratione natus expedita iusto, minus cumque vitae quo culpa reiciendis aspernatur aliquam veritatis magnam non, dicta nemo inventore, nisi quas dolores. Modi laboriosam sunt aliquid rem, deserunt quis? Porro, hic.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe omnis beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis nesciunt libero, officia, aliquam doloremque totam.</p>
          <p>Ratione natus expedita iusto, minus cumque vitae quo culpa reiciendis aspernatur aliquam veritatis magnam non, dicta nemo inventore, nisi quas dolores. Modi laboriosam sunt aliquid rem, deserunt quis? Porro, hic.</p>

          <p><a href="contact.html" class="btn btn-primary">Contact Me</a></p>
          
        </div>
      </div>
    </div>
  </section>

@endsection

@push("customJs")

@endpush

@push("customCss")

@endpush