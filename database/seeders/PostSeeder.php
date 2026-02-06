<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title'        => 'Pentingnya Kerja Tim dalam Lingkungan Perusahaan',
            'slug'         => 'pentingnya-kerja-tim',
            'category'     => 'Kerja Tim',
            'author'       => 'Yoongi',
            'author_role'  => 'Web Developer',
            'subtitle'     => 'Kolaborasi yang baik meningkatkan produktivitas kerja',
            'body'         => 'Isi konten lengkap mengenai kerja tim di sini...', // Sesuai kolom 'body' di migration
            'published_at' => '2025-10-12',
        ]);

        Post::create([
            'title'        => 'Pengalaman Mengikuti Pelatihan Internal',
            'slug'         => 'pengalaman-pelatihan-internal',
            'category'     => 'Pelatihan',
            'author'       => 'Aldina Sembiring',
            'author_role'  => 'UI/UX Designer',
            'subtitle'     => 'Meningkatkan kompetensi melalui program perusahaan',
            'body'         => 'Isi konten lengkap mengenai pelatihan internal...', // Sesuai kolom 'body' di migration
            'published_at' => '2025-10-05',
        ]);
    }
}