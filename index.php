<?php
    // 現在の日付と時間を取得
    $date = date('Y-m-d');
    $time = date('H:i:s');

    // ブラウザに表示
    echo "今日の日付: " . $date . "<br>";
    echo "現在の時間: " . $time . "<br>";

    // 昨日の日付を取得
    $yesterday = date('Y-m-d', strtotime('-1 day'));

    // 明日の日付を取得
    $tomorrow = date('Y-m-d', strtotime('+1 day'));

    // 一週間後の日付を取得
    $nextWeek = date('Y-m-d', strtotime('+1 week'));

    // ブラウザに表示
    echo "昨日の日付: " . $yesterday . "<br>";
    echo "明日の日付: " . $tomorrow . "<br>";
    echo "一週間後の日付: " . $nextWeek. "<br>";

        // 今日から3ヶ月後の日付を計算
    $nextThreeMonths = date('Y-m-d', strtotime('+3 months'));

    // 今日の日付を取得
    $today = date('Y-m-d');

    // 日付の差を計算
    $dateDiff = date_diff(date_create($today), date_create($nextThreeMonths));
    $daysLater = $dateDiff->format('%a');

    // ブラウザに表示
    echo "今日から3ヶ月後の日付: " . $nextThreeMonths . "<br>";
    echo "今日から: " . $daysLater . "日後";
?>