@extends('layouts.admin')

@section('content')
    <div class="project-create">
        <h1 class="text-center mb-5">Admin Project - Create</h1>

        <form action="{{ route('admin.project.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Titolo progetto: </label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="mb-3">
                        <label for="start_date" class="form-label fw-bold">Data inizio: </label>
                        <input type="date" class="form-control" id="start_date" name="start_date">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="end_date" class="form-label fw-bold">Data fine: </label>
                        <input type="date" class="form-control" id="end_date" name="end_date">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="status" class="form-label fw-bold">Stato: </label>
                        <select id="status" class="form-select" name="status">
                            <option value="In corso">In corso</option>
                            <option value="Completato">Completato</option>
                            <option value="Sospeso">Sospeso</option>
                        </select>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" name="is_group_project">
                        <label class="form-check-label fw-bold" for="gridCheck"> Lavoro di gruppo </label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Descrizione: </label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-secondary btn-submit-custom" type="submit">Crea</button>
            </div>


        </form>
    </div>
@endsection
