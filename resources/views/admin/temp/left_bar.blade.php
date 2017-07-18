<style>
    #fix li, #fix ul{
        display: block;
        position: relative;
        padding-left: 5px;
        margin-left: 0;
        padding-top: 5px;
    }
    #fix li a:hover{
        color: #df0031;
        text-decoration: none;
        font-style: oblique;
    }
</style>
<div style="text-transform: uppercase" class="col-lg-1" id="fix">
    <div><label>ADD</label>
        <ul>
            <li><a href="{{route('pagesAdd')}}">NEW PAGE</a></li>
            <li><a href="{{route('portfolioAdd')}}">NEW portfolio</a></li>
            <li><a href="{{route('serviceAdd')}}">NEW service</a></li>
            <li><a href="{{route('teamAdd')}}">NEW team</a></li>
        </ul>
    </div>
</div>