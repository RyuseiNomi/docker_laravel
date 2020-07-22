<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">タスク一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">コンテンツ</th>
        <th class="text-center">作成日</th>
        <th class="text-center">最終更新日</th>
      </tr>
      @foreach($todos as $todo)
      <tr>
        <td>{{ $todo->content }}</td>
        <td>{{ $todo->created_at }}</td>
        <td>{{ $todo->updated_at }}</td>
      </tr>
      @endforeach
    </table>
    <div><a href="/book/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>
