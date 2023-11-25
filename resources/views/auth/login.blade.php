@include("base")

<div class="container mx-auto w-full md:w-[40%] bg-white rounded-xl shadow-md my-[5rem]">
    <div class="p-5 flex flex-col items-start justify-center gap-5">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter email..." class="w-full border p-2">

        <label for="">Password</label>
        <input type="password" name="password" placeholder="Enter password..." class="w-full border p-2">
        <button class="w-full text-center bg-emerald-500 text-white transition-all p-2">Sign in</button>
        <a href="{{ url('/auth/facebook') }}" class="w-full text-center bg-blue-600 text-white transition-all p-2">Sign in with facebook</a>
        <a href="{{ url('/auth/google') }}" class="w-full text-center bg-red-500 text-white transition-all p-2">Sign in with Google</a>
        <a href="{{ url('/auth/twitter') }}" class="w-full text-center bg-blue-500 text-white transition-all p-2">Sign in with Twitter</a>
    </div>
</div>