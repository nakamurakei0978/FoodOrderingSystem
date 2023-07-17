@extends('admin.layouts.master')
@section('title', 'Users')
@section('userbar')
    <a href="{{ route('admin.profile') }}">
        <li>Profile</li>
    </a>
    <a href="#">
        <li>Settings</li>
    </a>
    <form action="{{ route('logout.post') }}" method="POST">
        @csrf
        <button type="submit">
            <li>Logout</li>
        </button>
    </form>
@endsection
@section('content')
    <div class="btn-add">
        <h1>Users tables</h1>
        <button type="button">Add user</button>
    </div>
    <div class="t-wrapper">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">More</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$loop->iteration}}{{--$users->firstItem() + $loop->index--}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if ($user->status==0)
                                Active
                            @else
                                Inactive
                            @endif
                        </td>
                        <td>
                            <div class="dropdown" data-dropdown>
                                <span class="material-symbols-sharp btn-more" data-dropdown-button>more_vert</span>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li>Details</li>
                                        <li>Update</li>
                                        <li>Delete</li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="paginate">
            {{ $users->links('pagination::simple-bootstrap-4') }}
        </div> --}}
    </div>

@endsection
