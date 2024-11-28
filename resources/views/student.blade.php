<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container mx-auto p-4">
        <h3 class="text-2xl font-bold mb-4">Halaman Student</h3>

        <div class="mb-4">
            <form action="{{ route('students.index') }}" method="GET">
                <input
                    type="text"
                    name="search"
                    placeholder="Search by name or email"
                    class="border border-gray-300 rounded px-4 py-2"
                    value="{{ request('search') }}"
                />
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 border-b text-left">No</th>
                        <th class="px-6 py-3 border-b text-left">Nama</th>
                        <th class="px-6 py-3 border-b text-left">Kelas</th>
                        <th class="px-6 py-3 border-b text-left">Department</th>
                        <th class="px-6 py-3 border-b text-left">Email</th>
                        <th class="px-6 py-3 border-b text-left">Alamat</th>
                        <th class="px-6 py-3 border-b text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $index => $student)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 border-b">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 border-b">{{ $student->name }}</td>
                        <td class="px-6 py-4 border-b">{{ $student->grade->nama }}</td>
                        <td class="px-6 py-4 border-b">{{ $student->department->name }}</td>
                        <td class="px-6 py-4 border-b">{{ $student->email }}</td>
                        <td class="px-6 py-4 border-b">{{ $student->alamat }}</td>
                        <td class="px-6 py-4 border-b">
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
