@extends('base')

@section('title', 'Voyages')


@section('content')

  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item text-center">
              <h2>Voyages</h2>
              <p>home . Voyages</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="top_place section_padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6">
          <div class="section_tittle text-center">
            <h2>Top Places to visit</h2>
            <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($voyages as $voyage)
          <div class="col-lg-6 col-md-6">
            <div class="single_place">
              <img src="{{ $voyage->picture }}" alt="">
              <div class="hover_Text d-flex align-items-end justify-content-between">
                <div class="hover_text_iner">
                  <a href="{{ route('voyage',$voyage->id) }}" class="place_btn">travel</a>
                  <h3>{{ $voyage->title }}</h3>
                  <p>{{ $voyage->city }}, {{ $voyage->country }}</p>
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
                    <span>({{ $voyage->views }} review)</span>
                  </div>
                </div>
                <div class="details_icon text-right">
                  <i class="ti-share"></i>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

@endsection;
