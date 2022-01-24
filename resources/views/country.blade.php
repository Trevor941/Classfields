<ul>
    @foreach ($data['data'] as $item) 
       <li>{{ $item["country"] }}</li>
     @endforeach
</ul>