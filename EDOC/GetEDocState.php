<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_EDOC.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/전자문서-API#GetEDocState
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $UserID = '';
    $MgtKey = '';

    $Result = $BaroService_EDOC->GetEDocState([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'UserID' => $UserID,
        'MgtKey' => $MgtKey,
    ])->GetEDocStateResult;

    if ($Result->BarobillState < 0) { // 실패
        echo $Result->BarobillState;
    } else { // 호출 성공
        // 필드정보는 레퍼런스를 참고해주세요.
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>