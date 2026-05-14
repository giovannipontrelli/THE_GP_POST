<x-layout>
    <div class="container-fluid p-5 text-center"></div>
    <div class="row justify content-center">
        <h1 class="display-1">
            Bentornato, Revisore {{ auth()->user()->name }}
        </h1>
    </div>
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

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 py-3">
                <h2> Articoli da revisionare</h2>
                <x-articles-table :articles="$unrevisionedArticles"></x-articles-table>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-12 py-3">
                <h2> Articoli pubblicati</h2>
                <x-articles-table :articles="$acceptedArticles"></x-articles-table>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2> Articoli respinti</h2>
                <x-articles-table :articles="$rejectedArticles"></x-articles-table>
            </div>
        </div>
    </div>
</div>
    
</x-layout>