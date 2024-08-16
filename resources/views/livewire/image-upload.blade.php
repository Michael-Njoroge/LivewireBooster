<div class="p-6">
    <form class="flex flex-col w-[400px] py-16 mx-auto " wire:submit.prevent="save">
        @if($image)
            Preview:
            <div class="flex flex-wrap justify-center gap-6">
                @foreach($image as $im)
                    <img src="{{$im->temporaryUrl()}}" style="width: 110px; height: 90px;" class="object-cover">
                @endforeach
            </div>
        @endif
        <input type="file" wire:model="image" class="mb-4" multiple>

        @error('image')
            <span class="error">{{$message}}</span>
        @enderror

        <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">Save Photo</button>
    </form>
    <div class="flex flex-wrap gap-6">
        @foreach($images as $image)
            <img src="{{$image}}" style="width: 128px; height: 120px;" class="object-cover">
        @endforeach
    </div>
</div>
