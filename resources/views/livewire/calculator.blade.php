<div>
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="number" wire:model="number1" placeholder="Number 1" class="text-gray-500 placeholder-gray-400" />

            <select class="w-24 text-gray-500" wire:model="action">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>

            <input type="number" wire:model="number2" placeholder="Number 2" class="text-gray-500 placeholder-gray-400" />

            <button
                class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-indigo-90 rounded text-white"
                {{$disabled ? 'disabled' : ''}}
                wire:click="calculator">
                =
            </button>
        </div>
        <p class="text-3xl">{{ $result }}</p>
    </div>
</div>
