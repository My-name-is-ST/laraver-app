@if(isset($data) && is_array($data))
    <h1>{{ $data['name'] }}</h1>
    <div>{{  $data['text'] }}</div>
@endif