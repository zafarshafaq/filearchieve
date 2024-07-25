<form action="{{route('folders.update', $folder->id) }}" method="Post" id="update-folder-form">
    @csrf
    @method('put')

    <input type="hidden" name="parent_folder_id" value="{{$folder->id}}">
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        Folder Name</span>
                </div>
                <input type="text" class="form-control" name="name" id="name" value="{{ $folder->name}}" />
            </div>
            <!-- input-group -->
        </div>
    </div>

    <!-- row -->

</form>


{!! JsValidator::formRequest('App\Http\Requests\FolderRequest', '#update-folder-form') !!}