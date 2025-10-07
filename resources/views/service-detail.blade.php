@extends('layouts.app')
@section('content')
  <div class="container py-5">
    <h2>{{ ucwords(str_replace('-', ' ', $slug ?? 'Service')) }}</h2>
    <p class="text-muted">This is a dummy service detail page for <strong>{{ $slug }}</strong>.</p>
    <a href="{{ url('/') }}" class="btn btn-outline-primary">Back to Services</a>
  </div>
@endsection
