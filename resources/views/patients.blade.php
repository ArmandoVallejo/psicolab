@extends('templates.main')

@section('content')
    <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
        Patients
    </h1>
    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        Here you can see all the patients
    </p>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Phone</th>
                    <th scope="col" class="px-6 py-3">Birth Date</th>
                    <th scope="col" class="px-6 py-3">Sex</th>
                    <th scope="col" class="px-6 py-3">Genre</th>
                    <th scope="col" class="px-6 py-3">Reason for Visit</th>
                    <th scope="col" class="px-6 py-3">Assigned Psychologist</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $patient->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $patient->phone }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $patient->birth_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $patient->sex }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $patient->genre }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $patient->reason_for_visit }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $patient->user ? $patient->user->name : 'No assigned' }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
