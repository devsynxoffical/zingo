<!-- jquery -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- swipper js -->
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<!-- lightcase js-->
<script src="{{ asset('assets/js/lightcase.js') }}"></script>
<!-- odometer js -->
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<!-- viewport js -->
<script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
<!-- aos js file -->
<script src="{{ asset('assets/js/aos.js') }}"></script>
<!-- nice select js -->
<script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
<!-- isotope js -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!-- tweenMax js -->
<script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
<!-- main -->
<script src="{{ asset('assets/js/main.js') }}"></script>



<script>
    // Show the popup form
    function showPopup() {
        document.getElementById("popupWrapper").style.display = "flex";
    }

    // Hide the popup form
    function hidePopup() {
        document.getElementById("popupWrapper").style.display = "none";
    }
</script>


<script>
    const sendTrailEmailRoute = @json(route('api.trail_mail'));
</script>

<script src="{{ asset('assets/custom/trail.js') }}"></script>
