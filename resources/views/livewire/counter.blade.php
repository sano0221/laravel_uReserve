<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>

    <div class="mb-8"></div> 
    
    こんにちは、{{ $name }}さん<br>
    <input wire:model.defer="name" type="text">
</div>

