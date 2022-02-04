<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{--  Form Begin  --}}

                    <form method="POST" action="{{ route('item.update', $item) }}">
                        @csrf
                        @method('PATCH')

                        {{--  ITEM CODE  --}}

                        <div>
                            <x-label for="code" :value="__('Item Code')" />

                            <x-input id="code" class="block mt-1 w-full" type="text" name="code" :value="$item->code" required autofocus />
                        </div>

                        {{--  ITEM NAME  --}}

                        <div class="block mt-4">
                            <x-label for="name" :value="__('Item Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$item->name" required autofocus />
                        </div>

                        {{--  CATEGORY   --}}

                        <div class="block mt-4">
                            <x-label for="category" :value="__('Category')" />

                            <select name="category">
                                <!-- <option value="Short" selected>Short</option>
                                <option value="Short">Shirt</option> -->
                                <option value="key chains" selected>key chains</option>
                                <option value="mugs">mugs</option>
                                <option value="tote bags">tote bags</option>
                                <option value="shirt">shirt</option>
                            </select>
                        </div>

                        <div class="block mt-4">
                            <x-label for="price" :value="__('Price')" />

                            <x-input id="price" class="block mt-1 w-full" type="number" name="price" :value="$item->price" required autofocus />
                        </div>

                        <div class="block mt-4">
                            <x-label for="stocks" :value="__('Available Stock')" />

                            <x-input id="stocks" class="block mt-1 w-full" type="number" name="stocks" :value="$item->stocks" required autofocus />
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
