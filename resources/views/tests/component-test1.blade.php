<x-test.app>
  <x-slot name=header>ヘッダー１</x-slot>
  コンポーネントテスト１
  <x-test.card title="タイトルテスト1" content="コンテンツテスト1" :message="$message" />
  <x-test.card title="タイトルテスト2" />
</x-test.app>
