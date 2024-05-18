<script>
    //Process
    $(document).on('click', '.pending_process', function(e) {
        e.preventDefault()
        let url = $(this).attr("href");

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't to Process This!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Processing!',
                    'Your Process has been Complete.',
                    'success'
                )
                window.location.href = url
            }
        })

    })


    // Cancel Invoice
    $(document).on('click', '.cancel_invoice', function(e) {
        e.preventDefault()
        let url = $(this).attr("href");

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't to Cancel This!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Processing!',
                    'Cancel Complete.',
                    'success'
                )
                window.location.href = url
            }
        })

    })
</script>
