<x-layout>

  @if(session('message'))
    <div class="alert alert-success">
        {{ session('message')}}
    </div>
  @endif

  <x-slot name="personalTitle">HomePage</x-slot>
  <h1 class="m-5 fw-bold"> Homepage </h1>
  
</x-layout>