<x-layout>
    <div class="row justify-content-center">
        <div class="col-12 my-5">
            <h1 class="text-center display-1">Registrati qui!</h1>
        </div>
        <div class="col-6 my-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    <form method="post" action="{{route('register')}}">
        @csrf
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input name="name" type="text" class="form-control" id="name">
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input name="email" type="email" class="form-control" id="email">
        </div>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="password">
        </div>
            @error('password_confirmation')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Conferma la tua Password</label>
            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
        </div>
        
        <button type="submit" class="btn btn-success">Registrati</button>
        <p class=" mt-3">Sei gia registrato? <a href="{{route('login')}}">clicca qui!</a></p>
    </form>
    </div>
</x-layout>