<x-layout>
    <div class="container">
        <div class="row">
            @if(session('message'))
            <div class="alert alert-success text-center">
                {{session('message')}}
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-12">
                <h1 class="text-center my-5 display-1 text-success">THE GP POST</h1>
            </div>
            <div class="col-12">
                <h2 class="diplay-3 text-center my-5">Ultime notizie:</h2>
            </div>
            <div class="col-12">
        {{-- item order selector --}}
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-success my-5">Info</button>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop3" type="button" class="btn btn-success dropdown-toggle my-5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                <a class="dropdown-item" href="{{ route('article.latest') }}">i più recenti</a>
                <a class="dropdown-item" href="{{ route('article.oldest') }}">i meno recenti</a>
                </div>
            </div>
        </div>
     
            <div class="row justify-content-around p-1">
                @auth
                @foreach ($articles as $article)
                <div class="col-12 col-md-3 p-1">
                    <div class="card customcard">
                        <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="small text-success">
                                @foreach ($article->tags as $tag)
                                #{{$tag->name}}
                                
                                @endforeach
                            </p>
                            <h5 class="card-title titolocar">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
                            <p class="small text-muted d-flex justify-content-between align-items-center">
                                @if($article->category)
                                <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
                                @else
                                <p class="small text-capitalize">
                                    Non Categorizzato
                                </p>
                                @endif
                            </p>
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-3 p-1 m-1"><p class=" text-dark">Autore: <a href="#" class="btn btn-light my-1">{{$article->user->name}}</a></p>
                                    </div>
                                    <div class="col-3 p-1 m-1">
                                        <p> Redatto il {{$article->created_at->format('d/m/Y')}}</p>
                                        
                                    </div>
                                    <div class="col-3 p-1 m-1">
                                        <a href="{{route('article.show' , compact('article'))}}" class="btn btn-outline-success">Leggi l'articolo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
                @endauth
                
            </div>
        </div>
        <section class="container my-5">
            <div class="row">
                <div class="col-12">
                    
                    <section class="container my-5">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="color-p display-3 text-center border-bottom my-5">RECENSIONI</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                
                                <!-- Swiper -->
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        
                                        <div class="swiper-slide d-flex flex-column justify-content-around align-items-center shadow">
                                            <h5 class="color-p">Dradone di Monterotondo</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, doloribus. Facilis maxime repudiandae quia ipsum.</p>
                                            <img class="img-carousel" src="https://picsum.photos/50" alt="">
                                            <div class="fs-4">
                                                <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-half text-warning"></i><i class="bi bi-star text-warning"></i><i class="bi bi-star text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="swiper-slide d-flex flex-column justify-content-around align-items-center shadow">
                                            <h5 class="color-p">Luca Ventuich</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, doloribus. Facilis maxime repudiandae quia ipsum.</p>
                                            <img class="img-carousel" src="https://picsum.photos/50" alt="">
                                            <div class="fs-4">
                                                <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-half text-warning"></i><i class="bi bi-star text-warning"></i><i class="bi bi-star text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="swiper-slide d-flex flex-column justify-content-around align-items-center shadow">
                                            <h5 class="color-p">Marco Dentamaro</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, doloribus. Facilis maxime repudiandae quia ipsum.</p>
                                            <img class="img-carousel" src="https://picsum.photos/50" alt="">
                                            <div class="fs-4">
                                                <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-half text-warning"></i><i class="bi bi-star text-warning"></i><i class="bi bi-star text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="swiper-slide d-flex flex-column justify-content-around align-items-center shadow">
                                            <h5 class="color-p">Mario Rossi</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, doloribus. Facilis maxime repudiandae quia ipsum.</p>
                                            <img class="img-carousel" src="https://picsum.photos/50" alt="">
                                            <div class="fs-4">
                                                <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-half text-warning"></i><i class="bi bi-star text-warning"></i><i class="bi bi-star text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="swiper-slide d-flex flex-column justify-content-around align-items-center shadow">
                                            <h5 class="color-p">Luigi Pincopallino</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, doloribus. Facilis maxime repudiandae quia ipsum.</p>
                                            <img class="img-carousel" src="https://picsum.photos/50" alt="">
                                            <div class="fs-4">
                                                <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-half text-warning"></i><i class="bi bi-star text-warning"></i><i class="bi bi-star text-warning"></i>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="swiper-button-prev text-success"></div>
                                    <div class="swiper-button-next text-success"></div>
                                    <div class="swiper-pagination"></div> 
                                    </div>
                                   
                                      
                                </div>
                                
                            </div>
                        </div>
                    </section>
                    
                </div>
                
            </div>                 
        </div>
    </div>    
</x-layout>