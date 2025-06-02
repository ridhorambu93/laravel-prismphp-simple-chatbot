<div class="p-6 max-w-xl mx-auto">
    @foreach($messages as $interaction)
    <div class="card-question">
        <p><strong>You:</strong> {{ $interaction->question }}</p>
    </div>
    <div class="card-answer mt-3">
        <p><strong>AI:</strong> {{ $interaction->answer }}</p>
    </div>
        <hr>
    @endforeach

    <form wire:submit.prevent="askQuestion" class="mt-4">
        <input type="text" wire:model="question" placeholder="Type your question..." required />
        <button type="submit" class="mt-2 bg-blue-500 text-white rounded px-4 py-2">Ask</button>
    </form>
</div>
