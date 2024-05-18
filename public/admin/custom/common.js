
//Data Table
    $(document).ready(function() {
        var table = $('.datatable').DataTable();
    });


//Delete Notification
  $(document).on('click', '.delete_data', function(e) {
    e.preventDefault()
    let url = $(this).attr("href");

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't to Delete This!",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonColor: '#3085d6',
        confirmButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
            window.location.href = url
        }
    })

})


//Select2
    $('.search_box').select2({
        theme: 'bootstrap4'
    });


// Image Validation
function image_validation(
    image_id,
    show_image,
    message,
    size = "",
    custom_v_m = ""
) {
    $(image_id).change(function (e) {
        $(show_image).attr("src", "");
        $(show_image).closest("img").hide();
        let file_val = $(this).val();
        let file_size = this.files[0].size / 1024;
        let required_size = size != "" ? size : 1024;

        var fileExt = file_val.split(".").pop();

        if (fileExt == "jpg" || fileExt == "jpeg" || fileExt == "png") {
            if (file_size > required_size) {
                let msg =
                    custom_v_m != ""
                        ? custom_v_m
                        : parseFloat(file_size).toFixed(2) +
                          " kb Size is too large from required size";
                $(message).html(`<span class="text-danger">${msg}</span>`);
                return false;
            } else {
                $(message).html(
                    `<span class="text-success">Valid Image</span>`
                );
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(show_image).closest("img").show();
                    $(show_image).attr("src", e.target.result);
                };
                reader.readAsDataURL(e.target.files["0"]);
                event.stopImmediatePropagation();
            }
        } else {
            $(message).html(
                `<span class="text-danger">Invalid File Format</span>`
            );
        }
    });
}




// Preloader Function
const uiBlock = () => {
    $('#loading').addClass('loading')
    $('#loading_content').addClass('loading_content')
}

const uiBlockStop = () => {
    $('#loading').removeClass('loading')
    $('#loading_content').removeClass('loading_content')
}





