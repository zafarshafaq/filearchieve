@extends('layouts.user')

@section('content')



<div class="table-responsive">


    <table class="table table-striped" id="table">
        <thead>
            <tr>
                <th>user</th>
                <th>action</th>
            </tr>

        </thead>
        <tbody>


        </tbody>
    </table>



</div>


<form action="{{ route('test.store')}}" method="post">
    @csrf

    <table class="table table-striped">

        <thead>
            <tr>
                <th>
                    user
                </th>

                <th>edit</th>
                <th>read</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($users as $user)

                <tr>
                    <td> {{$user->name }}</td>
                    <td>
                        <input type="checkbox" name="{{$user->name . '-' . 'edit'}}">
                    </td>
                    <td>
                        <input type="checkbox" name="{{$user->name . '-' . 'read'}}">
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    <button type="submit"> submit</button>
</form>



@endsection

@section('script')


<script>


    $('#table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "test",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' }

        ]

    });





</script>

@endsection