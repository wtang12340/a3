@extends('layouts.master')

@push('head')
@endpush

@push('body')
@endpush

@section('footer')
	<p>Your Word Score is: @if(count($errors) > 0)@else{{$score}}@endif</p>
@endsection
