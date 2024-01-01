@extends('backend.master')
@section('content')
<body class=" font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover">
	<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
		<!--Main Col-->
		<div id="profile" class="w-full mt-28 lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
			<div class="p-4 md:p-12 text-center lg:text-left">
				<!-- Image for mobile view-->
				<div class="block rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('{{ url('/users/',$user->image) }}')"></div>
				<h1 class="text-3xl font-bold pt-8 lg:pt-0">{{ $user->name }}</h1>
				<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start">{{ $user->email}}</p>
				<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start">{{ $user->contact }}</p>
				<p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start">{{$user->address}}</p>
				<p>
					<span><b>Contact: </b>0{{$user->contact}}</span>
					<span class="ml-7"><b>Email: </b>{{$user->email}}</span>
				</p>
                <div class="flex justify-end space-x-4 m-7">
                    <a href="{{ route('user.index') }}" type="button" class="btn btn-warning flex-none">Cancel</a>
                    <a href="{{ route('user.edit', $user->id) }}" class="flex-none">
                        <button class="btn btn-info">Update</button>
                    </a>
                </div>
			</div>
		</div>
	</div>
</body>
@endsection
