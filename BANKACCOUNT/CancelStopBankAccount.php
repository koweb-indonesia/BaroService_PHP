<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_BANKACCOUNT.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/계좌조회-API#CancelStopBankAccount
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $BankAccountNum = '';

    $Result = $BaroService_BANKACCOUNT->CancelStopBankAccount([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'BankAccountNum' => $BankAccountNum,
    ])->CancelStopBankAccountResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>