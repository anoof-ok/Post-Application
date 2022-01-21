@extends('layouts.app')

@section('content')

<div>

<form action=" {{ route('posts') }} " method="post">
  @csrf
  
  <div class="form-group">
    
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control @error('body') border-danger @enderror" id="exampleFormControlTextarea1" rows="3" placeholder="@error('body') {{$message}} @enderror"></textarea>
    
    
  
  </div>
 
  <button type="submit" class="btn btn-primary">post</button>
</form>
</div>

@endsection