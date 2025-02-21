<?php
$projects = [];

$project1 = new stdClass();
$project1->title = "Project Example";
$project1->description = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti placeat explicabo provident laborum ullam, iure laudantium quia debitis delectus dolor saepe unde quae iusto quaerat. Tempora, nostrum! Vel, saepe quis!";
$project1->techs = ["JavaScript", "PHP", "Python", "Go", "Rust"];

$project2 = new stdClass();
$project2->title = "Project Example";
$project2->description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias nulla, perspiciatis temporibus eaque";
$project2->techs = ["JavaScript", "PHP", "Python", "Go", "Rust"];

$project3 = new stdClass();
$project3->title = "Project Example";
$project3->description = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti placeat explicabo provident laborum ullam, iure laudantium quia debitis delectus dolor saepe unde quae iusto quaerat. Tempora, nostrum! Vel, saepe quis!";
$project3->techs = ["JavaScript", "PHP", "Python", "Go", "Rust"];

$project4 = new stdClass();
$project4->title = "Project Example";
$project4->description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias nulla, perspiciatis temporibus eaque";
$project4->techs = ["JavaScript", "PHP", "Python", "Go", "Rust"];

$project5 = new stdClass();
$project5->title = "Project Example";
$project5->description = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti placeat explicabo provident laborum ullam, iure laudantium quia debitis delectus dolor saepe unde quae iusto quaerat. Tempora, nostrum! Vel, saepe quis!";
$project5->techs = ["JavaScript", "PHP", "Python", "Go", "Rust"];

$project6 = new stdClass();
$project6->title = "Project Example";
$project6->description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias nulla, perspiciatis temporibus eaque";
$project6->techs = ["JavaScript", "PHP", "Python", "Go", "Rust"];

$projects[] = $project1;
$projects[] = $project2;
$projects[] = $project3;
$projects[] = $project4;
$projects[] = $project5;
$projects[] = $project6;
$bgColors = ["bg-red-400", "bg-blue-400", "bg-green-400", "bg-yellow-400", "bg-purple-400", "bg-pink-400", "bg-orange-400"];
?>

<ul class="grid grid-cols-2 gap-6">
  <?php
  foreach ($projects as $project) {
    echo "
      <li class='flex p-4 rounded-lg bg-zinc-800/60'>
        <div class='max-w-1/2'><img class='rounded-lg' src='https://picsum.photos/300' alt='project photo'></div>
        <div class='ml-4 flex flex-col h-full max-w-2/3'>
          <h2 class='font-semibold mb-2 text-lg'>{$project->title}</h2>
          <p class='text-gray-600'>{$project->description}</p>
          <ul class='flex flex-wrap gap-2 mt-auto'>
    ";
    foreach ($project->techs as $tech) {
      $randomColor = $bgColors[array_rand($bgColors)];
      echo "<li class='px-3 py-1 text-white rounded-lg $randomColor text-sm'>$tech</li>";
    }
    echo "</ul></div></li>";
  }
  ?>
</ul>