<?php
/**
 * Created by PhpStorm
 * User: Dujianjun
 * Date: 2020/4/7
 * Time: 下午5:06
 */
use Faker\Generator as Faker;

$student_ids = \App\Models\Student::all()->pluck('id');
$factory->define(\App\Models\Score::class, function (Faker $faker)use ($student_ids) {
    return [
        'student' => $faker->randomElement($student_ids),
        'subject' => $faker->randomElement(['语文','数学','英语','化学','生物','物理']),
        'score' => $faker->randomNumber(2)
    ];
});
