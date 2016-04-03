<!doctype html>
<html lang="ch_zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>{!! $topic->title !!}</title>
    <link rel="stylesheet" href="{!! cdn_elixir('css/api.css') !!}">
</head>
<body>
<div class="header-title">
    <h3>{!! $topic->title !!}</h3>

    <p>{!! $topic->created_at->format('Y-m-d H:i:s') !!} • {!! $topic->view_count !!} 阅读</p>
</div>
<div class="markdown-content topic-body">
    {!! $topic->body !!}
</div>

<script src="{!! cdn_elixir('js/api.js') !!}"></script>
</body>
</html>