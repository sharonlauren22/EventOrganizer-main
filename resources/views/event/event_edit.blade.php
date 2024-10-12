@extends('welcome')

@section('title')
    Events
@endsection

@section('isi')
    <form method="post">
        @csrf
        <div class="row py-2">
            <div class="col-6 px-3">
                <h4>Event Name</h4>
                <input type="text" name="title" class="form-control border border-black" required
                    value="{{ $event->title }}">
            </div>

            <div class="col-6 px-3">
                <h4>Date</h4>
                <input type="date" name="date" class="form-control border border-black" required
                    value={{ $event->date }}>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-6 px-3">
                <h4>Location</h4>
                <input type="text" name="venue" class="form-control border border-black" required
                    value="{{ $event->venue }}">
            </div>

            <div class="col-6 px-3">
                <h4>Start Time</h4>
                <input type="time" name="start_time" class="form-control border border-black" required
                    value="{{ $event->start_time }}">
            </div>
        </div>
        <div class="row py-2">
            <div class="col-6 px-3">
                <h4>Organizer</h4>
                <select class="form-select border border-black" required name="organizer_id">
                    @foreach ($organizers as $organizer)
                        <option value="{{ $organizer->id }}" @if ($event->organizer_id == $organizer->id) selected @endif>
                            {{ $organizer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 px-3">
                <h4>Category</h4>
                <select class="form-select border border-black" required name="event_category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($event->event_category_id == $category->id) selected @endif>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-6 px-3">
                <h4>Book URL</h4>
                <input type="text" name="booking_url" class="form-control border border-black"
                    value="{{ $event->booking_url }}">
            </div>
        </div>
        <div class="row py-2">
            <div class="col-12 px-3">
                <h4>About</h4>
                <div class="dfree-body mce-content-body form-control rows border border-black" contenteditable="true"
                    rows="3" spellcheck="false" id="editable-div">
                    {!! $event->description !!}
                </div>

                <textarea name="description" hidden id="description">{!! $event->description !!}</textarea>

                <script>
                    function changeText() {
                        const divContent = document.getElementById('editable-div').innerHTML;

                        document.getElementById('description').value = divContent;
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

        <div class="row py-2">
            <div class="col-12 px-3">
                <h4>Tags</h4>
                <div class="tags-input form-control border border-black m-0" id="tagsInput">
                    <input type="text" class="input-tag" id="tagInput"/>
                </div>
            </div>
            <input type="text" id="form-tag" name="tags" value="{{ $event->tags }}" hidden>
        </div>

        <div class="row p-2">
            <div class="col-auto">
                <input type="submit" class="btn btn-success px-5" value="Save">
            </div>
            <div class="col-auto">
                <a href="/master/event" class="btn btn-danger px-5">Cancel</a>
            </div>
        </div>

    </form>
    <script>
        const tagsInput = document.getElementById('tagsInput');
        const tagInput = document.getElementById('tagInput');
        let tags = [];

        let lama = document.getElementById("form-tag").value;

        if (lama !== "") {
            let tags = lama.split(',');
            tags.forEach(tag => addTag(tag));
        }

        tagInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && tagInput.value.trim()) {
                e.preventDefault();
                const tagValue = tagInput.value.trim();
                addTag(tagValue);
                tagInput.value = '';
                document.getElementById("form-tag").value = tags
            }
        });

        function addTag(value) {
            const tag = document.createElement('div');
            tag.className = 'tag';
            tag.innerText = value;

            const removeBtn = document.createElement('span');
            removeBtn.className = 'remove';
            removeBtn.innerText = 'x';
            removeBtn.onclick = () => {
                tagsInput.removeChild(tag);
                tags = tags.filter(tagItem => tagItem !== value);
                updateInputWidth();
            };

            tag.appendChild(removeBtn);
            tagsInput.insertBefore(tag, tagInput);
            tags.push(value);
            updateInputWidth();
        }

        function updateInputWidth() {
            const tagsArray = Array.from(tagsInput.children).filter(child => child.classList.contains('tag'));
            const totalWidth = tagsArray.reduce((acc, tag) => acc + tag.offsetWidth, 0);
            tagInput.style.width = `calc(100 % -$ {totalWidth + 10}px)`;
        }
    </script>
@endsection
