
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">

                <!-- footer menu -->
                <div class="footer-menu" style="">
                  <ul class="nav navbar-nav">
                    <li><a href="/supporters">Supporters</a> </li>
                    <li><a href="/news">News</a> </li>
                    <li><a href="/contact">Contact</a> </li>
                    <li><a class="btn-primary orange" href="/donate">Donate</a> </li>
                  </ul>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p>&copy; {{ PageBuilder::block('copyright') }} {!! date("Y") !!} Ren4Water</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ PageBuilder::js('jquery.min') }}"></script>
<script src="{{ PageBuilder::js('bootstrap.min') }}"></script>

@yield('scripts')
<script type="text/javascript">
    $(document).ready(function(){

        $('#blogSearch').submit(function(event) {
            event.preventDefault();
            window.location.href = '{{ PageBuilder::pageUrl(PageBuilder::block('blog_search_page')) }}/'+$('#query').val();
        });

        $("#scrollbutton").click(function() {
            $('html, body').animate({
                scrollTop: $("#sec1").offset().top
            }, 1000);
        });

        $("#scrollbutton2").click(function() {
            $('html, body').animate({
                scrollTop: $("#top").offset().top
            }, 1000);
        });

        var	menudesktop=function(){
            $('.dropdown-toggle').attr("data-toggle", "none");
        };

        var	menuonmobiles=function(){
            $('.dropdown-toggle').attr("data-toggle", "dropdown");
        };

        ww = $(window).width();
        if(ww  < 1200){
            menuonmobiles();
        }else{
            menudesktop();
        }

        $(window).on('resize', function(){
            ww = $(window).width();
            if(ww  < 1200){
                menuonmobiles();
            } else{
                menudesktop();
            }
        });

    });
</script>

{!! PageBuilder::block('footer_html', ['source' => true]) !!}
</body>
</html>
