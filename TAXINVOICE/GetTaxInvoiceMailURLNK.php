<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#GetTaxInvoiceMailURLNK
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $NTSConfirmNum = '';

    $Result = $BaroService_TI->GetTaxInvoiceMailURLNK([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'NTSConfirmNum' => $NTSConfirmNum,
    ])->GetTaxInvoiceMailURLNKResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>