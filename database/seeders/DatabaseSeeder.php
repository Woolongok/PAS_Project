<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Department;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            ['name' => 'PPLG', 'desc' => 'PPLG (Pengembangan Perangkat Lunak dan Gim) adalah jurusan yang berfokus pada pengembangan aplikasi, perangkat lunak, dan gim. Mahasiswa akan mempelajari berbagai bahasa pemrograman, konsep pengembangan perangkat lunak, serta cara menciptakan gim interaktif yang menarik.'],
            ['name' => 'Animasi 3D', 'desc' => 'Jurusan Animasi 3D mendalami teknik dan teknologi animasi dalam tiga dimensi. Mahasiswa belajar menciptakan karakter, lingkungan, dan efek visual yang realistis menggunakan perangkat lunak animasi terkini, mempersiapkan mereka untuk berkarier di industri film, gim, dan periklanan.'],
            ['name' => 'Animasi 2D', 'desc' => 'Jurusan Animasi 2D menitikberatkan pada pengembangan keterampilan dalam animasi dua dimensi. Mahasiswa akan mempelajari teknik menggambar digital, gerakan karakter, dan efek visual dalam 2D yang dinamis, sehingga siap berkarier di bidang animasi, media, dan hiburan.'],
            ['name' => 'DKV DG', 'desc' => 'DKV DG (Desain Komunikasi Visual - Digital Grafis) berfokus pada desain visual menggunakan teknologi digital. Mahasiswa akan mengeksplorasi berbagai aplikasi desain, teori warna, dan komposisi untuk menghasilkan karya grafis yang komunikatif, efektif, dan menarik di media digital.'],
            ['name' => 'DKV TG', 'desc' => 'DKV TG (Desain Komunikasi Visual - Tata Grafis) menitikberatkan pada tata letak dan komposisi visual. Mahasiswa mempelajari prinsip-prinsip desain komunikasi visual untuk menghasilkan karya yang efektif dalam menyampaikan pesan, baik dalam media cetak maupun digital.']
        ];
        $grades = [10, 11, 12];
        $classCounts = [2, 3, 2, 3, 2];

        foreach ($departments as $index => $department) {
            $departmentModel = Department::create(['name' => $department['name'], 'desc' => $department['desc']]);

            $classCount = $classCounts[$index];
            foreach ($grades as $grade) {
                for ($classNumber = 1; $classNumber <= $classCount; $classNumber++) {
                    Grade::factory()->create([
                        'nama' => "{$grade} {$departmentModel->name} {$classNumber}",
                        'department_id' => $departmentModel->id
                    ]);
                }
            }
        }
        Student::factory(100)->create();
    }
}
