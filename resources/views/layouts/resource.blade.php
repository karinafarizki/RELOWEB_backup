@section('resources')
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('/js/creative.js')}}"></script> --}}
    <script src="{{asset('/js/creative.min.js')}}"></script>
    <script src="{{asset('/js/myjavascript.js')}}"></script>
{{-- 
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
    @stack('js')
    <!------ Include the above in your HEAD tag ---------->
@endsection
    