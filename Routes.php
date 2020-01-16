<?php

Route::set('index.php', function () {
    IndexController::CreateView('Index');
});

Route::set('data', function () {
    DataController::CreateView('Data');
});
