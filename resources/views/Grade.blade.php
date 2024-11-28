<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container mx-auto p-4">
        <h3 class="text-2xl font-bold mb-4">Halaman Kelas</h3>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 border-b text-left">No</th>
                        <th class="px-6 py-3 border-b text-left">Kelas</th>
                        <th class="px-6 py-3 border-b text-left">Student List</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grades as $index => $grade)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 border-b">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 border-b">{{ $grade->nama }}</td>
                        <td class="px-6 py-4 border-b">
                            @foreach ($grade->students as $student)
                            <ul>
                                <li>{{ $student->name}}</li>
                            </ul>
                            @endforeach
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
