<div class=" flex">
    <div>
        <input type="text" name="name" class="form-control" placeholder="User's name" value="{{old('name',$user->name)}}" required>
    </div>
    <div>
        <input type="hidden" name="role_id" placeholder="User's name" value="2">
    </div>
    <div class=" mt-2">
        <input type="email" name="email" class="form-control" placeholder="User's email" value="{{old('email',$user->email)}}" required>
    </div>
    <div class=" mt-2">
        <input type="text" name="phone" class="form-control" placeholder="01XXXXXXXXX" value="{{old('phone',$user->phone)}}" required>
    </div>
    <div class=" mt-2">
        <input type="text" name="address" class="form-control" placeholder="User's address" value="{{old('address',$user->address)}}">
    </div>
    <div class=" mt-2">
        <input type="file" name="image" class="form-control" value="{{old('image',$user->image)}}">
    </div>

</div>

