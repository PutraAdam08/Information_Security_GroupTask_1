<x-layout>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <x-slot:title>
        home
    </x-slot>
    <div x-data="{ showModal: false }" class="relative">
        <div class="container mx-auto px-24">
        <!-- Your content goes here -->
            <div class="max-w-auto ms-32 me-32 pb-4 rounded rounded-4 shadow-lg bg-white">
                <ul role="list" class="divide-y divide-gray-100 px-12 mt-24">
                    <li class="flex justify-between gap-x-6 py-5">
                        <div class="flex min-w-0 gap-x-4">
                        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">Leslie Alexander</p>
                            <p class="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
                        </div>
                        </div>
                    </li>
                </ul>
                <div class="mt-12 ms-4">
                    <x-button>New</x-button>
                </div>
            </div>
        </div>
        <div x-show="showModal" x-cloak
            class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
                
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold">Register</h2>
                    <button @click="showModal = false" class="text-gray-600 hover:text-gray-900">
                        &#x2715;
                    </button>
                </div>

                <x-form action="/update-route" method="PUT" enctype="multipart/form-data" type="submit">
                    <x-form-input :name="'name'" label="Name" placeholder="Enter your name" required />
                    <x-form-input :name="'usedId'" label="ID Number" placeholder="Enter your ID" required />
                    <x-form-input :name="'email'" label="Email" placeholder="Enter your email" required />
                    <x-input-select name="gender" label="Gender" :options="['Select' => 'Select one', 'F' => 'Female', 'M' => 'Male']" selected="Select" />
                    <x-form-input :name="'nationality'" label="Nationality" placeholder="Enter your natioality" required />
                    <x-form-input :name="'religion'" label="Religion" placeholder="Enter your religion" required />
                    <x-input-select name="maritalStatus" label="Marital Status" :options="['Select' => 'Select one', 'Yes' => 'Married', 'No' => 'Not Married']" selected="Select" />
                </x-form>
            </div>
        </div>
    </div>
</x-layout>