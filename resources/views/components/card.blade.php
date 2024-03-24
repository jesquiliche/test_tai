<div class="bg-gray-50 border-2 border-gray-300 rounded-lg shadow-lg p-2 text-center m-4">
    @if($title)
    <p class="text-lg m-4"><b>{{title}}</b></p>
     @endif
   >
    {{$slot}}
</div>