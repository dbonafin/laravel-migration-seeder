@extends('layout.app')

@section('main-section')
    <h2>Our best offers for the last summer days</h2>

    <div>
        @foreach ($travel_packages as $package)
            {{-- Single house --}}
            <div>
                <div>Destination: {{ $package->destination }}</div>

                <div>Number of nights: {{ $package->nights }} </div>
                <div>Breakfast included: {{ $package->breakfast_included }}</div>
                <div>Total price: {{ $package->price }}&euro;</div> 
            </div>
            <br>
        @endforeach
    </div>
@endsection