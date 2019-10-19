<!-- Wrapper End -->
<script type="text/javascript" src="/assets/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/assets/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="/assets/js/popper.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="/assets/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="/assets/js/snackbar.min.js"></script>
<script type="text/javascript" src="/assets/js/simplebar.js"></script>
<script type="text/javascript" src="/assets/js/tagsinput.js"></script>
<script type="text/javascript" src="/assets/js/parallax.js"></script>
<script type="text/javascript" src="/assets/js/scrollto.js"></script>
<script type="text/javascript" src="/assets/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.counterup.js"></script>
<script type="text/javascript" src="/assets/js/wow.min.js"></script>
<script type="text/javascript" src="/assets/js/progressbar.js"></script>
<script type="text/javascript" src="/assets/js/slider.js"></script>
<script type="text/javascript" src="/assets/js/timepicker.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDy4PSaTTTHkykjcw7s1pkJ5yJQWsCo97M"></script>
<script type="text/javascript" src="/assets/js/googlemaps1.js"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="/assets/js/script.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
</script>
