<x-layout>
    <div class="row justify-content-center">
        <div class="col-12 my-5">
            <h1 class="text-center display-1">Fai il Login!</h1>
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
            <form method="post" action="{{route('login')}}">
                @csrf
                
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input name="password" type="password" class="form-control" id="password">
                </div>
                
                <button type="submit" class="btn btn-success">Accedi</button>
                <p class=" mt-3">Non sei registrato? <a href="{{route('register')}}">clicca qui!</a></p>
            </form>
        </div>
    </div>
</x-layout>