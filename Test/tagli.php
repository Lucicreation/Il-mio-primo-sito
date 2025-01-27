$cookieName = "datiLogin";
$cookieExpire = time() +86000;
//Salvare i dati
  if(isset($_POST['save'])) {
      //se il cookie esiste, salva il dato nella pagina php
      if(isset($_COOKIE[$cookieName])) {
        $save = $_COOKIE[$cookieName] 
      }
  }
