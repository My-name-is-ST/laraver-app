@if(isset($clients))
    <section class="page_section" id="clients">
        <h2>Clients</h2>
        <!--page_section-->
        <div class="client_logos"><!--client_logos-->
            <div class="container">
                <ul class="fadeInRight animated wow">
                    @foreach($clients as $k=>$client)
                        <li><a href="{{$client->link}}"><img src="{{asset('/img').'/'.$client->icon}}" alt="{{$client->alias}}"></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endif