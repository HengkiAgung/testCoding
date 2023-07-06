@extends('layouts.app')
@section('content')

@foreach ($posts as $post)
  <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post->title}}</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$post->description}}</p>
    {{-- @foreach ($post->comment as $comment)
        
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$comment->comment}}</p>
    @endforeach --}}
    <form action="/comment/store" method="post">
      @csrf
      <input type="hidden" name="postId" value="{{$post->id}}">
      <div class="mb-6">
        <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tulis komentar</label>
        <input type="comment" id="comment" name="comment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
      </div>
      <button data-modal-hide="defaultModal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Posting!</button>
    </div>
  </form>
  </div>
@endforeach

@endsection