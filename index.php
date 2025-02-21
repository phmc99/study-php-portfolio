<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Pedro</title>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-zinc-900 text-zinc-100">
  <div class="w-full h-[100vh] flex justify-center items-center mb-24">
    <section class="w-2/3 flex flex-col items-center">
      <img class="w-48 border-[2px] p-1 border-green-500 rounded-full mb-20" src="https://github.com/phmc99.png" alt="Me">
      <div class="flex flex-col gap-6 items-center">
        <p class="text-3xl">Hello World! Meu nome é <span class="text-green-500">Pedro Costa</span> e sou</p>
        <h1 class="text-7xl font-bold mb-4">Desenvolvedor PHP</h1>
        <p class="text-xl text-center">Transformo necessidades em aplicações reais, envolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>
      </div>
      <ul class="flex mt-20 gap-6">
        <?php
        $techs = ["JavaScript", "PHP", "Python", "Go", "Rust"];
        $bgColors = ["bg-red-400", "bg-blue-400", "bg-green-400", "bg-yellow-400", "bg-purple-400", "bg-pink-400", "bg-orange-400"];
        ?>
        <?php
        foreach ($techs as $tech) {
          $randomColor = $bgColors[array_rand($bgColors)];
          echo "<li class='$randomColor text-zinc-800 p-2 min-w-24 rounded-full text-center font-semibold'>$tech</li>";
        }
        ?>
      </ul>
    </section>
  </div>
  <section class="my-24">
    <div class="w-2/3 flex flex-col items-center mx-auto">
      <?php include('./components/jobCard.php') ?>
    </div>
  </section>
</body>

</html>