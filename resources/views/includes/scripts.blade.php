<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.2.0/bootbox.min.js"></script>
<script src="js/sendMail.js" type="text/javascript"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {

        var js, fjs = d.getElementsByTagName(s)[0];

        if (d.getElementById(id))
            return;

        js = d.createElement(s);

        js.id = id;

        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";

        fjs.parentNode.insertBefore(js, fjs);

    }(document, 'script', 'facebook-jssdk'));
</script>

@yield('scripts')