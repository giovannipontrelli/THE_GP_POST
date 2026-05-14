    <x-layout>
    <div class="container-fluid p-5 text-center"></div>
    <div class="row justify content-center">
        <h1 class="display-1">
            Bentornato, Admin {{auth()->user()->name}}
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
        <div class="container my-5 p-4">
            <div class="row justify-content-center">
                <div class="col-12 py-3">
                    <h2 class="text-center mb-3">Richieste per ruolo di amministratore</h2>
                    <x-requests-table user="$user"  :roleRequests="$adminRequests" role="amministratore"/>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-12 py-3">
                    <h2 class="text-center mb-3">Richieste per ruolo di revisore</h2>
                    <x-requests-table user="$user" :roleRequests="$revisorRequests" role="revisore"/>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-12 py-3">
                    <h2 class="text-center mb-3">richieste per ruolo redattore</h2>
                    <x-requests-table user="$user" :roleRequests="$writerRequests" role="redattore"/> 
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>I Tags della piattaforma</h2>
                    <x-metainfo-table :metaInfos="$tags" metaType="tags"></x-metainfo-table>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Le categorie della piattaforma</h2>
                    <x-metainfo-table :metaInfos="$categories" metaType="categorie"></x-metainfo-table>
                    <form action="{{route('admin.storeCategory')}}" method="POST" class="d-flex">
                        @csrf
                        <input type="text" name="name" class="form-controm me-2" placeholder="inserisci una nuova categoria">
                        <button type="submit" class="btn btn-success">aggiungi</button>
                    </form>
                </div>
            </div>
        </div>
        

</x-layout>