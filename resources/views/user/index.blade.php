@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Index') }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                           {{-- <td class="text-end">
                                                <div class="btn-group">
                                                     <a href="{{ route('user.show', $user) }}" class="btn btn-light">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">
                                                        <i class="material-icons">edit</i>
                                                    </a> 
                                                    <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger"
                                                        onclick="event.preventDefault();modalConfirmation('{{ __('Delete User') }}', '{{ __('Are you sure?') }}', 'user-delete-{{ $user->id }}')">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </div>
                                                <form method="POST" action="{{ route('user.destroy', $user) }}"
                                                    id="user-delete-{{ $user->id }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('user.create') }}" class="btn btn-primary">{{ __('Create') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
