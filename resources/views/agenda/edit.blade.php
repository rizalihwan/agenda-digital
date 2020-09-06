@extends('layout.app', ['title' => 'AgendaCreate'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('agenda.update', $agenda->slug) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            Input Data Anda Disini :
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="jdl">Judul Agenda:</label>
                                <input type="text" name="judul_agenda" id="jdl" value="{{ old('judul_agenda') ?? $agenda->judul_agenda }}" class="form-control">
                                @error('judul_agenda')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="desc">Description Agenda:</label>
                                <textarea type="text" name="description" id="desc" class="form-control">{{ old('description') ?? $agenda->description }}</textarea>
                                @error('description')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success float-left">Update Data</button>
                            </div>
                            <div>
                                <a href="{{ route('agenda.index') }}" class="btn btn-danger ml-1">Back</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
