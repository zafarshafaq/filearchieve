<table class="table table-striped mg-b-0">
    <thead>


        <tr>
            <th>#</th>
            <th>Project</th>
            <th>Folder</th>
            <th>File Name</th>
            <th>Location</th>
        </tr>
    </thead>
    <tbody>

        @foreach($files as $key => $file)
            <tr>
                <td>{{ $key + 1}}</td>
                <td>{{ $file->folder->parentRecursive->name}}</td>
                <td>{{ $file->folder->name }}</td>
                <td>{{ $file->name }}</td>
                <td> {{ $file->location}} </td>
            </tr>
        @endforeach


    </tbody>
</table>

{{ $files->links() }}