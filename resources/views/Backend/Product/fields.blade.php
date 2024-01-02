<div class=" flex">
    <div>
        <input type="text" name="name" class="form-control" placeholder="Product name" value="{{old('name',$product->name)}}" required>
    </div>
    <div class=" mt-2">
        <select name="category_id" class="form-control">
            <option value="">Select a category</option>
            @foreach ($categories as $data)
            <option @if($data->id==$product->category_id) selected @endif
             name="category_id" value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
    </div>
    <div class=" mt-2">
        <input type="file" name="image" class="form-control" value="{{old('image',$product->image)}}">
    </div>
    <div class=" mt-2">
        <input type="text" name="price" class="form-control" placeholder="Product price" value="{{old('price',$product->price)}}" required>
    </div>
    <div class=" mt-2">
        <input type="number" name="quantity" class="form-control" placeholder="Product quantity" value="{{old('quantity',$product->quantity)}}">
    </div>
</div>

