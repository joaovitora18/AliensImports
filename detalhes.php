<?php 
    include 'array.php';
    $id = $_GET['id'];
    foreach ($dados as $dado){ if ($dado['id'] == $id){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/alienNav.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <link rel="shortcut icon" href="img/alienNav.png" type="image/x-icon">
   
    <title><?php echo ($dado['nome']);?></title>
</head>
<body>
    <!-- header -->
    <?php include 'header.html'?>
        <div id="htt">
        <div id="body" class = "card-wrapper">
      <div class = "d-flex">

        <!-- card left -->
        <div class ="" style="width: 470px;">
          <img class="rounded imgdet" style="margin-left: -30px !important ;width: 470px" src="<?php echo $dado['img'] ?>" alt="">
          </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title"><?php echo $dado['nome']?></h2>
          <div class = "product-price">
            <p class = "new-price fw-bold text-success display-6 "><?php echo $dado['preco']?></p>
          </div>

          <div class = "product-detail">
            <h2>Descrição: </h2>
            <p><?php echo $dado['desc']?></p>
            <ul>
              <li>Disponibilidade: <span>Em estoque</span></li>
              <li>Categoria: <span>Tenis</span></li>
              <li>Envio: <span>São Paulo e Região</span></li>
              <li>Valor do frete: <span>Gratuíto</span></li>
            </ul>
          </div>

          <div class = "purchase-info d-flex align-items-center">
            <input class="" type = "number" min = "0" value = "1">
            <button type = "button" class = "btn bg-success">
              Adicionar ao carrinho <i class = "fas fa-shopping-cart"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
        </div>
    
    <!-- footer -->
    <?php include 'footer.html'?>
    
</body>
</html>
<?php }}?>