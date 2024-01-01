<div class=" flex">
    <div>
        <input type="text" name="name" id="name" class="form-control" placeholder="User's name" value="{{old('name',$user->name)}}" required>
    </div>
    <div class=" mt-2">
        <input type="email" name="email" id="email" class="form-control" placeholder="User's email" value="{{old('email',$user->email)}}" required>
    </div>
    <div class=" mt-2">
        <input type="text" name="phone" id="phone" class="form-control" placeholder="01XXXXXXXXX" value="{{old('phone',$user->phone)}}" required>
    </div>
    <div class=" mt-2">
        <input type="text" name="address" id="address" class="form-control" placeholder="User's address" value="{{old('address',$user->address)}}">
    </div>
    <div class=" mt-2">
        <input type="file" name="image" id="image" class="form-control" value="{{old('image',$user->image)}}">
    </div>

</div>

