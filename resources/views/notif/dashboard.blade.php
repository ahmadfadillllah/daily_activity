@if (session('success'))
    <script>
        Swal.fire({
            title: "Success",
            text: "{{ session('success') }}",
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Ok, Thank You!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
    </script>
@endif

@if (session('info'))
    <script>
        Swal.fire({
            title: "Upps",
            text: "{{ session('info') }}",
            icon: "info",
            buttonsStyling: false,
            confirmButtonText: "Ok, Thank You!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
    </script>
@endif

@if (session('danger'))
    <script>
        Swal.fire({
            title: "Sorry",
            text: "{{ session('danger') }}",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, Thank You!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
    </script>
@endif
