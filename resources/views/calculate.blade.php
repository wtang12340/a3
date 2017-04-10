@extends('layouts.master')


@push('head')
@endpush

@push('body')
@endpush

@section('footer')
	<p>Your Word Score is: {{$score}}</p>
@endsection
