@if($name)
    <div class="m-4 bg-green-100 px-3 py-2">Hi, {{$name}} 👋🏻</div>
@else
    <form hx-post="{{route('api.example')}}" class="m-4">
        <input id="name" name="name" placeholder="write name" class="border px-3 py-2">
        <button type="submit" class="text-white bg-indigo-700 px-3 py-2 hover:bg-indigo-900 rounded">Say Hi</button>
    </form>
@endif
