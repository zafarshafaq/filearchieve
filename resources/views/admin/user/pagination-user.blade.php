<table class="table table-striped " id="user-table">
    <thead>
        <th>User</th>
        <th>Edit</th>
        <th>Read</th>
    </thead>
    <tbody>


        @foreach ($users as $user)



            <tr>
                <td>{{ $user->name}}</td>
                <td> <input type="checkbox"></td>
                <td><input type="checkbox"></td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $users->links() }}