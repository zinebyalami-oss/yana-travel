@extends('layouts.master')

@section('content')
    <h2 class="mb-4 text-center">✈️ Nos Voyages</h2>
    
    <h3 class="mb-3">🌍 Voyages Internationaux</h3>
    <div class="row">

        @foreach ($voyages->where('type_voyage_id', 2) as $voyage)
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <img src="/images/{{ $voyage->image }}" class="card-img-top" style="height:200px; object-fit:cover;">
                    <div class="card-body text-center" >
                        <h5>{{ $voyage->destination }}</h5>
                        <p>{{ $voyage->prix }} DH</p>

                    </div>
                </div>

            </div>
        @endforeach

    </div>


    <h3 class="mb-3">🌍 Voyages Nationaux</h3>
    <div class="row">

        @foreach ($voyages->where('type_voyage_id', 1) as $voyage)
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <img src="/images/{{ $voyage->image }}" class="card-img-top" style="height:200px; object-fit:cover;">
                    <div class="card-body text-center" >
                        <h5>{{ $voyage->destination }}</h5>
                        <p>{{ $voyage->prix }} DH</p>

                    </div>
                </div>

            </div>
        @endforeach

    </div>



    <h3 class="mb-3">🕋 Omra</h3>
    <div class="row">

        @foreach ($voyages->where('type_voyage_id', 3) as $voyage)
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <img src="/images/{{ $voyage->image }}" class="card-img-top" style="height:200px; object-fit:cover;">
                    <div class="card-body text-center" >
                        <h5>{{ $voyage->destination }}</h5>
                        <p>{{ $voyage->prix }} DH</p>

                    </div>
                </div>

            </div>
        @endforeach

    </div>
@endsection
