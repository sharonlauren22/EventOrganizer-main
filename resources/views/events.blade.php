@extends('welcome')

@section('title')
    Events in Surabaya
@endsection

@section('isi')
    <div class="row justify-content-center">
        @foreach ($events as $event)
            <div class="col-4 p-2">
                <div class="card px-2 pt-2">
                    <img src="{{ asset('event.jpg') }}" class="card-img-top" alt="event">
                    <div class="card-body">

                        <h5 class="card-title">{{ $event->title }}</h5>

                        <div class="mt-auto">
                            <p class="card-text mb-2 fw-bold">{{ $event->getDate() }}</p>
                            <p class="card-text mb-2">{{ $event->venue }}</p>
                            <p class="card-text mb-2">Free</p>
                            <p class="card-text mb-2">Organizer : <br> {{ $event->organizer->name }} </p>

                            <a href="./{{ $event->id }}" class="btn btn-primary ">Details</a>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
