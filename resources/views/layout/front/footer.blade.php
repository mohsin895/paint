
        <footer class="footer mt50 hidden-print">
            <div class="container">
                <div class="col-xs-3"> <span class="h2">Product search</span> <span></span>
                    <form id="productsearchfooter" class="suche" method="get" action="/product-search/">
                        <input id="footer-productsearchterm" type="text" class="form-control" value="" name="sword"
                            placeholder="Product">
                        <button id="footer-productsearchbtn" class="btn productsearchbtnfooter" type="submit"> <i
                                class="fa fa-search"></i> </button>
                    </form>
                    <div class="clearfix">&nbsp;</div>
                    <ul class="hidden-xs">
                        <li><a href="#" target="_blank"><i
                                    class="fa fa-angle-right"></i> Industrial Coatings</a></li>
                        <li><a href="#" target="_self"><i class="fa fa-angle-right"></i>
                                Brillux Design Award</a></li>
                    </ul>
                    <div class="socialmedia mt20"> <a title="Brillux op Facebook" target="_blank"
                            href="{{$gs->fb}}"><i class="fa fa-facebook"></i></a>
                        <a title="Twitter" target="_blank" href="{{$gs->twiter}}"><i
                                class="fa fa-twitter"></i></a>
                        <a title="Instagram" target="_blank" href="{{$gs->insta}}"><i
                                class="fa fa-instagram"></i></a>
                        <a title="YouTube" target="_blank" href="{{$gs->youtube}}"><i
                                class="fa fa-youtube fa-lg"></i></a>
                        <!-- <a title="Xing" target="_blank" href="{{$gs->mobile}}"><i
                                class="fa fa-xing"></i></a> -->
                        <a title="LinkedIn" target="_blank" href="{{$gs->lin}}"><i
                                class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-xs-6 hidden-xs"><span class="h2">Solutions for you</span>
                    <div class="two-collumns"><span><a href="#"><i
                                    class="fa fa-angle-right"></i> Tradesmen</a>We know what's important in your
                            business and what you need for your work.</span><span><a
                                href="#"><i class="fa fa-angle-right"></i>
                                Architects and planners</a>Our goal is to open up new perspectives for you – from a
                            creative and a financial point of view.</span><span><a
                                href="#"><i class="fa fa-angle-right"></i> Housing
                                sector</a>In addition to high-performance products and innovations, it's our
                            comprehensive services that offer you real added value.</span><span><a
                                href="#"><i class="fa fa-angle-right"></i> Owners</a>Whether
                            thermal insulation of facades, lofts and basement ceilings, enamel paints and woodstains,
                            paints and plaster, healthy living or creative interior design: Brillux is ..more than
                            paint! </span><span><a href="#"><i
                                    class="fa fa-angle-right"></i> Specialist retailers</a>Win and retain customers – we
                            want to help you achieve this with a competent service.</span></div>
                </div>
                <div class="col-xs-3"> <span class="h2">Contact</span>
                    <p class="big">
                        <a href="tel:{{$gs->mobile}}"><i class="fa fa-phone"></i> {{$gs->mobile}}</a>
                        <a href="mailto:{{$gs->email}}"><i class="fa fa-envelope-square"></i> {{$gs->email}}</a>
                    </p>
                </div>
                <!-- <div class="col-xs-3"><span class="h2">Locations</span>
                    <form action="/index.php" method="GET" name="haendler" id="bxfooternlsearchform"><input
                            type="hidden" name="id" id="id" value="7946" /> <input type="hidden" value="suche"
                            name="aktion" />
                        <input type="hidden" value="" maxlength="5" name="plz" id="bxfooternlsearchplz" />
                        <input type="hidden" value="" maxlength="40" name="str" id="bxfooternlsearchstreet" />
                        <input type="hidden" value="" maxlength="5" name="hnr" id="bxfooternlsearchhno" />
                        <input type="hidden" value="" maxlength="255" name="ort" id="bxfooternlsearchlocation" />
                        <input type="hidden" value="COM" maxlength="5" size="3" name="land"
                            id="bxfooternlsearchcountry" />
                    </form>
                    <input id="footer-branchessearchterm" class='bxfooternlsearchinput form-control' type="text"
                        placeholder="">
                    <button style="width:auto" id="footer-branchessearchbtn"
                        class='footer-branchessearchbtn btn btn-default'><i class="fa fa-angle-right"></i> Find
                        locations</button>
                </div> -->
             
            </div>

            <div class="footer-imprint">
                <div class="container">
                    <div class="row col-xs-6 text-left"> ©&nbsp;<script>document.write(new Date().getFullYear())</script>&nbsp;{{$gs->website_name}}</div>
                    <div class="row col-xs-6 text-right pull-right">
                        <ol class="breadcrumb">
                            <li><a href="/legal-notice/" title="Legal notice">Legal notice</a></li>
                            <li><a href="/privacy-policy/" title="Privacy Policy">Privacy Policy</a></li>
                            <li><a id='btncookiefooter' href='#gdpr-cookie-message'>Cookie settings</a></li>
                           
                        </ol>
                    </div>
                </div>
            </div>


        </footer>