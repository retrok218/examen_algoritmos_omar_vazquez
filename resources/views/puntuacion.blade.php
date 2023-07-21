
@extends('index')
@section('content')


    
  <form action="{{route('procesando_puntuacion')}}" method="post">
    @csrf
    <span>Puntuacion Alice </span>
    <input type="number" name="alice[1]" id="alice_1">
    <input type="number" name="alice[2]" id="alice_2">
    <input type="number" name="alice[3]" id="alice_3">
    <br>
    <span>Puntuacion Bob</span>
    <input type="number" name="bob[1]" id="bob_1">
    <input type="number" name="bob[2]" id="bob_2">
    <input type="number" name="bob[3]" id="bob_3">
    <br>
    <input type="submit" value="Puntuar"> 
  </form>

  
  
    


    @if (isset($puntos_alice))
    <table>
        <tr>
            <th>Participante</th>
            <th>Puntuacion</th>
            <th>Ronda</th>
            <th>Puntuacion</th>
        </tr>
       
        
        @foreach ($puntos_alice as $key=>$alic_punto  )
        

        <tr>
            <td>Alice</td>
           
            <td>{{$key}}</td> 
            <td>{{$alic_punto}}</td>
        </tr>
                        
        @endforeach
        @foreach ($puntos_bob as $key=>$bob_punto)
        <tr>
                <td>Bob</td>
                <td>{{$key}}</td>
                <td>{{$bob_punto}}</td>
        </tr>           
       
        @endforeach   
    @else
    <h4>sin datos</h4>
    @endif

    

    

</table>

@endsection