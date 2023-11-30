@extends('layouts.admin')

@section('content')
    <div class="project-create">
        <h1 class="text-center mb-5">Admin Project - Create</h1>

        <form action="{{ route('admin.project.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Titolo progetto: *</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="mb-3">
                        <label for="start_date" class="form-label fw-bold">Data inizio: *</label>
                        <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ old('start_date') }}">
                        @error('start_date')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="end_date" class="form-label fw-bold">Data fine: </label>
                        <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ old('end_date') }}">
                        @error('end_date')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="status" class="form-label fw-bold">Stato: </label>
                        <select id="status" class="form-select @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}">
                            <option {{ old('status') === 'In corso' ? 'selected' : '' }} value="In corso">In corso</option>
                            <option {{ old('status') === 'Completato' ? 'selected' : '' }} value="Completato">Completato</option>
                            <option {{ old('status') === 'Sospeso' ? 'selected' : '' }} value="Sospeso">Sospeso</option>
                        </select>
                        @error('status')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="is_group_project" class="form-label fw-bold">Lavoro di gruppo: </label>
                        <select id="is_group_project" class="form-select @error('is_group_project') is-invalid @enderror" name="is_group_project" value="{{ old('is_group_project') }}">
                            <option {{ old('is_group_project') === 'No' ? 'selected' : '' }} value="No">No</option>
                            <option {{ old('is_group_project') === 'Sì' ? 'selected' : '' }} value="Sì">Si</option>
                        </select>
                        @error('is_group_project')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Descrizione: *</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-secondary btn-custom" type="submit">Crea</button>
            </div>


        </form>
    </div>
@endsection
