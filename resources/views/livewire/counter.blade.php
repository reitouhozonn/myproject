<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    {{-- The whole world belongs to you. --}}
    <h1>livewire-counter</h1>
    <h2>{{ $count }}</h2>

    <p><button wire:click="inc">+1</button></p>

    <input type="text" wire:model.lazy="message">
    <span>{{ $message }}</span>
    <br>
    @if (!$message)
        <p style="color:red; font-weight: bold">入力してください</p>
    @endif

    <div>
        <h2>users</h2>
        <ul>
            @foreach ($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    </div>
    
</div>
