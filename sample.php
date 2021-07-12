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
        <div = "contact_form">お問い合わせ</div>
        <form method="post" action="http://localhost/sent.php">
            
            <div class="form_item">名前</div>
            <input type="text" name="name">

            <div class="form_item">メールアドレス</div>
            <input type="text" name="mail">

            <div class="form_item">お問い合わせの種類</div>
            <?php
              $types = array("きげんみるに関するご質問", "パスワードの再発行","その他");
            ?>
            <select name="category">
              <option value="未選択">選択してください</option>
              <?php
                foreach ($types as $type) {
                  echo "<option value='{$type}'>{$type}</option>";
                }
              ?>
            </select>
            <div class="form_item">内容</div>
            <textarea name="body" cols="30" rows="10"></textarea>
            
            <input type="submit" value="送信">
          
        </form>
        
    </main>

  </body>
</html>
