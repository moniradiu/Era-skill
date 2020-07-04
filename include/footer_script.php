<!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
     integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
 </script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
     integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
 </script>
 <script src="bootstrap/dist/js/bootstrap.min.js"
     integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
 </script>
 
 <script>
     $(document).ready(function () {
        //$("nav").css('background-color','rgb(15,62,66,0.80) !important');
        $(window).on("scroll", function () {

            if ($(this).scrollTop() > 0) {
                $("nav").before($("nav").addClass("animateIt"));
                $("body").toggleClass("down", ($(window).scrollTop() > 100));
            }
            else
            {
                $("nav").before($("nav").removeClass("animateIt"));
                $("body").toggleClass("down", ($(window).scrollTop() > 100));
            }

            
            
        });
    });
</script>