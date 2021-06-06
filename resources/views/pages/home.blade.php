
@extends('layouts.main-layout')
@section('content')   
<body class="container">
   
        <div>
            <ul>
                @foreach ($cars as $car)
                    <li> 
                        <a href="{{ route('show', $car -> id) }}">  
                        {{$car -> name}} 
                                 
                        </a>   
                    </li>   
                @endforeach    
            </ul>             
        </div>           
    </body>
    @endsection   
</html>