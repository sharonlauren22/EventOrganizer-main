@extends('welcome')

@section('title')
    Event Category
    <a href="/master/event_category/add" class="btn btn-primary">+Create</a>
@endsection

@section('isi')
    <div class="pt-4    ">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Event Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($categories as $category)
                    <tr>

                        <td>{{ $i++ }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href='/master/event_category/edit/{{ $category->id  }}' class="btn btn-warning">Edit</a>
                            <a href='/master/event_category/delete/{{ $category->id  }}' class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
