<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Портфолио</title>
    <?wp_head()?>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;700&display=swap" rel="stylesheet"/>
</head>
  <body class="bg-medium_color">
    <header class="w-100 bg-dark_color backdrop-filter py-2" id="header">
      <div class="container-lg">
        <div class="overflow"></div>
        <?
          wp_nav_menu( [
            'theme_location'  => 'MainMenu',
            'container'       => 'nav',
            'container_class' => 'text-center', 
            'container_id'    => 'nav-header',
            'items_wrap'      => '<ul>%3$s</ul>',
          ] );
        ?>
        <div class="d-block d-lg-none p-2" id="burger">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="42"
            height="42"
            fill="rgb(240, 240, 240)"
            class="bi bi-list"
            viewBox="0 0 16 16"
          >
            <path
              fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
            /></svg
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="42"
            height="42"
            fill="rgb(240, 240, 240)"
            class="bi bi-arrow d-none"
            viewBox="0 0 16 16"
          >
            <path
              fill-rule="evenodd"
              d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"
            />
          </svg>
        </div>
      </div>
    </header>