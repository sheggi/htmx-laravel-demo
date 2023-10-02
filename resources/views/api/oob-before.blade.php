<section id="content" class="grow p-4">
    <div
        hx-target="closest section"
        hx-swap="outerHTML"
        hx-get="{{route('api.oob.other', ['other'=>'after'])}}"
        class="text-indigo-600 hover:text-indigo-500 cursor-pointer">test blue
    </div>
</section>

<section
    id="header-section"
    hx-swap-oob="true"
    class="bg-red-300 p-4">
    <h1>Red Head</h1>
</section>

<div
    id="footer-section"
    hx-swap-oob="true"
    class="bg-red-800 text-white p-4">
    Footer
</div>
