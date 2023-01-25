<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Vendors -->
<link rel="stylesheet" href="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('/vendors/bootstrap-icons/bootstrap-icons.css') }}">


<!-- Styles -->
<link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="stylesheet" href="{{ mix('css/app-dark.css') }}">

{{-- mazer datatbles --}}
{{-- <link
rel="stylesheet"
href="{{ asset('/vendors/simple-datatables/style.css') }}"
/>
<link rel="stylesheet" href="{{ asset('/css/pages/simple-datatables.css') }}" /> --}}

{{-- mazer datatbles --}}
<link
rel="stylesheet"
href="{{ asset('theme') }}/assets/extensions/simple-datatables/style.css"
/>
<link rel="stylesheet" href="{{ asset('theme') }}/assets/css/pages/simple-datatables.css" />

{{-- toast --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

@livewireStyles

{{ $style ?? '' }}