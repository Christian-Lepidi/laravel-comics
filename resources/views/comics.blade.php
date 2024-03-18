@extends('layout.app')

@section('main-content')
<div class="main-section">
 @foreach ($comics as $comic)
 <div class="box"></div>
 @endforeach
</div>
     
 
@endsection

