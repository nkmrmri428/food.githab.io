<!DOCTYPE html>
<html>
<html lang="ja"></html>
  <head>
    <meta charset="utf-8">
    <title>賞味期限管理</title>
    <link rel="stylesheet" href="stylesheet4.css">
  </head>
  
  <body>
    <header>
        <h1>賞味期限管理</h1>
    </header>
    
    <main>
        <div = "thanks_massage">お問い合わせいただきありがとうございます。</div>
        
        <div class="display_contact">
            <div class="form_title">入力内容</div>
            
            
            <div class="form_title">名前</div>
            <?php
            echo $_POST['name'];
            ?>
            
              <div class="form_title">メールアドレス</div>
            <?php
            echo $_POST['mail'];
            ?>
            
            <div class="form_title">お問い合わせの種類</div>
            <?php
            echo $_POST['category'];
            ?>
            
            <div class="form_title">内容</div>
            <?php
            echo $_POST['body'];
            ?>

        </div>
        
    </main>
    
  </body>
</html>