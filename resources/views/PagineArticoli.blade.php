<x-layout>
  
  <x-slot name="personalTitle">Articoli</x-slot>
  

      <h1 class="m-5 fw-bold"> Articoli in Risalto </h1>
      
      <div class="container-fluid">
        <div class="row justify-content-around">
          @foreach ($arrayArticles as $article)
          <div class="card col-12 col-md-3 m-4">
            <img src="{{$article['image']}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$article['name']}}</h5>
              <p>-{{$article['brand']}}</p>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quibusdam similique quisquam iste </p>
              <div class="d-flex">
                <a href="{{route('paginaDettagliPage', ['id'=>$article['id']])}}" class="btn btn-primary me-4">Esplora</a>
                <p>{{$article['value']}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      
</x-layout>