<x-app-layout>
    


@include('shared.head')


<div class="col text-center text-white">
        <header class="py-4 bg-primary">
            <h1 class="mb-0"></h1>
        </header>
    </div>

    <div class="col text-center text-white">
        <header class="py-4 bg-primary">
            <h1 class="mb-0">{{$page_title}}</h1>
        </header>
    </div>

@yield('buttons')
@yield('content')
</div>
</x-app-layout>


@include('shared.footer')