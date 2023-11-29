<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LucasCript</title>
</head>
<body>
  <form method="post">
    <input type="text" name="inputValue" id="inputValue" placeholder="Digite um valor">
    <button type="submit" name="submit">Magic!</button>

    <section class="radio-section">
      <div class="radio-list">
        <div class="radio-item">
          <input type="radio" name="radio" id="radio1" value="MD5">
          <label for="radio1">MD5</label>
        </div>
        <div class="radio-item">
          <input type="radio" name="radio" id="radio2" value="SHA-256">
          <label for="radio2">SHA-256</label>
        </div>
      </div>
    </section>
  </form>

  <div id="resultado">

    <?php
    if (isset($_POST['submit'])) {
      $valorDigitado = $_POST['inputValue'];
      $radioSelecionado = isset($_POST['radio']) ? $_POST['radio'] : "";

      if ($radioSelecionado == "MD5") {
        $valorDigitado = hash('md5', $valorDigitado);
        echo $valorDigitado;
      } elseif ($radioSelecionado == "SHA-256") {
        $valorDigitado = hash('sha256', $valorDigitado);
        echo $valorDigitado;
      } else {
        echo "Selecione uma opção para hash";
      }
    }
    ?>
  
  <style>
 body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
  }
  
  .input-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
  }

  #inputValue {
    padding: 10px;
    margin: 5px;
    border: 2px solid #007bff;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
  }

  button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }

  button:hover {
    background-color: #0056b3;
  }

  .radio-section {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  .radio-item {
    margin: 10px;
  }

  #resultado {
    margin-top: 20px;
    font-weight: bold;
  }
  </style>
</body>
</html>

