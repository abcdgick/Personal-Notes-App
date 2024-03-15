<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Create new note</h1>
        <form action="{{route('note.store')}}" method="POST" class="note">
            @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
            <div class="note-buttons">
                <button class="note-submit-button">Submit</button>
                <a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>
