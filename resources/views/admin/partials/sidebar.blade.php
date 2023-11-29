<aside class="text-bg-dark">
    <nav class="my-3">
        <ul class=" p-0">
            <li class="text-center my-2 {{ Route::currentRouteName() === 'admin.home' ? 'active' : ''}}">
                <a class="btn btn-custom w-75 m-auto" href="{{route('admin.home')}}">Dashboard</a>
            </li>
            <li class="text-center my-2 {{ Route::currentRouteName() === '#' ? 'active' : ''}}">
                <a class="btn btn-custom w-75 m-auto" href="{{ route('admin.project.index')}}">Lista Progetti</a>
            </li>
        </ul>
    </nav>
</aside>
