@extends('base')

@section('title', 'Home')


@section('content')

  <section class="banner_part">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-10">
          <div class="banner_text text-center">
            <div class="banner_text_iner">
              <h1> Saintmartine</h1>
              <p>Let’s start your journey with us, your dream will come true</p>
              <a href="#" class="btn_1">Discover Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="booking_part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="booking_menu">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="true">hotel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tricket-tab" data-toggle="tab" href="#tricket" role="tab" aria-controls="tricket" aria-selected="false">tricket</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="place-tab" data-toggle="tab" href="#place" role="tab" aria-controls="place" aria-selected="false">place</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="booking_content">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                <div class="booking_form">
                  <form action="#">
                    <div class="form-row">
                      <div class="form_colum">
                        <select class="nc_select">
                          <option selected>Choosace place </option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="form_colum">
                        <input id="datepicker_1" placeholder="Check in date">
                      </div>
                      <div class="form_colum">
                        <input id="datepicker_2" placeholder="Check in date">
                      </div>
                      <div class="form_colum">
                        <select class="nc_select">
                          <option selected>Persone </option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="form_btn">
                        <a href="#" class="btn_1">search</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="tricket" role="tabpanel" aria-labelledby="tricket-tab">
                <div class="booking_form">
                  <form action="#">
                    <div class="form-row">
                      <div class="form_colum">
                        <select class="nc_select">
                          <option selected>Choosace place </option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="form_colum">
                        <input id="datepicker_3" placeholder="Check in date">
                      </div>
                      <div class="form_colum">
                        <input id="datepicker_4" placeholder="Check in date">
                      </div>
                      <div class="form_colum">
                        <select class="nc_select">
                          <option selected>Persone </option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="form_btn">
                        <a href="#" class="btn_1">search</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="place" role="tabpanel" aria-labelledby="place-tab">
                <div class="booking_form">
                  <form action="#">
                    <div class="form-row">
                      <div class="form_colum">
                        <select class="nc_select">
                          <option selected>Choosace place </option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="form_colum">
                        <input id="datepicker_5" placeholder="Check in date">
                      </div>
                      <div class="form_colum">
                        <input id="datepicker_6" placeholder="Check in date">
                      </div>
                      <div class="form_colum">
                        <select class="nc_select">
                          <option selected>Persone </option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="form_btn">
                        <a href="#" class="btn_1">search</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
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
        @foreach($bestViewVoyages as $voyage)
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
        <a href="#" class="btn_1 text-cnter">Discover more</a>
      </div>
    </div>
  </section>

@endsection;
