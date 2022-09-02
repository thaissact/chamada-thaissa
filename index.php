<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>chamada</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link href="chamada.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
 
</head>

<body>

  <h1>Chamada PPI 2022</h1>
 <main class="containe">
   <button data-toggle="modal" data-target="#chamada" class"btn-padrao">
     MARCAR PRESENÇA</button>
<h2>Registros</h2>
   <table>
<thead>
  <tr>
    <th>NOMES</th>
    <th>04/jul</th>
    <th>05/jul</th>
    <th>06/jul</th>
    <th>07/jul</th>
    <th>08/jul</th>
    <th>09/jul</th>
  </tr>
</thead>
     <tbody id="dados">
       <tr>
       <td>Thaíssa Vitória Silva da Costa</td>
    <td>x</td>
    <td>x</td>
    <td>x</td>
    <td>x</td>
    <td>x</td>
    <td>x</td>
         </tr>

       <tr>
       <td>Kamilly Naielly do Nascimento  </td>
    <td>x</td>
    <td>x</td>
    <td>x</td>
    <td>x</td>
    <td>x</td>
    <td>x</td>
         </tr>

         <tr>
       <td>Jumara Fernades da paz Vencancio  </td>
    <td>x</td>
    <td>x</td>
    <td>x</td>
    <td>x</td>
    <td>x</td>
    <td>x</td>
         </tr>
       
     </tbody>
     
   </table>
 </main>
  <div class="modal" tabindex="-1" id="chamada">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Marcar Presença</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action ="" method="post">
         <div class="form-group">
           <label for="txt_nome">Nome</label>
           <input type= "text" name="txt_nome"
           id="txt_nome" class="form-control">
      </div>
         <div class="modal-body">
       <form action ="" method="post">
         <div class="form-group">
           <label for="txt_nome">Senha</label>
           <input type= "password" name="txt_nome" 
           id="txt_nome" class="form-control">
      </div>

         <div class="text-center">
           
        <button type="button" class="btn-padrao"
          onclick="presenca()">
          Marcar Presença</button>
         
    </div>
  </div>
</div>
      <script src="js/registrarchamada.js" defer></script>
</body>

</html>
