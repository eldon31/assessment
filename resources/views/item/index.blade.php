<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @role('Guest')             
    <div class="flex justify-center">
        <video width="1280" height="720" controls>
                <source src="/images/animation_ads.mp4" type="video/mp4">
        </video>
    </div>
    @endrole



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                
                    <table class="table">
                        <tr>

                        @role('Guest')
                            <th>Name|>-----<|</th>
                            <th>Category|>-----<|</th>
                            <th>Price|>-----<|</th>
                            <th>Quantity|>-----<|</th>
                        @endrole

                        @role('Admin')
                            <th>Item Code|>-----<|</th>
                            <th>Item Name|>-----<|</th>
                            <th>Item Category|>-----<|</th>
                            <th>Item Price|>-----<|</th>
                            <th>Initial Quantity|>-----<|</th>
                            <th>Action|>-----<|</th>
                        @endrole

                        </tr>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                @role('Guest')
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->stocks }}</td>
                                @endrole
    
    

                                @role('Admin')
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->stocks }}</td>
                                    <td>
                                        <a href="{{ route('item.edit', $item) }}">Edit</a>
                                    </td>
                                @endrole

                                </tr>
                            @empty
                                <tr>
                                    <td>NO DATA</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
