
const loadProjects = (url) => {

    fetch(url)
        .then((res) => {
            if (!res.ok) {
                throw Error("Could not fetch data for that resource.");
            }
            return resjson();
        }).then(data => {
            console.log(data);

        }).catch(err => {


        });

}


const handleEdit = (url, modal_id) => {


    $.ajax({
        type: 'get',
        url: url,
        error: function (xhr, status, erro) {
            throw Error(error);
        },

        success: function (data) {
            $(document).find('#' + modal_id).find('.modal-body').html(data);
            $(document).find('#' + modal_id).modal('show');
        }
    });

}






const handleDelete = (url, form_id, resource) => {


    let conf = confirm("Are you sure to delete this " + resource + "?");
    if (conf) {
        $('#' + form_id).attr('action', url).submit();
    }

}


const handleShare = (url, modal_id) => {

    $.ajax({
        type: 'get',
        url: url,
        success: function (data) {
            $('#share-folder-container').html(data);
            $(document).find('#' + modal_id);
        }
    });
}




const handleAccess = (url, modal_id, folder_id) => {



    $.ajax({
        type: 'get',
        url: url,
        success: function (data) {
            $('#' + modal_id).find('.modal-body').html(data);
            $('#' + modal_id).modal('show');
            $('#access-form').append('<input type="hidden" value="' + folder_id + '" name="folder_id" />');


        }
    });
}









