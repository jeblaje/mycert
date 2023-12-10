@props(['color'])


<div role="alert">
    <div class="bg-{{$color}}-500 text-white font-bold rounded-t px-4 py-2">
      {{$title}}
    </div>
    <div class="border border-t-0 border-{{$color}}-400 rounded-b bg-{{$color}}-100 px-4 py-3 text-red-700">
      <p>{{$description}}</p>
    </div>
  </div>