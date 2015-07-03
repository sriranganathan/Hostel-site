@extends('hostels')

@section('sidebar')
<li>
    <a href="/hostels">Overview</a>
</li>
<li>

    <a href="/hostels/zircon-a"> Zircon A</a>
</li>
<li >
    <a href="/hostels/zircon-b">Zircon B</a>
</li>
<li>
    <a href="/hostels/zircon-c">Zircon C</a>
</li>
@stop

@section('content')
<form class="form-horizontal" method="POST" action="/hostels/ {{ $details->name }}/update">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">
    <div class="col-lg-4">
        <h1 class="page-header">
            {{ $details->name }}
            <small>Home</small>
        </h1>
        
    </div>

</div>
        
<div class="row">
<div class="col-lg-4">
<h3>Description</h3>
<p>
    <div class="form-group">
    <input type="textarea" class="form-control" id="description" name="description" value="{{$details->description}}" />
    </div>

</p>
</div>
</div>

<div class="row">
<div class="col-lg-4">
<h3>Tags</h3>
<p>
    <div class="form-group">
    <input type="text" class="form-control" id="tags" name="tags" value="{{$details->tags}}" />
    </div>

</p>
</div>
</div>
<div class="row">
<div class="col-lg-2">
  <button type="submit" class="btn btn-success">Update</button>
</div>
</div>        
</form>  
    
@stop