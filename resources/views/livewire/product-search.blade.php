<div class="container mx-auto py-16 px-8">
    <div class="mb-4">
        <input type="text" wire:model.lazy = "search" placeholder="Search for products">
    </div>
    <table class="table-auto w-full mb-4">
        <thead>
            <tr>
                <td class="py-2 px-3 bg-gray-100 border-b-2 text-left">#</td>
                <td class="py-2 px-3 bg-gray-100 border-b-2 text-left">Image</td>
                <td class="py-2 px-3 bg-gray-100 border-b-2 text-left">Title</td>
                <td class="py-2 px-3 bg-gray-100 border-b-2 text-left">Price</td>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $index => $product)
            <tr>
                <td class="py-2 px-3 border-b-2">{{$index + 1}}</td>
                <td class="py-2 px-3 border-b-2"><img class="w-16" src="{{$product->image}}"></td>
                <td class="py-2 px-3 border-b-2">{{$product->title}}</td>
                <td class="py-2 px-3 border-b-2">{{$product->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
        {{$products->links()}}
</div>
