<ul>
    @foreach($prescriptions as $prescription)
    <li>
<!--        <img src="/img/authors/author.jpg" width="50">-->
        <a href="{{route('prescription-list.detail',$prescription->id)}}">{{$prescription->name}}<br>
            <span>Posted On
            {{$prescription->created_at->format('d/m/Y')}}</span>
        </a>
    </li>
    @endforeach
</ul>

