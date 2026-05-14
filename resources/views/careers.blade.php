<x-layout>
    <div class="container-fluid mb-5">
        <div class="col-12">
            <div class="row">
                <h1 class="text-center py-5 display-1">Lavora con noi</h1>
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
            <div class="row roles">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <h3 class="text-center py-3">Admin</h3>
                        <div class="img">
                            <img src="https://img.freepik.com/free-vector/admin-concept-illustration_114360-2332.jpg?w=740&t=st=1695598793~exp=1695599393~hmac=acf112d57735534bd9cd0feb382e414555d160dbee35754e13efd865cc92ac60" class="card-img-top" alt="Admin">
                        </div>
                        <div class="card-body">
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem consequatur, repudiandae eum quasi commodi placeat expedita reiciendis tenetur quia quaerat libero dolorem blanditiis reprehenderit aliquam molestias modi. Cum, exercitationem ratione.</p>
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <h3 class="text-center py-3">Revisor</h3>
                        <div class="img">
                            <img src="https://img.freepik.com/free-vector/audit-service-assistance-financial-report-bookkeeping-analysis-company-finances-management-financier-making-corporate-expenses-assessment_335657-2317.jpg?w=740&t=st=1695599648~exp=1695600248~hmac=c41ad8ee4174ecfb1382610c7376dcf887420dbdcb429ab2a38aaad7053cd553" class="card-img-top" alt="Revisor">
                        </div>
                        <div class="card-body">
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem consequatur, repudiandae eum quasi commodi placeat expedita reiciendis tenetur quia quaerat libero dolorem blanditiis reprehenderit aliquam molestias modi. Cum, exercitationem ratione.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <h3 class="text-center py-3">Writer</h3>
                        <div class="img">
                            <img src="https://img.freepik.com/premium-vector/boy-girl-are-content-writers_118167-4331.jpg?w=740" class="card-img-top" alt="Writer">
                        </div>
                        <div class="card-body">
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem consequatur, repudiandae eum quasi commodi placeat expedita reiciendis tenetur quia quaerat libero dolorem blanditiis reprehenderit aliquam molestias modi. Cum, exercitationem ratione.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container mb-4">
        <div class="col-12">
            <div class="sfondox p-3">
            <div class="row">
                <h2 class="text-center py-5">Candidati qui!</h2>
            </div>
            <form action="{{route('careers.submit')}}" method="post">
                @csrf
                <div class="form-group">
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" value="{{ auth()->user()->email }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="roles">Ruoli</label>
                        <select class="form-select" name="role" id="roles">
                            <option value="admin">Admin</option>
                            <option value="revisor">Revisor</option>
                            <option value="writer">Writer</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="user-description">Perchè dovremmo assumerti?</label>
                        <textarea class="form-control" name="message" id="user-description" rows="3" placeholder="Parlaci di te in questa sezione..."></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit" class="btn btn-success">Candidati</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</x-layout>