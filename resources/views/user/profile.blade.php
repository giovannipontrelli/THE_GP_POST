<x-layout>   
    <div class="container mb-5">
        <div class="col-12 my-5">
            <div class="form-group">
                <div class="mb-3">
                    <h1 class="text-center my-5">
                        Profilo di {{auth()->user()->name}}
                    </h1>
                </div>
                {{-- Current username --}}
                <div class="mb-3">
                    <label for="name">nome</label>
                    <input type="text" class="form-control-plaintext" value="{{ auth()->user()->name }}">
                </div>
                {{-- Current userEmail --}}
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control-plaintext" value="{{ auth()->user()->email }}">
                </div>
                <div class="mb-3">
                    <div class="edit-info">
                        {{-- <a class="btn btn-primary" href="{{ route('edit.info') }}">Edit Profile Information</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (auth()->user()->is_writer)
    <h2 class="text-center py-5 display-3">All publiched</h2>
    <div class="container-fluid py-5">
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
        <div class="row">
            
            @foreach ($user_article as $article)
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
        </div>
    </div>
    @endif
    
</x-layout>