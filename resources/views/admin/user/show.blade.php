@extends('admin.layouts')

@section('content')
<div class=" ">
    <h2>Show User</h2>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('home') }}">Back</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                {{-- <th>Created At</th>
                <th>Updated At</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td> {{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    {{-- <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td> --}}
                    <td>
                        <a class="btn btn-success" href="{{ route('edit', $user->id) }}"> Edit </a>
                        <a class="btn btn-success" href="{{ route('destroy', $user->id) }}"> Delete </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
