<x-layout>

    <div class="container-fluid p-5 text-center">
        <div class="row justify content-center">
            <h1 class="display-1">
                {{$article->title}}
            </h1>
        </div>
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
        </div>
    <div class="container my-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-3">
                <div class="card customcard">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->subtitle}}</p>
                        <p class="small text-muted d-flex justify-content-between align-items-center">
                            Redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}<p>
                                <hr>
                                <p>{{$article->body}}</p>
                                <div class="text-center">
                                    <a href="{{route('article.index')}}" class="btn btn-outline-dark my-2"> Torna agli articoli</a>
                                    @if(Auth::user() && Auth::user()->is_revisor)
                                    <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success">accetta articolo</a>
                                    <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger">rifiuta articolo</a>
                                    @endif
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>