<div class="row">
    <div class="col-lg-12">
        <div class="input-group">
            <input type="text" class="form-control" name="search" id="search-input" placeholder="Search for..." />
            <span class="input-group-btn">
                <button class="btn btn-primary" type="button" id="search-btn">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </div>

</div>


<br>
<br>

<div class="table-responsive">
    <table class="table table-striped " id="access-table">
        <thead>
            <th>User</th>
            <th>Read</th>
            <th>Update</th>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr data-id={{$user->id}}>
                    <td>{{ $user->name}}</td>
                    <td> <input type="checkbox" value="read" name="access[]"></td>
                    <td><input type="checkbox" value="update" name="access[]">
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $users->links() }}
</div>