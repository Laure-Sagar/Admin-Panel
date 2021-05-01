<div>
    {{$text}}
    <form wire.submit.prevent='update'>
        <input type="text" wire:model.debounce.700ms="sub">
        <button type="submit" wire:click="foo">Test</button>
    </form>
</div>