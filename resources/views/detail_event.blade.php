@extends('welcome')

@section('title')
    {{ $event->category->name }}
    <a href="/" class="btn btn-danger">Back</a>
    <h1 class="fw-bold">{{ $event->title }}</h1>
@endsection
@section('isi')
    <div class="py-3">
        <img src="{{ asset('event.jpg') }}" class="card-img-top w-50" alt="event">
    </div>

    <div class="row">
        <div class="col-6">
            <h3>Organizer</h3>
            <p class="fs-5">{{ $event->organizer->name }}</p>
        </div>
        <div class="col-6">
            <h3>Booking URL</h3>
            <a href='{{ $event->booking_url }}' class="fs-5">{{ $event->booking_url }}</a>
        </div>

        <div class="col-6">
            <h3>Date and Time</h3>
            <p class="fs-5">{{ $event->getDate() }}</p>
        </div>
        <div class="col-6">
            <h3>Location</h3>
            <p class="fs-5">{{ $event->venue }}</p>
        </div>
        <div class="col-12">
            <h3>About This Event</h3>
            <p class="fs-5">{!! $event->description !!}</p>
        </div>
        <div class="col-12">
            <h3>Tags</h3>

            @foreach ($event->arrTags() as $tag)
                <p class="fs-5 btn btn-outline-danger disabled">{{ $tag }}</p>
            @endforeach

        </div>
    </div>
@endsection
