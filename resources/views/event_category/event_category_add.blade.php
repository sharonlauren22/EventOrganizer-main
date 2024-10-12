@extends('welcome')

@section('title')
    Create Category
@endsection

@section('isi')
    <form method="post">
        @csrf
        <div class="p-4 my-4 row border border-dark">
            <label for="category_name" class="fs-3 col-2">Nama</label>
            <input type="text" name="category_name" class="form-control border border-black col" required>
            <input type="submit" value="Submit" class="btn btn-success col-2 mx-3">
        </div>

    </form>
@endsection
