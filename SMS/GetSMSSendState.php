<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_SMS.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/문자전송-API#GetSMSSendState
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SendKey = '';

    $Result = $BaroService_SMS->GetSMSSendState([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SendKey' => $SendKey,
    ])->GetSMSSendStateResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>