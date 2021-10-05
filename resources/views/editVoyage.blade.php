@extends('base')

@section('title', 'Travel : ' . $voyage->city . ' ' . $voyage->country)


@section('content')

  <section class="event_part section_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="event_slider owl-carousel" >
            <div class="single_event_slider">
              <div class="row justify-content-end">
                <div class="ol-lg-6 col-md-6">
                  <div class="event_slider_content">
                    <h5>Upcoming Event</h5>
                    <h2>{{ $voyage->city }} - {{ $voyage->country }}</h2>
                    <p>{{ $voyage->title }}</p>
                    <p>Note: <span>{{ $voyage->note }}</span> </p>
                    <p>View: <span>{{ $voyage->views }}</span> </p>
                    <p>Top Place: <span>{{ $voyage->topPlace }}</span> </p>
                    <div class="rating">
                      <span>Rating:</span>
                      <div class="place_review">
                        @switch($voyage->note)
                          @case(1)
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                          @break

                          @case(2)
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                          @break

                          @case(3)
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                          @break

                          @case(4)
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                          @break

                          @case(5)
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="fas fa-star"></i></a>
                          <a href="#"><i class="fas fa-star"></i></a>
                          @break

                          @default
                          <a href="#"><i class="far fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                          <a href="#"><i class="far fa-star"></i></a>
                        @endswitch
                      </div>
                    </div>
                    <a href="#" class="btn_1">Plan Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="tour_details_content section_padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="content_iner">
            <div>{{ $voyage->description }}</div>
            <div class="tour_details_content_btn">
              <a href="#" class="btn_1">Book Ticket</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection;
