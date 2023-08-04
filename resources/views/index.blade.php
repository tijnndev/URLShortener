<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <link rel="icon" type="image/x-icon" href="{{ url('') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Add this line -->

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <!-- Initialise Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- CSRF Token for POST requests -->
    <script>
    const csrfToken = "{{ csrf_token() }}";
    </script>

</head>

<body>

    <div class="container d-flex align-items-center justify-content-center text-align-center">
        <div class="form d-flex align-items-center justify-content-center text-align-center ">
            <div class="card">
                <div class="input text-align-center">
                    <input type="text" name="url-input" id="url-input" required="required">
                    <label for="url-input">URL</label>
                </div>
                <div class="input text-align-center">
                    <input type="text" name="shortened" id="shortened" required="required" disabled
                        placeholder="Shortened URL">
                </div>
                <div class="input text-align-center">
                    <button class="btn btn-secondary shorten" type="button">Shorten</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('js/script.js') }}"></script>
</body>

</html>