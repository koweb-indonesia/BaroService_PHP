<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CASHBILL.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/현금영수증-API#CancelStopCashBillScrap
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';

    $Result = $BaroService_CASHBILL->CancelStopCashBillScrap([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
    ])->CancelStopCashBillScrapResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
