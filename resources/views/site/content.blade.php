<!--Pages-->
@include('site.content.page')
<!--/Pages-->

<!--Service-->
@include('site.content.service')
<!--Service-->

<!-- Portfolio -->
@include('site.content.portfolio')
<!--/Portfolio -->
<!--page_section Clients-->
<section class="page_section" id="clients">
    <h2>Clients</h2>
    <!--page_section-->
    <div class="client_logos"><!--client_logos-->
        <div class="container">
            <ul class="fadeInRight animated wow">
                <li><a href="javascript:void(0)"><img src="{{asset('img/client_logo1.png')}}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{asset('img/client_logo2.png')}}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{asset('img/client_logo3.png')}}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{asset('img/client_logo5.png')}}" alt=""></a></li>
            </ul>
        </div>
    </div>
</section>
<!--client_logos Clients-->
<!--Team-->
@include('site.content.team')
<!--/Team-->
