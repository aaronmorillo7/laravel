@extends('plantilla')

@section('seccion')

    <h1>Este es mi equipo de trabajo</h1>

    @foreach($equipo as $item)
        <a href="{{ route('_nosotros', $item ) }}" class="h4 text-danger "> {{$item}} </a>
    @endforeach

    @if(!empty($nombre))
        @switch($nombre)
            @case($nombre=="Aaron")
            <h2 class="mt-5">Su nombre es {{ $nombre }}:</h2>
            <p>  {{ $nombre }} Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tortor urna, suscipit et lacus eget, semper gravida nisl. Praesent vehicula odio gravida lectus laoreet pharetra. Pellentesque malesuada, enim quis bibendum sodales, tellus ligula rutrum tellus, quis hendrerit mi dui eu massa. In luctus ultricies lectus, in commodo elit suscipit at. Nullam id odio lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed posuere mollis sagittis. Maecenas vulputate lorem et dignissim consectetur. Ut id ornare arcu</p>
            @break

            @case($nombre=="Aysen")
            <h2 class="mt-5">Su nombre es {{ $nombre }}:</h2>
            <p>  {{ $nombre }} Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tortor urna, suscipit et lacus eget, semper gravida nisl. Praesent vehicula odio gravida lectus laoreet pharetra. Pellentesque malesuada, enim quis bibendum sodales, tellus ligula rutrum tellus, quis hendrerit mi dui eu massa. In luctus ultricies lectus, in commodo elit suscipit at. Nullam id odio lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed posuere mollis sagittis. Maecenas vulputate lorem et dignissim consectetur. Ut id ornare arcu</p>
            @break
            
            @case($nombre=="Greymar")
            <h2 class="mt-5">Su nombre es {{ $nombre }}:</h2>
            <p>  {{ $nombre }} Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tortor urna, suscipit et lacus eget, semper gravida nisl. Praesent vehicula odio gravida lectus laoreet pharetra. Pellentesque malesuada, enim quis bibendum sodales, tellus ligula rutrum tellus, quis hendrerit mi dui eu massa. In luctus ultricies lectus, in commodo elit suscipit at. Nullam id odio lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed posuere mollis sagittis. Maecenas vulputate lorem et dignissim consectetur. Ut id ornare arcu</p>
            @break

        @endswitch
    @endif

    @foreach($notas as $item)
        <h4> <a rel="{{ route('notas_detalle'), $item }}"> {{ $item -> id }}</a></h4>
        <h4> {{ $item -> name }}</h4>
        <h4> {{ $item -> description }}</h4>
        <br>
    @endforeach

@endsection