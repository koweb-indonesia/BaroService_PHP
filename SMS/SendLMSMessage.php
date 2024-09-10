<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_SMS.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/문자전송-API#SendLMSMessage
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SenderID = '';
    $FromNumber = '';
    $ToName = '';
    $ToNumber = '';
    $Subject = '';
    $Contents = '';
    $SendDT = '';
    $RefKey = '';

    $Result = $BaroService_SMS->SendLMSMessage([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SenderID' => $SenderID,
        'FromNumber' => $FromNumber,
        'ToName' => $ToName,
        'ToNumber' => $ToNumber,
        'Subject' => $Subject,
        'Contents' => $Contents,
        'SendDT' => $SendDT,
        'RefKey' => $RefKey,
    ])->SendLMSMessageResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
