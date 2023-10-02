<div class="flex flex-col h-screen">
    <section id="header-section" class="bg-gray-300 p-4">Head</section>
    <section id="content" class="grow p-4">
        <div
            hx-get="{{route('api.oob.other', ['other'=>'before'])}}"
            hx-target="closest section"
            hx-swap="outerHTML"
            class="text-indigo-600 hover:text-indigo-500 cursor-pointer">test red
        </div>
        <div
            hx-target="closest section"
            hx-swap="outerHTML"
            hx-get="{{route('api.oob.other', ['other'=>'after'])}}"
            class="text-indigo-600 hover:text-indigo-500 cursor-pointer">test blue
        </div>
    </section>
    <iframe class="mx-auto m-4" width="560" height="315" src="https://www.youtube.com/embed/2hMrk7A8Wf0?si=-b6erKu_5ZVGNCbL&amp;controls=0&amp;start=1614" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <section id="footer-section" class="bg-gray-800 text-white p-4">Footer</section>
</div>
