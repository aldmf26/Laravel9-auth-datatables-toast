<script src="{{ mix('js/app.js') }}"></script>

<script src="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/vendors/tinymce/tinymce.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

{{-- datatbles mazer --}}
{{-- <script src="{{ asset('/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('/js/pages/simple-datatables.js') }}"></script> --}}

{{-- datatbles mazer --}}
<script src="{{ asset('theme') }}/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="{{ asset('theme') }}/assets/js/pages/simple-datatables.js"></script>

{{-- toast --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
<script>
    $(document).ready(function() {
        toastr.options.timeOut = 1000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('sukses'))
            toastr.success('{{ Session::get('sukses') }}');
        @endif
    });

</script>
@yield('scripts')
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

@livewireScripts
<script src="{{ asset('/js/main.js') }}"></script>

{{ $script ?? ''}}