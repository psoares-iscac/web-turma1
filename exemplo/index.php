<!doctype html>
<html lang="pt-PT">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Locais · Aragem</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,700&family=IBM+Plex+Mono:wght@400;500&family=IBM+Plex+Sans:wght@400;500;600&display=swap"
    />
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script src="js/menu.js" defer></script>
    <script src="js/locais.js" defer></script>
  </head>

  <body
    class="bg-slate-100 text-slate-900 font-['IBM_Plex_Sans',sans-serif] antialiased"
  >
    <?php 
require __DIR__ . "/inc/cabecalho.php";
?>
    &#9733;
    <main class="mx-auto max-w-6xl px-4 py-8 flex flex-col gap-10">
      <!-- Resumo -->
      <section class="flex flex-wrap items-end justify-between gap-4">
        <div>
          <!-- Exercício 3: o "Olá!" é trocado por js/saudacao.js conforme a hora -->
          <p id="saudacao" class="text-lg font-medium text-sky-800">Olá!</p>
          <p
            id="atualizacao"
            class="text-xs uppercase tracking-widest text-slate-500"
          >
            A obter a previsão…
          </p>
          <h1
            class="font-['Bricolage_Grotesque',sans-serif] text-3xl sm:text-4xl font-bold tracking-tight mt-1"
          >
            Os seus locais seguidos
          </h1>
        </div>
        <div class="flex flex-wrap items-center gap-2 text-sm">
          <span class="text-slate-500">Unidades:</span>
          <span
            class="rounded-full border border-sky-700 bg-sky-100 text-sky-800 px-3 py-1 font-medium"
            >°C · km/h</span
          >
          <span
            class="rounded-full border border-slate-300 px-3 py-1 text-slate-500"
            >°F · nós</span
          >
        </div>
      </section>

      <!-- Cartões dos locais: gerados por js/locais.js com dados da Open-Meteo -->
      <section aria-labelledby="t-locais">
        <h2 id="t-locais" class="sr-only">Locais seguidos</h2>
        <ul id="lista-locais" class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
          <li>
            <a
              href="local.html?id=guincho"
              class="h-full rounded-lg border-2 border-red-300 bg-white p-4 flex flex-col gap-3 hover:shadow-md transition-shadow"
            >
              <div class="flex items-start justify-between gap-2">
                <div>
                  <h3 class="font-semibold leading-tight">Praia do Guincho</h3>
                  <p class="text-xs text-slate-500">Cascais · costa</p>
                </div>
                <span
                  class="rounded-full bg-red-100 text-red-700 text-xs font-semibold px-2 py-0.5"
                  >Alerta</span
                >
              </div>
              <p
                class="font-['Bricolage_Grotesque',sans-serif] text-4xl font-bold"
              >
                17°
              </p>
              <dl
                class="grid grid-cols-3 gap-2 font-['IBM_Plex_Mono',monospace] text-sm tabular-nums"
              >
                <div>
                  <dt
                    class="font-sans text-[11px] uppercase tracking-wider text-slate-500"
                  >
                    Vento
                  </dt>
                  <dd>34 <span class="text-slate-500">NO</span></dd>
                </div>
                <div>
                  <dt
                    class="font-sans text-[11px] uppercase tracking-wider text-slate-500"
                  >
                    Chuva
                  </dt>
                  <dd>0,2 mm</dd>
                </div>
                <div>
                  <dt
                    class="font-sans text-[11px] uppercase tracking-wider text-slate-500"
                  >
                    Ondas
                  </dt>
                  <dd>2,4 m</dd>
                </div>
              </dl>
              <p class="text-xs text-red-700">
                Vento acima do seu limite de 30 km/h
              </p>
            </a>
          </li>
          <li>
            <a
              href="local.html?id=supertubos"
              class="h-full rounded-lg border border-slate-200 bg-white p-4 flex flex-col gap-3 hover:shadow-md transition-shadow"
            >
              <div class="flex items-start justify-between gap-2">
                <div>
                  <h3 class="font-semibold leading-tight">Supertubos</h3>
                  <p class="text-xs text-slate-500">Peniche · costa</p>
                </div>
                <span
                  class="rounded-full bg-emerald-100 text-emerald-700 text-xs font-semibold px-2 py-0.5"
                  >Bom</span
                >
              </div>
              <p
                class="font-['Bricolage_Grotesque',sans-serif] text-4xl font-bold"
              >
                18°
              </p>
              <dl
                class="grid grid-cols-3 gap-2 font-['IBM_Plex_Mono',monospace] text-sm tabular-nums"
              >
                <div>
                  <dt
                    class="font-sans text-[11px] uppercase tracking-wider text-slate-500"
                  >
                    Vento
                  </dt>
                  <dd>12 <span class="text-slate-500">E</span></dd>
                </div>
                <div>
                  <dt
                    class="font-sans text-[11px] uppercase tracking-wider text-slate-500"
                  >
                    Chuva
                  </dt>
                  <dd>0 mm</dd>
                </div>
                <div>
                  <dt
                    class="font-sans text-[11px] uppercase tracking-wider text-slate-500"
                  >
                    Ondas
                  </dt>
                  <dd>1,6 m</dd>
                </div>
              </dl>
              <p class="text-xs text-slate-500">
                Condições dentro dos seus limites
              </p>
            </a>
          </li>
          <li>
            <a
              href="local.html?id=torre"
              class="h-full rounded-lg border border-slate-200 bg-white p-4 flex flex-col gap-3 hover:shadow-md transition-shadow"
            >
              <div class="flex items-start justify-between gap-2">
                <div>
                  <h3 class="font-semibold leading-tight">Torre</h3>
                  <p class="text-xs text-slate-500">
                    Serra da Estrela · 1993 m
                  </p>
                </div>
                <span
                  class="rounded-full bg-amber-100 text-amber-800 text-xs font-semibold px-2 py-0.5"
                  >Atenção</span
                >
              </div>
              <p
                class="font-['Bricolage_Grotesque',sans-serif] text-4xl font-bold"
              >
                3°
              </p>
              <dl
                class="grid grid-cols-3 gap-2 font-['IBM_Plex_Mono',monospace] text-sm tabular-nums"
              >
                <div>
                  <dt
                    class="font-sans text-[11px] uppercase tracking-wider text-slate-500"
                  >
                    Vento
                  </dt>
                  <dd>26 <span class="text-slate-500">N</span></dd>
                </div>
                <div>
                  <dt
                    class="font-sans text-[11px] uppercase tracking-wider text-slate-500"
                  >
                    Chuva
                  </dt>
                  <dd>4,1 mm</dd>
                </div>
                <div>
                  <dt
                    class="font-sans text-[11px] uppercase tracking-wider text-slate-500"
                  >
                    Sens.
                  </dt>
                  <dd>−2°</dd>
                </div>
              </dl>
              <p class="text-xs text-amber-800">
                Temperatura baixa, possível gelo
              </p>
            </a>
          </li>
          <li>
            <a
              href="local.html?id=pena"
              class="h-full rounded-lg border border-slate-200 bg-white p-4 flex flex-col gap-3 hover:shadow-md transition-shadow"
            >
              <div class="flex items-start justify-between gap-2">
                <div>
                  <h3 class="font-semibold leading-tight">Trilho da Pena</h3>
                  <p class="text-xs text-slate-500">Sintra · trilho</p>
                </div>
                <span
                  class="rounded-full bg-emerald-100 text-emerald-700 text-xs font-semibold px-2 py-0.5"
                  >Bom</span
                >
              </div>
              <p
                class="font-['Bricolage_Grotesque',sans-serif] text-4xl font-bold"
              >
                15°
              </p>
              <dl
                class="grid grid-cols-3 gap-2 font-['IBM_Plex_Mono',monospace] text-sm tabular-nums"
              >
                <div>
                  <dt
                    class="font-sans text-[11px] uppercase tracking-wider text-slate-500"
                  >
                    Vento
                  </dt>
                  <dd>9 <span class="text-slate-500">O</span></dd>
                </div>
                <div>
                  <dt
                    class="font-sans text-[11px] uppercase tracking-wider text-slate-500"
                  >
                    Chuva
                  </dt>
                  <dd>0,6 mm</dd>
                </div>
                <div>
                  <dt
                    class="font-sans text-[11px] uppercase tracking-wider text-slate-500"
                  >
                    Humid.
                  </dt>
                  <dd>88%</dd>
                </div>
              </dl>
              <p class="text-xs text-slate-500">
                Condições dentro dos seus limites
              </p>
            </a>
          </li>
        </ul>
        <a
          href="#"
          class="mt-4 inline-block text-sm font-medium text-sky-700 hover:underline"
          >+ Seguir outro local</a
        >
      </section>

      <!-- Últimos relatos -->
      <section aria-labelledby="t-ultimos" class="flex flex-col gap-4">
        <div class="flex flex-wrap items-baseline justify-between gap-2">
          <h2
            id="t-ultimos"
            class="font-['Bricolage_Grotesque',sans-serif] text-xl font-bold"
          >
            Últimos relatos
          </h2>
          <a
            href="relatos.html"
            class="text-sm font-medium text-sky-700 hover:underline"
            >Ver todos</a
          >
        </div>
        <ul class="grid gap-4 md:grid-cols-2">
          <li
            class="rounded-lg border border-slate-200 bg-white p-4 flex flex-col gap-1"
          >
            <div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-sm">
              <span class="font-semibold">Praia do Guincho</span>
              <span class="text-slate-500">hoje, 17:40 · marta.r</span>
            </div>
            <p>
              Rajadas muito fortes na zona norte da praia. Kitesurf só para quem
              tem experiência.
            </p>
          </li>
          <li
            class="rounded-lg border border-slate-200 bg-white p-4 flex flex-col gap-1"
          >
            <div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-sm">
              <span class="font-semibold">Supertubos</span>
              <span class="text-slate-500">hoje, 16:15 · joao_s</span>
            </div>
            <p>
              Ondas limpas e regulares, pouca gente na água. A previsão acertou.
            </p>
          </li>
        </ul>
      </section>
    </main>

   <?php include __DIR__ . "/inc/rodape.php" ?>

    <script>
      const agora = new Date();
      const hora = agora.getHours();
      const saudacao = document.getElementById("saudacao");

      if (hora < 12) {
        saudacao.textContent = "Bom dia.";
      } else if (hora < 20) {
        saudacao.textContent = "Boa tarde.";
      } else {
        saudacao.textContent = "Boa noite.";
      }

      //console.log(hora);
    </script>
  </body>
</html>
