<form {{ $attributes->merge(['method' => 'POST']) }}>
    @csrf

    {{ $slot }}

    <x-button color="green-500" colorHv="green-700" type="submit" onClick="">Confirm</x-button>
</form>