<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head>
<body>

<div x-data="{ showModal: false }" class="relative">

    <!-- Trigger Button -->
    <button @click="showModal = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Open Form
    </button>

    <!-- Modal -->
    <div x-show="showModal" x-cloak
         class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
            
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">Register</h2>
                <button @click="showModal = false" class="text-gray-600 hover:text-gray-900">
                    &#x2715;
                </button>
            </div>

            <x-form>
                <x-form-input :name="'name'" label="Name" placeholder="Enter your name" required />
                <x-form-input :name="'name'" label="Name" placeholder="Enter your name" required />
                <x-form-input :name="'name'" label="Name" placeholder="Enter your name" required />
                <x-input-select name="country" label="Country" :options="['us' => 'United States', 'ca' => 'Canada', 'uk' => 'United Kingdom']" selected="ca" />

            </x-form>
        </div>
    </div>
</div>

</body>
</html>
