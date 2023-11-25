@include("base")
<div class="container mx-auto flex items-center justify-end my-[4rem]">
    <a class="w-[150px] text-center p-2 bg-blue-600 transition-all text-white rounded shadow-md"
     href="{{ url('reviews/') }}">Go back</a>
</div>

<div class="container mx-auto flex flex-col items-center justify-center"> 
    <div class="w-full bg-white rounded">
        <form method="POST" action="{{ url('store-review/') }}" class="flex flex-col items-start justify-center gap-5 p-2">
            @csrf
            @method("POST")
            <label for="">Email</label>
            <input class="w-full border p-2" type="email" name="email" placeholder="Enter email..">
            <label for="">Comment</label>
            <textarea class="w-full border p-2" name="comment" cols="30" rows="7">Enter comment</textarea>
            <button class="w-full p-2 bg-emerald-500 text-white rounded ">
                Save
            </button>
        </form>        
    </div>
</div>