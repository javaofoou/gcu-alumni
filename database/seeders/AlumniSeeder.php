<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Http;

class AlumniSeeder extends Seeder
{
    public function run(): void
    {
        
        $file = database_path('data/alumni_data_original.json');
        $alumni = json_decode(file_get_contents($file), true);

        $supabaseUrl = env('SUPABASE_URL');
        $supabaseKey = env('SUPABASE_KEY');

        foreach (array_chunk($alumni, 500) as $chunk){
            $response = Http::withHeaders([
                'apikey' => $supabaseKey,
                'Authorization' => 'Bearer' . $supabaseKey,
                'Content-Type' => 'application/json',
                'Prefer' => 'resolution=merge-duplicates',
            ])->post("$supabaseUrl/rest/v1/alumni",$chunk);

            if($response->failed()){
                dump('Error uploading chunck:',$response->body());
                break;
            }
        }
        echo "Alumni data uploaded successfully"; 
    }
}
