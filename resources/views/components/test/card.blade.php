@props([
  'title',
  'content' => '初期値本文です',
  'message' => 'メッセージ初期値です',
])

<div class="border-2 shadow-md w-1/4 p-2">
  <div>{{ $title }}</div>
  <div>画像</div>
  <div>{{ $content }}</div>
  <div>{{ $message }}</div>
</div>
