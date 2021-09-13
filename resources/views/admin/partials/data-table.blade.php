@push('head')
    <link href="{{asset('assets/vendor/data-tables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush


@push('js')
    <script src="{{asset('assets/vendor/data-tables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/data-tables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js-init/init-datatable.js')}}"></script>
@endpush
