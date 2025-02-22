<?php
$socials = [];

$social1 = new stdClass();
$social1->title = "GitHub";
$social1->href = "https://github.com";
$social1->iconName = "github";

$social2 = new stdClass();
$social2->title = "Twitter";
$social2->href = "https://twitter.com";
$social2->iconName = "twitter";

$social3 = new stdClass();
$social3->title = "LinkedIn";
$social3->href = "https://linkedin.com";
$social3->iconName = "linkedin";

$social4 = new stdClass();
$social4->title = "Instagram";
$social4->href = "https://instagram.com";
$social4->iconName = "instagram";

$socials[] = $social1;
$socials[] = $social2;
$socials[] = $social3;
$socials[] = $social4;
?>

<ul class="grid grid-cols-1 gap-4 place-items-center w-full">
  <?php
  foreach ($socials as $social) {
    echo "
      <li class='p-4 rounded-lg text-white bg-gray-800 w-1/2'>
        <a href='{$social->href}' target='_blank' class='font-semibold text-lg flex justify-between items-center'>
          <div>
            <span class='text-xl mr-3'>🔗</span>
            <span>{$social->title}</span>
          </div>
          <span class='text-xl mr-3'>↗️</span>
        </a>
      </li>
    ";
  }
  ?>
</ul>