@extends('welcome')

@section('title')
    Events
    <a href="/master/event/add" class="btn btn-primary">+Create</a>
@endsection

@section('isi')
    <div class="pt-4    ">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="col-auto">No</th>
                    <th class="col-auto">Event Name</th>
                    <th class="col-auto">Date</th>
                    <th class="col-auto">Location</th>
                    <th class="col-auto">Organizer</th>
                    <th class="col-3">About</th>
                    <th class="col-auto">Tags</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td> {{ $event->title }}</td>
                        <td> {{ $event->getdate() }}</td>
                        <td> {{ $event->venue }}</td>
                        <td> {{ $event->organizer->name }}</td>
                        <td> {!! $event->description !!}</td>
                        <td>
                            @foreach ($event->arrTags() as $tag)
                                <button class="btn btn-outline-danger disabled mb-1">{{ $tag }}</button>
                            @endforeach
                        </td>
                        <td>
                            <a href="/master/event/edit/{{ $event->id }}" class="btn btn-warning">Edit</a>
                            <a href="/master/event/delete/{{ $event->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
