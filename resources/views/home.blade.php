@extends('layouts.app')
@section('content')
<h1>Home</h1>

<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur adipisci consequuntur impedit tempore, nesciunt. Itaque veritatis suscipit aut. Repellat ipsam tenetur nemo excepturi sed, enim cum facilis iusto et. Cumque!</p>

@endsection

@section('sidebar')
@parent
<p>This is appended to the sidebar</p>
@endsection