<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex justify-end m-2 p-2">
            <a href="{{ route('admin.reservation.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Create Reservation</a>  
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
    <th scope="col" class="px-6 py-3">
    First Name
    </th>
    <th scope="col" class="px-6 py-3">
    Last Name
    </th>
    <th scope="col" class="px-6 py-3">
    Email
    </th>
    <th scope="col" class="px-6 py-3">
        Tell Number
        </th>
        <th scope="col" class="px-6 py-3">
           Table ID
            </th>
    <th scope="col" class="px-6 py-3">
        Date
        </th>
       
            <th scope="col" class="px-6 py-3">
                Guest
                </th>
    <th scope="col" class="px-6 py-3">
    Edit And Delete
    </th>
    </tr>
    </thead>
    <tbody>
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    @foreach ($reservations as $reservation)
        
   
    
     <td class="px-6 py-4">
    {{ $reservation->first_name }}
    </td>
    <td class="px-6 py-4">
        {{ $reservation->last_name }}
    </td>
    <td class="px-6 py-4">
         {{ $reservation->email }}
    </td>
    <td class="px-6 py-4">
         {{ $reservation->tel_number }}
    </td>
    <td class="px-6 py-4">
        {{ $reservation->table_id }}
       </td>
    
    <td class="px-6 py-4">
         {{ $reservation->res_date }}
        </td>
     
            <td class="px-6 py-4">
                 {{ $reservation->guest_number }}
                </td>
                <td
                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex space-x-2">
                    <a href="{{ route('admin.reservation.edit', $reservation->id) }}"
                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Edit</a>
                    <form
                        class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                        method="POST"
                        action="{{ route('admin.reservation.destroy', $reservation->id) }}"
                        onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    
        </div>
    </div>
</x-admin-layout>