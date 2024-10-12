@extends('welcome')

@section('title')
    Organizer
@endsection

@section('isi')
    <form method="post">
        @csrf
        <div class="row py-2">
            <div class="col-6 px-3">
                <h4>Organizer Name</h4>
                <input type="text" name="name" class="form-control border border-black col" required>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-6 px-3">
                <h4>Facebook</h4>
                <input type="text" name="facebook_link" class="form-control border border-black col">
            </div>

            <div class="col-6 px-3">
                <h4>X</h4>
                <input type="text" name="x_link" class="form-control border border-black col">
            </div>


        </div>
        <div class="row py-2">
            <div class="col-6 px-3">
                <h4>Website</h4>
                <input type="text" name="website_link" class="form-control border border-black col">
            </div>
        </div>
        <div class="row py-2">
            <div class="col-12 px-3">
                <h4>About</h4>

                <div class="dfree-body mce-content-body form-control rows border border-black" contenteditable="true"
                    rows="3" spellcheck="false" id="editable-div">
                </div>

                <textarea name="description" hidden id="description"></textarea>

                <script>
                    function changeText() {
                        const divContent = document.getElementById('editable-div').innerHTML;

                        document.getElementById('description').value = divContent;
                        // alert(document.getElementById('description').value);
                    }

                    document.getElementById('editable-div').addEventListener('input', changeText);
                </script>
                <style>
                    .rows {
                        min-height: calc(1.5em * 5 + 1rem);
                        padding: 0.5rem;
                        border: 1px solid #ced4da;
                        border-radius: .25rem;
                        overflow-y: auto;
                    }
                </style>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-auto">
                <input type="submit" class="btn btn-success px-5" value="Save">
            </div>
            <div class="col-auto">
                <a href="/master/organizer" class="btn btn-danger px-5">Cancel</a>
            </div>
        </div>

    </form>
@endsection
