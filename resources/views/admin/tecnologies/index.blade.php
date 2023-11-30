@extends('layouts.admin')

@section('content')
    <h1 class="text-center mb-3">Admin Tecnology</h1>
    <div class="row justify-content-center">
        <div class="col-6">

            {{-- Alert with session --}}
            @include('admin.partials.alert_success_error')

            {{-- Alert validation --}}
            @error('name')
                <div class="alert alert-danger" role="alert">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <form action="{{route('admin.tecnology.store')}}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add new tecnology" name="name">
                    <button class="btn btn-secondary btn-custom" type="submit" id="button-addon2">Add</button>
                </div>
            </form>

            <div class="pagination-custom my-2">
                {{ $tecnologies->links() }}
            </div>

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tecnologies as $tecnology)
                        <tr>
                            <th scope="row">{{ $tecnology->id }}</th>
                            <td>
                                <form id="edit-form" method="POST" action="{{ route('admin.tecnology.update' , $tecnology) }}">
                                    @csrf
                                    @method('PUT')
                                    <input class="form-hidden" type="text" name="name" value="{{ $tecnology->name }}">
                                </form>
                            </td>
                            <td>
                                <button onclick="edit_submit()" class="btn btn-secondary btn-custom"><i class="fa-solid fa-pencil"></i></button>
                                @include('admin.partials.delete_form',
                                [
                                    'route' => 'admin.tecnology.destroy',
                                    'element' => $tecnology,
                                    ])
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <script>
        function edit_submit(){
            const edit_form = document.getElementById("edit-form");
            edit_form.submit();
        }
    </script>
@endsection
