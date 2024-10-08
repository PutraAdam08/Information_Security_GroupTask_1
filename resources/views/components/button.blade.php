<div>
    <button  @click="showModal = true" type="{{$type ?? 'button'}}" onclick="{{$onClick}}" class="bg-{{$color ?? 'blue-500'}} hover:bg-{{$colorHv ?? 'blue-700'}} text-white font-bold py-2 px-4 rounded">
      {{ $slot }}
    </button>   
</div>