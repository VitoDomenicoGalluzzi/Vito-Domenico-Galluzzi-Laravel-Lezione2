<x-layout>

    <div class="container-fluid mt-5 pt-5">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6 border rounded-5 shadow p-5">
                <form method="post" action="{{route('inviaEmail')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label fw-semibold">Nome Cognome</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Mario Sturniolo" aria-describedby="emailHelp">
                        <div class="form-text">Nome e Cognome di Battesimo</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label fw-semibold">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail" placeholder="Mario@merlo.it" aria-describedby="emailHelp">
                        <div class="form-text">Non condivideremo mai la tua E-mail con nessuno</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputMessage" class="form-label fw-semibold">Email address</label>
                        <textarea name="message" id="exampleInputMessage" cols="30" rows="10" placeholder="Ho un problema con me stesso :)" class="form-control"></textarea>
                        <div class="form-text">Scrivi un breve riassunto del tuo problema</div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-info mt-2"> Invia Segnalazione </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>