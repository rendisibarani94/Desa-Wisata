<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Page</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/uikit-rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uikit-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/css/uikit.min.css" />
</head>
<body>
    <div class="uk-container">
        <div class="uk-inline">
            <button class="uk-button uk-button-default" type="button">Parent <span uk-drop-parent-icon></span></button>
            <div class="uk-card uk-card-body uk-card-default" uk-drop="mode: click">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
        </div>



    </div>
{{-- <script src"{{ asset('js/uikit-icons.js') }}"></script>
<script src"{{ asset('js/uikit-icons.min.js') }}"></script>
<script src"{{ asset('js/uikit.js') }}"></script>
<script src"{{ asset('js/uikit.min.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.9/dist/js/uikit-icons.min.js"></script>
</body>
</html>