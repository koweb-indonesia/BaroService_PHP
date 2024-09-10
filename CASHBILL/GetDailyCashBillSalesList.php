<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CASHBILL.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/현금영수증-API#GetDailyCashBillSalesList
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $UserID = '';
    $BaseDate = '';
    $CountPerPage = 10;
    $CurrentPage = 1;
    $OrderDirection = 2;

    $Result = $BaroService_CASHBILL->GetDailyCashBillSalesList([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'UserID' => $UserID,
        'BaseDate' => $BaseDate,
        'CountPerPage' => $CountPerPage,
        'CurrentPage' => $CurrentPage,
        'OrderDirection' => $OrderDirection,
    ])->GetDailyCashBillSalesListResult;

    if ($Result->CurrentPage < 0) { // 실패
        echo $Result->CurrentPage;
    } else { // 호출 성공
        echo $Result->CurrentPage;
        echo '<br/>';
        echo $Result->CountPerPage;
        echo '<br/>';
        echo $Result->MaxPageNum;
        echo '<br/>';
        echo $Result->MaxIndex;
        echo '<br/>';

        if (!array_key_exists('SimpleCashBill', $Result->SimpleCashBillList)) {
            $SimpleCashbills = [];
        } else if (!is_array($Result->SimpleCashBillList->SimpleCashBill)) {
            $SimpleCashbills = [$Result->SimpleCashBillList->SimpleCashBill];
        } else {
            $SimpleCashbills = $Result->SimpleCashBillList->SimpleCashBill;
        }

        foreach ($SimpleCashbills as $SimpleCashbill) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($SimpleCashbill);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
