@extends('layouts.admin')

@section('content')
    <h1 class="text-center mb-3">Admin Tecnology</h1>
    <div class="row justify-content-center">
        <div class="col-4">

            @if(session('error'))
            <div class="alert alert-danger" role="alert">
                <p>{{session('error')}}</p>
            </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <p>{{session('success')}}</p>
                </div>
            @endif

            <form action="{{route('admin.tecnology.store')}}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add new tecnology" name="name">
                    <button class="btn btn-secondary btn-custom" type="submit" id="button-addon2">Add</button>
                </div>
            </form>

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
                            <td>{{ $tecnology->name }}</td>
                            <td>
                                <a class="btn btn-secondary btn-custom" href="#"><i class="fa-solid fa-pencil"></i></a>
                                <form class="d-inline-block" action="{{route('admin.tecnology.destroy',$tecnology)}}" method="POST" onsubmit="return confirm('Sicuro di voler cancellare questo campo?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-secondary btn-custom" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
