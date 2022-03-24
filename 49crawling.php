<?php
    if(isset($_POST["url"]))
    {
        $url = $_POST["url"];
    }else
    {
        $url = "";
    }

    echo "url = $url <br>";

    if($url != "")
    {
        // CURL : cURL : Client URL
        // wget https://kbstar.com

        $OPENURL = $url;
        // init
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $OPENURL);  // URL 지정
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // 요청결과를 문자열로 반환
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 원격서버의 인증서 유효성 검사
        $response = curl_exec($curl);

        // Save to DB

        curl_close($curl);

    }

?>
<form method="post" action="main.php?cmd=49crawling">
<div class="row">
    <div class="col">
        <input type="text" name="url" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-primary">크롤링</button>
    </div>
</div>

<div class="row">
    <div class="col">
        <textarea class="form-control" rows="15">
            <?php
                if(isset($response))
                {
                    echo $response;
                }
            ?>
        </textarea>
    </div>
</div>
</form>

<script>
    function repeatCrawling()
    {
        setInterval(function(){
            crawling();
        }, 3000)
    }

    function crawling()
    {
        alert('crawling...');
    }

    repeatCrawling();
</script>
 
