@extends('welcome')

@section('title')
    <div class="pb-4">
        {{ $organizer->name }}

        <a href="/master/organizer" class="btn btn-secondary">Back</a>
        <a href="/master/organizer/edit/{{ $organizer->id }}" class="btn btn-warning">Edit</a>
        <a href="/master/organizer/delete/{{ $organizer->id }}" class="btn btn-danger">Delete</a>
    </div>
@endsection

@section('isi')
    <div class="card-body">
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td class="col-1"><strong>Facebook:</strong></td>
                    <td>
                        <p class="fs-5">{{ $organizer->facebook_link }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="col-1"><strong>X:</strong></td>
                    <td>
                        <p class="fs-5">{{ $organizer->x_link }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="col-1"><strong>Website:</strong></td>
                    <td>
                        <p class="fs-5">{{ $organizer->website_link }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="col-1"><strong>About</strong></td>
                    <td>
                        <p class="fs-5">{!! $organizer->description !!} </p>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection
