@extends('welcome')

@section('title')
    Organizer
    <a href="/master/organizer/add" class="btn btn-primary">+Create</a>
@endsection

@section('isi')
    <div class="pt-4    ">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th class="col-2">Organizer Name</th>
                    <th class="col-7">About</th>
                    <th class="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($organizers as $organizer)
                    <tr onclick="window.location='/master/organizer/{{ $organizer->id }}';" style="cursor: pointer;">
                        <td>{{ $i++ }}</td>
                        <td> {{ $organizer->name }}</td>
                        <td> {!! $organizer->description !!}</td>
                        <td>
                            <a href="/master/organizer/edit/{{ $organizer->id }}" class="btn btn-warning">Edit</a>
                            <a href="/master/organizer/delete/{{ $organizer->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
