@extends('layout.app', ['title' => 'AgendaPage'])
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            {!! $message !!}
            <a href="{{ route('agenda.create') }}" class="btn btn-primary h-25">Create Agenda</a>
        </div>
    </div>
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Judul Agenda</th>
                        <th>Description</th>
                        <th>Published</th>
                        <th colspan="3">Action</th>
                    </tr>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->judul_agenda }}</td>
                        <td>{{ $row->description }}</td>
                        <td>{{ $row->created_at->diffForHumans() }}</td>
                        <td><a href="{{ route('agenda.edit', $row->slug) }}" class="btn btn-warning">Edit</a></td>
                        <td><a href="{{ route('agenda.detail', $row->slug) }}" class="btn btn-success" style="margin-left: -20px;">Detail</a></td>
                        <td>
                            <form action="{{ route('agenda.destroy', $row->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure ? ')" style="margin-left: -20px;">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection
