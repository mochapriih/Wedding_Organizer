@extends('layouts.app')


@section('title')
Wedding Organizer
@endsection


@section('content')
     <!-- Masthead-->
     <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat datang di</div>
                <div class="masthead-heading text-uppercase">Melati Wedding Organizer</div>
                
                <a class="btn btn-outline-primary btn-l text-uppercase" href="#contact">Hubungi Kami</a>
                <a class="btn btn-outline-primary btn-l text-uppercase" href="#portfolio">Paket Wedding</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section bg-light"  id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tentang Kami</h2>
                    <h3 class="section-subheading text-muted">Melati Wedding Organizer merupakan 
                    salah satu penyedia jasa pernikahan yang menjadi tempat dimana segala kebutuhan pernikahan tersedia disini</h3>
                </div>
                
                <div class="row text-center">
                @foreach ($itemAbout as $item)
                    <div class="col-md-4">
                    <img class="img-fluid" src="{{ Storage::url($item->image) }}" style="height: 250px;" alt="..." />
                        <h4 class="my-3">{{ $item->title}}</h4>
                        <p class="text-muted">{{ $item->description}}</p>
                    </div>
                @endforeach
                </div>
                
            </div>
        </section>

        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Paket Wedding</h2>
                    <h3 class="section-subheading text-muted">berikut daftar paket wedding yang tersedia</h3>
                </div>
                
                <div class="row">
                @foreach ($items as $item)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1{{$item->id}}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ Storage::url($item->image) }}" style="height: 250px;" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $item->title}}</div>
                               
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
        </section>

        @foreach ($items as $item)
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ url('frontend/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="modal-body">
                                
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{$item->title}}</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="{{ Storage::url($item->image) }}" alt="..." />
                                    <p>{{$item->description}}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Price :</strong>
                                            {{$item->price}}
                                        </li>        
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
       
       
       
        <!-- Team-->
        <section class="page-section bg-light"  id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Galeri</h2>
                    <h3 class="section-subheading text-muted">Kumpulan beberapa foto galeri Melati Wedding Organizer kami</h3>
                </div>
                <div class="row text-center">
                    @foreach ($itemGallery as $item)
                    <div class="col-md-4">
                    <img class="img-fluid" src="{{ Storage::url($item->image) }}" style="height: 250px;" alt="..." />
                        <p class="text-muted">-</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        
        <!-- Clients-->
        <!--  <img src="{{url ('frontend/assets/img/images.jpg') }}" class="rounded mx-auto my-auto d-block" alt="...">  -->
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
                    <h6 class="section-heading text-uppercase">WA / Telp : 08823284743</h6>
                        <div class="text-center">
                                <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Halo">
                                    <button class="btn btn-success btn-xl ">
                                    <i class="fab fa-whatsapp"></i> Whatsapp
                                    </button>
                                </a>
                        </div>
        
                </div>
                <br>
                
            </div>
        </section>
@endsection