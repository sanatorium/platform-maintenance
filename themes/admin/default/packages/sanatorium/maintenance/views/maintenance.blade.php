<!doctype html>
<html>
<head>
    <title>{{ trans('sanatorium/maintenance::common.title') }}</title>
    <style>
        body { text-align: center; padding: 150px; }
        h1 { font-size: 50px; }
        body { font: 20px Helvetica, sans-serif; color: #333; }
        article { display: block; text-align: left; width: 650px; margin: 0 auto; }
        a { color: #dc8100; text-decoration: none; }
        a:hover { color: #333; text-decoration: none; }
        small { font-size: 11px; color: #aaa }
    </style>

<body>

<article>
    <h1>{{ trans('sanatorium/maintenance::common.title') }}</h1>
    <div>
        <p>
            {!! trans('sanatorium/maintenance::common.message', ['email_address' => config('mail.from.address')]) !!}
        </p>
        <p>&mdash; {{ config('platform.app.title') }}</p>
    </div>
    <hr>
    <p>
        <small>
            {{ (Theme::getActive('frontend'))->name }}
            @if ( isset($_SERVER['REMOTE_ADDR']) )
            |
            {{ $_SERVER['REMOTE_ADDR'] }}
            @endif
        </small>
    </p>
</article>

</body>
</html>