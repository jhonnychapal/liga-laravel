@extends('layouts.master')

@section('content1')
    <div class="site-blocks-cover overlay" style="background-image: url(assets/theme/images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">About Us</h1>
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maxime velit nostrum praesentium voluptatem. Mollitia perferendis dolore dolores.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="{{ url('assets/theme/images/about_1.jpg') }}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 pl-md-5">
            <h2 class="text-black">About Sportz</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis inventore eius, doloremque fugiat id laudantium. Delectus quisquam voluptates deleniti incidunt, iusto magni mollitia rerum! Ex perspiciatis incidunt, laborum repellat illo.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo maxime eligendi sunt autem consequuntur minima, quidem iure, nisi laboriosam, nam nostrum saepe voluptatibus repellat quam reiciendis. Accusantium omnis facilis eligendi.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <img src="{{ url('assets/theme/images/about_2.jpg') }}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 pr-md-5">
            <h2 class="text-black">Dedicated Team</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis inventore eius, doloremque fugiat id laudantium. Delectus quisquam voluptates deleniti incidunt, iusto magni mollitia rerum! Ex perspiciatis incidunt, laborum repellat illo.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo maxime eligendi sunt autem consequuntur minima, quidem iure, nisi laboriosam, nam nostrum saepe voluptatibus repellat quam reiciendis. Accusantium omnis facilis eligendi.</p>
          </div>
        </div>
      </div>
    </div>
@stop