
<footer>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-3">

                <!-- footer menu -->
                <div class="footer-menu" style="">
                  <h5>Supporters</h5>
                  <ul>
                    <li><a href="/supporters-financial">Our Financial Sponsors</a> </li>
                    <li><a href="/supporters-suppliers">Our Strategic Suppliers</a> </li>
                    <li><a href="/supporters-partners">Our Field Partners</a> </li>
                  </ul>
                </div>

            </div>
            <div class="col-sm-3">

                <!-- footer menu -->
                <div class="footer-menu" style="">
                  <h5>News</h5>
                  <ul>
                    <li><a href="/news-water">Water News</a> </li>
                    <li><a href="/blog">Project Blog</a> </li>
                    <li><a href="/news-field">News From Field</a> </li>
                  </ul>
                </div>

            </div>
            <div class="col-sm-3">

                <!-- footer menu -->
                <div class="footer-menu" style="">
                  <h5>Contact</h5>
                  <ul>
                    <li><a href="/contact">Contact Form</a> </li>
                    <li><a href="/newsletter">Newsletter</a> </li>
                  </ul>
                </div>

            </div>
            <div class="col-sm-3">

                <!-- footer menu -->
                <div class="footer-menu" style="">
                  <h5>Donate</h5>
                  <ul>
                    <li><a class="btn-primary orange" href="/donate">Donate</a> </li>
                    <li><a href="#">Sponsor</a> </li>
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
