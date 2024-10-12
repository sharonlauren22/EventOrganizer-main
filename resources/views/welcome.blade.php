<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tiny.cloud/1/7jcg2rtzqy482mvkjynow0lwe8vl87nkw2phrzpnp4sq47ew/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#tinymce',
            plugins: ['quickbars'],
            toolbar: false,
            menubar: false,
            inline: true
        });
    </script>
    <style>
        .tags-input {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.5rem;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            min-height: 38px;
        }

        .tag {
            background-color: #007bff;
            color: white;
            border-radius: 0.25rem;
            padding: 0.25rem 0.5rem;
            margin: 0.25rem;
            display: flex;
            align-items: center;
        }

        .tag .remove {
            margin-left: 0.5rem;
            cursor: pointer;
            color: white;
        }

        .input-tag {
            border: none;
            outline: none;
            flex: 1;
            min-width: 120px;
        }
    </style>
</head>

<body>
    <div class="bg-light min-vh-100 mx-auto">
        <nav class="navbar navbar-expand-lg bg-dark border border-bottom-white py-3 fixed-top">
            <div class="container-fluid d-flex justify-content-center">
                <div class="navbar-nav gap-3 nav nav-underline ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white fs-5 {{ $page == 'master' ? 'active' : '' }}"
                            data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Master
                            Data</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/master/event_category">Master Event Category</a></li>
                            <li><a class="dropdown-item" href="/master/organizer">Master Organizer</a></li>
                            <li><a class="dropdown-item" href="/master/event">Master Event</a></li>
                        </ul>
                    </li>
                    <a class="nav-link text-white fs-5 {{ $page == 'events' ? 'active' : '' }}"
                        href="/">Events</a>
                </div>
            </div>
        </nav>

        <div class="container my-5 py-5 justify-content-center">
            <h1>@yield('title')</h1>

            @yield('isi')
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
