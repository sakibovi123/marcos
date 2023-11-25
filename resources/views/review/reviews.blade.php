@include("base")
<div class="container mx-auto flex items-center justify-end my-[4rem]">
    <a class="p-2 bg-blue-600 transition-all text-white rounded shadow-md"
     href="{{ url('create-review/') }}">Create Review</a>
</div>
<div class="container mx-auto flex flex-col items-center justify-center"> 
    <div class="w-full bg-white rounded p-5">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="border p-2">Created at</th>
                    <th class="border p-2">Email</th>
                    <th class="border p-2">Comments</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                <tr class="text-center p-2 border">
                    <td class="border p-2">{{ $review->created_at }}</td>
                    <td class="border p-2">{{ $review->email }}</td>
                    <td class="border p-2">{{ $review->comment }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>