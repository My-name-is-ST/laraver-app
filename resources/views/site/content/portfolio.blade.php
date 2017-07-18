@if(isset($portfolios) && is_object($portfolios))

    <section id="Portfolio" class="content">

        <!-- Container -->
        <div class="container portfolio_title">

            <!-- Title -->
            <div class="section-title">
                <h2>Portfolio</h2>
            </div>
            <!--/Title -->

        </div>
        <!-- Container -->

        <div class="portfolio-top"></div>

        <!-- Portfolio Filters -->
        <div class="portfolio">

            <div id="filters" class="sixteen columns">
                <ul class="clearfix">
                    <li><a id="all" href="#" data-filter="*" class="active">
                            <h5>All</h5>
                        </a></li>
                    @if(isset($filters) && is_object($filters))
                        @foreach($filters as $k=>$filter)
                            <li><a class="" href="#" data-filter=".{{$filter->name }}">
                                    <h5>{{$filter->name}}</h5>
                                </a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <!--/Portfolio Filters -->

            <!-- Portfolio Wrapper -->
            <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">

                @foreach($portfolios as $k=>$portfolio)

                        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four {{ $portfolio->filter->name }} isotope-item">
                            <a href="{{$portfolio->link}}">
                               <div class="portfolio_img">
                                        <img src="{{asset('img/'.$portfolio->img)}}" alt="{{$portfolio->name}}"/></div>

                                <div class="item_overlay">
                                    <div class="item_info">
                                        <h4 class="project_name">{{$portfolio->name }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                @endforeach


            </div>
            <!--/Portfolio Wrapper -->

        </div>
        <!--/Portfolio Filters -->

        <div class="portfolio_btm"></div>


        <div id="project_container">
            <div class="clear"></div>
            <div id="project_data"></div>
        </div>


    </section>
@endif