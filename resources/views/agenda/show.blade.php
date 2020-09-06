@extends('layout.app', ['title' => 'AgendaDetail'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <em>Detail Agenda</em> Published On : {{ $agenda->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <b><label>Judul Agenda:</label></b>
                            <input type="text" class="form-control" value="{{ $agenda->judul_agenda }}" disabled>
                        </div>
                        <div class="form-group">
                            <b><label>Description:</label></b>
                            <textarea type="text" class="form-control" disabled>{{ $agenda->description }}</textarea>
                        </div>
                        <div>
                            <a href="{{ route('agenda.index') }}" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        Project By &hearts; <a href="https://github.com/rizalihwan" target="_blank">RizalIhwan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
