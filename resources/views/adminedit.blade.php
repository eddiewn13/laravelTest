<h1>this is admin edit</h1>



<form action="{{ route('user.update', $user->id)}}">

    @if (Auth::user()->role_id == 2)

    <input type="text" name="username" value="{{ $user->username }}">
    <input type="text" name="firstname" value="{{ $user->firstname}}">
    <input type="text" name="lastname" value="{{ $user->lastname }}">
    <input type="text" name="phonenumber" value="{{ $user->phonenumber }}">
    <input type="text" name="email" value="{{ $user->email }}">
    <input type="text" name="password" value="{{ $user->password }}">
    <input type="number" name="role_id" max=2 min=1 value="{{ $user->role_id }}">

    @else

    <input type="text" name="username" value="{{ $user->username }}">
    <input type="text" name="firstname" value="{{ $user->firstname}}">
    <input type="text" name="lastname" value="{{ $user->lastname }}">
    <input type="text" name="phonenumber" value="{{ $user->phonenumber }}">
    <input type="text" name="email" value="{{ $user->email }}">
    <input type="text" name="password" value="{{ $user->password }}">
    <input type="number" name="role_id" max=3 min=1 value="{{ $user->role_id }}">

    @endif


    <input type="submit" value="Confirm changes">
</form>
















