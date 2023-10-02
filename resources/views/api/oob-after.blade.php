<section id="content" class="grow p-4">
    <div
        hx-get="{{route('api.oob.other', ['other'=>'before'])}}"
        hx-target="closest section"
        hx-swap="outerHTML"
        class="text-indigo-600 hover:text-indigo-500 cursor-pointer">test red
    </div>
</section>

<section
    id="header-section"
    hx-swap-oob="true"
    class="bg-blue-300 p-4">
    <h1>Blue Head</h1>
</section>

<div
    id="footer-section"
    hx-swap-oob="true"
    class="bg-blue-800 text-white p-4">
    Footer
</div>
