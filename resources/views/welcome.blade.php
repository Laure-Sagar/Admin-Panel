@extends('layouts.app')
@section('title','Home')

@section('content')
    <div class="p-6 max-w-sm mx-auto dark:bg-gray-800 rounded-xl shadow-md flex items-center space-x-4">
        <div class="flex-shrink-0">
            <img class="h-12 w-12" src="https://d29fhpw069ctt2.cloudfront.net/icon/image/37750/preview.svg" alt="ChitChat Logo">
        </div>
        <div>
            <div class="text-xl font-medium text-black dark:text-white" >ChitChat</div>
            <p class="text-gray-500">You have a new message!</p>
        </div>
    </div>

@endsection
