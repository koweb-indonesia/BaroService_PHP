<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#GetTaxInvoicePopUpURLNK
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $NTSConfirmNum = '';
    $ID = '';
    $PWD = '';

    $Result = $BaroService_TI->GetTaxInvoicePopUpURLNK([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'NTSConfirmNum' => $NTSConfirmNum,
        'ID' => $ID,
        'PWD' => $PWD,
    ])->GetTaxInvoicePopUpURLNKResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
