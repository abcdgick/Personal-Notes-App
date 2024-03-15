<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Edit your notes</h1>
        <form action="{{route('note.update', $note)}}" method="POST" class="note">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here">
                {{$note->note}}
            </textarea>
            <div class="note-buttons">
                <button class="note-submit-button">Submit</button>
                <a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>
