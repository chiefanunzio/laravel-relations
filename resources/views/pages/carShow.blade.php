@extends('layouts.main-layout')
@section('content')
    <ul>   
            <li>      
                CAR NAME => {{$car -> name}} <br>
                
                CAR MODEL => {{$car -> model}}  <br>
                       
                CAR KW=> {{$car -> kw}}   <br>   
                  
                CAR BRAND => {{$car -> brand -> name}}   
            </li>      
        </ul>
   
        <ol>
            @foreach ($car -> pilots as $pilot)
                <li>
                    PILOT NAME =>{{$pilot -> name}} <br>   
                    PILOT LASTNAME =>{{$pilot -> lastname}} <br>   
                    PILOT NATIONALITY =>{{$pilot -> nationality}}
                    
                </li>
            @endforeach
        </ol>
@endsection