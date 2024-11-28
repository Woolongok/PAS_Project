<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container mx-auto p-4">
        <h3 class="text-2xl font-bold mb-4">Department</h3>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 border-b text-left">No</th>
                        <th class="px-6 py-3 border-b text-left">Department</th>
                        <th class="px-6 py-3 border-b text-left">Description</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $index => $department)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 border-b">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 border-b">{{ $department->name }}</td>
                        <td class="px-6 py-4 border-b">{{ $department->desc }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
