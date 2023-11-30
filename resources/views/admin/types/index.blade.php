@extends('layouts.admin')

@section('content')
    <h1 class="text-center mb-3">Admin Type</h1>
    <div class="row justify-content-center">
        <div class="col-6">

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

            <form action="{{route('admin.type.store')}}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add new type" name="name">
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
                    @foreach ($types as $type)
                        <tr>
                            <th scope="row">{{ $type->id }}</th>
                            <td>{{ $type->name }}</td>
                            <td>
                                <a class="btn btn-secondary btn-custom" href="#"><i class="fa-solid fa-pencil"></i></a>
                                <form class="d-inline-block" action="{{route('admin.type.destroy',$type)}}" method="POST" onsubmit="return confirm('Sicuro di voler cancellare {{ $type->name }}?')">
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

