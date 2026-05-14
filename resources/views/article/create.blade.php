<x-layout>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h1 class="display-1 text-center my-5">Carica il tuo articolo!</h1>
      </div>
      <div class="col-6">
        @if (session('message'))
        <div class="alert alert-success text-center">
          {{ session('message') }}
        </div>
        @endif
        
        <div class="p-5 sfondox mb-5">
        <form method="post" action="{{route('article.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="tags" class="form-label">Tags:</label>
            <input name="tags" id="tags" class="form-control" value="{{old('tags')}}">
            <span class="small"> Dividi ogni tag con una virgola</span>
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Titolo Articolo:</label>
            <input name="title" type="text" class="form-control" id="title"
            value="{{ old('title') }}">
          </div>
          <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo Articolo:</label>
            <input name="subtitle" type="text" class="form-control" id="subtitle"
            value="{{ old('subtitle') }}">
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Immagine articolo:</label>
            <input name="image" type="file" class="form-control" id="image">
          </div>
          <div class="mb-3 my-3">
            <label for="body" class="form-label">Corpo del testo:</label>
            
            <input name="body" type="text" class="form-control text-areacustom" id="body"
            value="{{ old('body') }}">
            
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">Categoria:</label>
            <select name="category" class="form-control text-capitalize" id="category">
              @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
            

            <div class="mt-2 py-5">
              <div class="container">
                <div class="row">
                  <div class="col-4">
                    <button type="submit" class="btn btn-success">Inserisci articolo</button>
                  </div>
                  <div class="col-4"></div>
                  <div class="col-4">
                    <a class="btn btn-outline-dark ms-5" href="{{route('welcome')}}">Home</a>
                  </div>
                </div>
              </div>
            </div>
            
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>
  