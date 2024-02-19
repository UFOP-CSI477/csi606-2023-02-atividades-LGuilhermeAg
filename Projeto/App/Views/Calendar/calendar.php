<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="icon" type="image/png" sizes="16x16" href="../../public/ico/favicon-32x32.png">
    <!-- <link rel="stylesheet" href="../../public/CSS/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../../public/css/style-calendar.css" />
    <title>Calendário de serviços</title>
  </head>
  <body>
    <div class="nav-buttons">
      <p>
        <nav class="nav">
          <a href="#" class="nav_logo">Bendita Limpeza - Área Interna</a>
          <button class="button" id="calendarioDe"></button>
          <button class="button" id="btnSair" onclick="logout()">SAIR</button>
        </nav>
      </p>
    </div>
    <div id="admOnly" class="d-none" style="width:35vw;margin:5em 3em 3em 3em; overflow-y: auto; padding: 1.5em">
      <h1>Listagem de usuários e eventos</h1><br>
      <div id="painel">
      </div>
    </div>
    <div class="container" id="content">
      <div class="left">
        <div class="calendar">
          <div class="month">
            <i class="fas fa-angle-left prev"></i>
            <div class="date">Erro ao carregar</div>
            <i class="fas fa-angle-right next"></i>
          </div>
          <div class="weekdays">
            <div>Dom</div>
            <div>Seg</div>
            <div>Ter</div>
            <div>Qua</div>
            <div>Qui</div>
            <div>Sex</div>
            <div>Sab</div>
          </div>
          <div class="days"></div>
          <div class="goto-today">
            <div class="goto">
              <input type="text" placeholder="mm/aaaa" class="date-input" />
              <button class="goto-btn">Ir</button>
            </div>
            <button class="today-btn">Hoje</button>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="today-date">
          <div class="event-day"></div>
          <div class="event-date"></div>
        </div>
        <div class="events"></div>
        <div class="add-event-wrapper">
          <div class="add-event-header">
            <div class="title">Novo Serviço</div>
            <i class="fas fa-times close"></i>
          </div>
          <div class="add-event-body">
            <div class="add-event-input">
              <input type="text" placeholder="Nome do compromisso" class="event-name" />
            </div>
            <div class="add-event-input">
              <input
                type="text"
                placeholder="Horário de Início"
                class="event-time-from"
              />
            </div>
            <div class="add-event-input">
              <input
                type="text"
                placeholder="Horário de Termino"
                class="event-time-to"
              />
            </div>
          </div>
          <div class="add-event-footer">
            <button class="add-event-btn">Adicionar Serviço</button>
          </div>
        </div>
      </div>
      <button class="add-event">
        <i class="fas fa-plus"></i>
      </button>
    </div>
    <div class="credits">
      <p>
        19.1.8025 - Luís Guilherme Lopes Aguiar<br>
        <i>Sistemas Web - UFOP/ICEA</i>
      </p>
    </div>
    <script src="../../public/singleton.js"></script>
    <script src="../../public/script.js"></script>
  </body>
</html>
