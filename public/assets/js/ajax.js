

const loadProjects = (url) => {
    console.log(url);

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


const handleDelete = (modal_id) => {
    // $("#delete-user-modal").find('form').attr('action', url);
    // $("#delete-modal").find('.modal-title').text("Delete " + res + "?");
    // $("#delete-modal").find('.modal-text').text("Are you sure you want to delet this " + res + " (" + res_name + ") ?");


    $('#' + modal_id).modal('show');
}



const handleEdit = (url, modal_id) => {


    fetch(url).then((res) => {

        if (!res.ok) {
            throw Error('Could not fetch data');
        }
        return res.json();

    }).then((data) => {



        $(document).find('#' + modal_id).find('.modal-body').html(data);

        $(document).find('#' + modal_id).modal('show');
    });

}






