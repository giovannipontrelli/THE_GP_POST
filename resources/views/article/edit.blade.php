<x-layout>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="display-1 text-center">Modifica il tuo articolo!</h2>
        </div>
        <div class="col-6">
          @if (session('message'))
          <div class="alert alert-success text-center">
            {{ session('message') }}
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
          <form method="post" action="{{route('article.update', compact('article'))}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
              <label for="tags" class="form-label">Tags:</label>
              <input name="tags" id="tags" class="form-control" value={{$article->tags->implode('name', ',')}}>
              <span class="small"> Dividi ogni tag con una virgola</span>
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Titolo Articolo:</label>
              <input name="title" type="text" class="form-control" id="title"
              value="{{$article->title}}">
            </div>
            <div class="mb-3">
              <label for="subtitle" class="form-label">Sottotitolo Articolo:</label>
              <input name="subtitle" type="text" class="form-control" id="subtitle"
              value="{{$article->subtitle}}">
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Immagine articolo:</label>
              <input name="image" type="file" class="form-control" id="image">
            </div>
            <div class="mb-3 my-3">
              <label for="body" class="form-label">Corpo del testo:</label>
              
              <input name="body" class="form-control" id="body" type="body">{{$article->body}}</input>
              
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Categoria:</label>
              <select name="category" class="form-control text-capitalize" id="category">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if($article->category && $category->id == $article->category->id) selected @endif>{{$category->name}}</option>
                @endforeach
              </select>
            </div>
              
  
              <div class="mt-2 py-5">
                <button type="submit" class="btn btn-primary">Inserisci articolo</button>
                <a class="btn btn-outline-primary" href="{{ route('welcome') }}">torna alla home</a>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </x-layout>
    