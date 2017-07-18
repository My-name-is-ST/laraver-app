@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @elseif(session('statusError'))
        <div class="alert alert-danger">
            {{session('statusError')}}
        </div>
    @elseif(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->getBag('default')->all() as $err)
                    <li>{{$err}}</li>
                @endforeach

            </ul>
        </div>
@endif