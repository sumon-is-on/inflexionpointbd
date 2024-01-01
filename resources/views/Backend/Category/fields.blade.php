<div class=" flex">
    <div>
        <input type="text" name="name" class="form-control" placeholder="Category name" value="{{old('name',$category->name)}}" required>
    </div>
    <div class=" mt-2">
        <input type="text" name="details" class="form-control" placeholder="Category details" value="{{old('details',$category->details)}}">
    </div>
</div>

