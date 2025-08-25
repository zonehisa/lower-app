<?php

use function Livewire\Volt\{state, mount};

state(['word' => '','lower_word' => '']);

mount(function () {
    $this->lower_word = strtolower($this->word);
});

?>

<div>
    <h1>入力された文字</h1>
    <p>{{ $word }}</p>
    <h1>小文字に変換された文字</h1>
    <p>{{ $lower_word }}</p>
</div>
