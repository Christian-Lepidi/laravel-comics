@extends('layout.app')

@section('main-content')
<div class="main-section">
 @foreach ($comics as $comic)
 <div class="box"></div>
 @endforeach
</div>
     
 
@endsection

<style lang="scss" scoped>
   .main-section{
    width: 80%;
    margin: auto;
    display: flex;
    gap: 20px;
}

.box{
    width: calc(100% / 6 - 20px);
    aspect ratio: 1;
    background-color: orange;
   }
   
</style>