<div class=" flex">
    <div>
        <div>
            <label for="name" class="block mb-2  font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name" placeholder="User's name" value="{{old('name',$user->name)}}" required>
        </div>
        <div class=" mt-4">
            <label for="email" class="block mb-2  font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="email" placeholder="User's email" value="{{old('email',$user->email)}}" required>
        </div>
        <div class=" mt-4">
            <label for="phone" class="block mb-2  font-medium text-gray-900 dark:text-white">Contact Number</label>
            <input type="text" name="phone" id="phone" placeholder="01XXXXXXXXX" value="{{old('phone',$user->phone)}}" required>
        </div>
    </div>
    <div class=" ml-5">
        <div>
            <label for="address" class="block mb-2  font-medium text-gray-900 dark:text-white">Address</label>
            <input type="text" name="address" id="address" aria-describedby="address-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Your address" value="{{old('address',$user->address)}}">
        </div>
        <div class=" mt-4">
            <label for="image" class="block mb-2  font-medium text-gray-900 dark:text-white">Image</label>
            <input type="file" name="image" id="image" aria-describedby="image-explanation" value="{{old('image',$user->image)}}">
        </div>
    </div>
</div>

