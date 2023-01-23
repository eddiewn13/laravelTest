<h1>Admin page</h1>

<table>

<thead>
    <td><b>Usernames</td>
    <td><b>First Names</td>
    <td><b>Last Names</td>
    <td><b>Phone Number</td>
    <td><b>Email</td>
    <td><b>Password</td>
    <td><b>Role</td>

</thead>

@foreach (DB::table('users')->get() as $user)

    <tr>
        <td>{{ $user->username }}</td>
        <td>{{ $user->firstname }}</td>
        <td>{{ $user->lastname }}</td>
        <td>{{ $user->phonenumber }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->password }}</td>
        <td>{{ $user->role_id }}</td>
        <td><a href="{{ route('user.edit', $user->id) }}">Edit</a></td>

        @if (Auth::user()->role_id == 3)
        <td><form method="POST" action="{{ route('user.destroy', $user->id) }}">
            @csrf
            <input type="submit" value="Delete">
        </form></td>
        @endif





    </tr>


@endforeach
</table>
