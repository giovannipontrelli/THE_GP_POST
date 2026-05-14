<html>
    <body>
        <div class="container-fluid">
            <div class="row">
                <h1 class="py-5">Abbiamo ricevuto la tua richiesta.</h1>
            </div>
            <div class="col-12">
                <h4 class="mb-3">
                    per il seguente ruolo: {{ $info['role'] }}
                </h4>
                <p class="mb-3">ricevuta da: {{ $info['email'] }}</p>
                <h4 class="mb-3">messaggio: </h4>
                <p class="mb-3">{{ $info['message'] }}</p>
            </div>
        </div>
    </body>
</html>