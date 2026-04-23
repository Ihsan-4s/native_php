<!DOCTYPE html>
<html>
<head>
    <title>Team Time</title>
</head>
<body>
    <h1>Team Members</h1>

    <form method="POST" action="/members">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="role" placeholder="Role">
        <input type="text" name="timezone" placeholder="Asia/Jakarta" required>
        <button type="submit">Add</button>
    </form>

    <hr>

    @foreach($members as $member)
        <div style="margin-bottom:10px;">
            <strong>{{ $member->name }}</strong>
            ({{ $member->role }}) -
            {{ $member->timezone }}

            <form method="POST" action="/members/{{ $member->id }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</body>
</html>
