@extends('errors::minimal')

@section('title', __('Found'))
@section('code', '302')
{{-- @section('message', __('Inappropriate Query')) --}}
@section('message', __($exception->getMessage() ?: 'Found'))
