@extends('layouts.app')

@section('content')
        
<div class="container">
        <div class="col-md-12">
            <h1>{{$title}}</h1>
            @if(count($services) > 0)
                <ul class="list-group"> 
                     @foreach($services as $service)
                 <li class="list-group-item">{{$service}} </li>
                    @endforeach
                </ul>
            @endif
             <p>this is our services</p>
        </div>
</div>
@endsection