<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Test;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->truncate();
        $data = [
            [
                'category_id' => 4,
                'created_user_id' => 1,
                'name' => 'test 14',
                'code' => 'HK-492',
                'content_guide' => 'HK492 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 5,
                'created_user_id' => 1,
                'name' => 'test 13',
                'code' => 'HK-493',
                'content_guide' => 'HK493 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 6,
                'created_user_id' => 1,
                'name' => 'test 187',
                'code' => 'HK-494',
                'content_guide' => 'HK494 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 7,
                'created_user_id' => 1,
                'name' => 'test 165',
                'code' => 'HK-495',
                'content_guide' => 'HK495 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 8,
                'created_user_id' => 1,
                'name' => 'test 1786',
                'code' => 'HK-496',
                'content_guide' => 'HK496 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 9,
                'created_user_id' => 1,
                'name' => 'test 1786',
                'code' => 'HK-497',
                'content_guide' => 'HK497 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 10,
                'created_user_id' => 1,
                'name' => 'test 1786',
                'code' => 'HK-498',
                'content_guide' => 'HK498 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 11,
                'created_user_id' => 1,
                'name' => 'test 14534',
                'code' => 'HK-499',
                'content_guide' => 'HK499 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 12,
                'created_user_id' => 1,
                'name' => 'test 14534',
                'code' => 'HK-490',
                'content_guide' => 'HK490 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 13,
                'created_user_id' => 1,
                'name' => 'test 1453',
                'code' => 'HK-491',
                'content_guide' => 'HK492 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 14,
                'created_user_id' => 1,
                'name' => 'test 1464',
                'code' => 'HK-429',
                'content_guide' => 'HK429 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 15,
                'created_user_id' => 1,
                'name' => 'test 1468',
                'code' => 'HK-439',
                'content_guide' => 'HK439 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 16,
                'created_user_id' => 1,
                'name' => 'test 1786',
                'code' => 'HK-459',
                'content_guide' => 'HK459 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 17,
                'created_user_id' => 1,
                'name' => 'test 1765',
                'code' => 'HK-469',
                'content_guide' => 'HK469 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 18,
                'created_user_id' => 1,
                'name' => 'test 17867',
                'code' => 'HK-489',
                'content_guide' => 'HK489 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 19,
                'created_user_id' => 1,
                'name' => 'test 1756',
                'code' => 'HK-249',
                'content_guide' => 'HK249 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 20,
                'created_user_id' => 1,
                'name' => 'test 1786',
                'code' => 'HK-349',
                'content_guide' => 'HK349 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 21,
                'created_user_id' => 1,
                'name' => 'test 145',
                'code' => 'HK-549',
                'content_guide' => 'HK549 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 22,
                'created_user_id' => 1,
                'name' => 'test 17486',
                'code' => 'HK-949',
                'content_guide' => 'HK949 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 1,
                'created_user_id' => 1,
                'name' => 'test 1786',
                'code' => 'HK-649',
                'content_guide' => 'HK649 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 2,
                'created_user_id' => 1,
                'name' => 'test 1786',
                'code' => 'HK-1249',
                'content_guide' => 'HK1249 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 3,
                'created_user_id' => 1,
                'name' => 'test 1724',
                'code' => 'HK-2349',
                'content_guide' => 'HK2349 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 4,
                'created_user_id' => 1,
                'name' => 'test 14678',
                'code' => 'HK-5649',
                'content_guide' => 'HK5649 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
            [
                'category_id' => 5,
                'created_user_id' => 1,
                'name' => 'test 1786',
                'code' => 'HK-9649',
                'content_guide' => 'HK9649 - guide',
                'execute_time' => 45,
                'total_question' => 60,
                'free' => 1,
                'publish' => 1,
            ],
        ];
        foreach ($data as $item) {
            Test::create($item);
        }
    }
}
