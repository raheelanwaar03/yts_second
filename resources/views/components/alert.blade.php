<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            swal({
                text: "{!! $error !!}",
                icon: false,
                position: "top",
                timer: 3000,
                buttons: false,
                className: "swal-error",
            });
        </script>
    @endforeach
@endif

@if (session('success') || session('status'))
    <script>
        swal({
            icon: false,
            position: "top",
            timer: 3000,
            buttons: false,
            className: "swal-success",
        });
    </script>
@endif

@if (session('error'))
    <script>
        swal({
            text: "{!! session('error') !!}",
            icon: false,
            position: "top",
            timer: 3000,
            buttons: false,
            className: "swal-error",
        });
    </script>
@endif

<script>
    window.addEventListener('showAlert', event => {
        swal({
            title: event.detail.message,
            icon: false,
            position: "top",
            timer: 3000,
            buttons: false,
            className: "swal-success",
        });
    });
</script>
