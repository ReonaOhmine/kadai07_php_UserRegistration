<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <div class="header_contents">
        <div class="headerIcon">
            <img src="image/freddylogo.png" alt="freddy" width="250" />
        </div>
    </div>
</header>

<body>
    <section class="entry2">
        <div>
            <div class="entry_title">
                <h2>簡単30秒</h2>
                <div class="membership">
                    <p>会員登録</p>
                </div>
                <p>
                    以下より会員登録をお願いいたします。<br />
                    登録完了後、メールのご案内が送られますので<br />
                    ご確認をよろしくお願いいたします。
                </p>
            </div>

            <form class="form" action="write.php" method="post" name="form">
                <label class="label_contents" for="name">
                    <div class="label_title">
                        <p>お名前</p>
                        <p id="red">*</p>
                    </div>
                    <input type="text" id="name" name="name" placeholder="名字　名前" required size="30" />
                </label>

                <label for="email">
                    <div class="label_title">
                        <p>メールアドレス</p>
                        <p id="red">*</p>
                    </div>
                    <input type="email" id="email" size="30" name="email" placeholder="example@gmail.com" required />
                </label>

                <label for="birthday">
                    <div class="label_title">
                        <p>生年月日</p>
                        <p id="red">*</p>
                    </div>
                    <input type="date" id="birthday" name="birthday" required />
                </label>

                <label for="job">
                    <div class="label_title">
                        <p>職種</p>
                        <p id="red">*</p>
                    </div>
                    <select name="job" id="job-select">
                        <option value="">--該当職種をお選びください--</option>
                        <option value="エンジニア">エンジニア</option>
                        <option value="デザイナー">デザイナー</option>
                        <option value="マーケター">マーケター</option>
                        <option value="その他">その他</option>
                    </select>
                </label>

                    <div class="label_title">
                        <p>実務経験は2年以上ありますか？</p>
                        <p id="red">*</p>
                    </div>
                    <div>
                        <input type="radio" id="experience" name="experience" value="はい" checked />
                        <label for="はい">はい</label>
                    </div>
                    <div>
                        <input type="radio" id="no-experience" name="experience" value="いいえ" />
                        <label for="いいえ">いいえ</label>
                    </div>



                <div>
                    <div class="doui">
                        <a href="">利用規約</a>
                        <p>と</p>
                        <a href="">プライバシーポリシー</a>
                    </div>
                    <br />
                    <p>をご確認の上、「同意して登録する」ボタンを押してください。</p>
                </div>
                <button>同意して登録する</button>
            </form>
        </div>
    </section>
</body>

<footer class="footerWrapper">
    <div class="footerContener">
        <div class="footerText">
            <p class="kaisya">会社情報</p>
            <p class="kaisyaDetail">・会社名　株式会社Freddy</p>
            <p class="kaisyaDetail">・代表者　代表取締役　大嶺 怜音奈</p>
            <p class="kaisyaDetail">
                ・本社所在地　東京都渋谷区道玄坂１丁目１０番８号
            </p>
            <div class="kaisyaDetails">
                <p>・事業内容　</p>
                <p>
                    - システムエンジニアリング事業<br />
                    - 採用コンサルティング事業<br />
                    - 各種ＷＥＢサービスの企画、開発、販売、運営事業
                </p>
            </div>
            <p class="kaisyaDetail">
                ・お問い合わせ先　<span link="#">こちら</span>よりご連絡をお願いいたします。
            </p>
        </div>
        <div class="c">
            <p>©︎2024 Freddy.</p>
        </div>
        <div></div>
    </div>
</footer>
</body>

</html>